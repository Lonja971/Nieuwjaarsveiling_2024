<?php
require_once '../include/db.php';

$current_time = time();
$one_month_ago = strtotime('-1 month', $current_time);

// Отримуємо значення токена з запиту AJAX
$t = $_POST['t'];

// Виконуємо запит до таблиці tokens
$sql = "SELECT user_id FROM tokens WHERE token_identifier = '$t' AND created_at >= $one_month_ago";
$result = mysqli_query($mysqli, $sql);

if ($result) {
    // Перевіряємо, чи було знайдено запис
    if (mysqli_num_rows($result) > 0) {
        // Отримуємо значення user_id з першого знайденого запису
        $row = mysqli_fetch_assoc($result);
        $player_id = $row['user_id'];
        
        // Повертаємо значення player_id у відповідь на AJAX-запит
        echo json_encode(array('player_id' => $player_id));
    } else {
        // Якщо запис не знайдено або створений більше, ніж місяць тому, видаляємо його
        $delete_sql = "DELETE FROM tokens WHERE token_identifier = '$t'";
        // Встановлюємо термін дії cookie на минулу дату
        setcookie('t', '', time() - 3600, '/');


        if (mysqli_query($mysqli, $delete_sql)) {
            // Повідомлення про видалення запису
            echo json_encode(array('deleted' => true));
            header("Location: ../registration/registration.php");
            exit();
        } else {
            // Помилка видалення
            echo json_encode(array('error' => 'Помилка при видаленні запису: ' . mysqli_error($mysqli)));
        }
    }
} else {
    // У разі помилки в запиті повертаємо відповідну помилку
    echo json_encode(array('error' => mysqli_error($mysqli)));
}
?>

