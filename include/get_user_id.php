<?php
require_once '../include/db.php';

// Отримуємо значення токена з запиту AJAX
$t = $_POST['t'];

// Виконуємо запит до таблиці tokens
$sql = "SELECT user_id FROM tokens WHERE token_identifier = '$t'";
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
        // Якщо запис не знайдено, повертаємо порожню відповідь
        echo json_encode(array());
    }
} else {
    // У разі помилки в запиті повертаємо відповідну помилку
    echo json_encode(array('error' => mysqli_error($mysqli)));
}
?>
