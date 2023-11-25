<?php
require_once '../include/db.php';

// Перевіряємо, чи є кука player_id
if (isset($_COOKIE['player_id'])) {
    $player_id = $_COOKIE['player_id'];

    // Повідомлення про старт
    echo 'Status: Start<br>';

    // Запит для отримання інформації про танки гравця
    $getUserTanksQuery = "SELECT tanks.tank_name FROM player_tanks
                        JOIN tanks ON player_tanks.tank_id = tanks.tank_id
                        WHERE player_tanks.player_id = '$player_id'";
    echo 'Status: Querying database<br>';

    $userTanksResult = mysqli_query($mysqli, $getUserTanksQuery);

    // Повідомлення про завершення запиту до бази даних
    echo 'Status: Query executed<br>';

    if ($userTanksResult) {
        // Повідомлення про успіх отримання даних
        echo 'Status: Data retrieved successfully<br>';

        $userTanks = array();

        while ($row = mysqli_fetch_assoc($userTanksResult)) {
            $userTanks[] = $row['tank_name'];
        }

        // Повідомлення про успішне перетворення даних
        echo 'Status: Data transformed successfully<br>';

        // Виведення результату в консоль
        echo json_encode($userTanks);
    } else {
        // Виведення помилки в консоль
        echo json_encode(array('error' => 'Помилка при виконанні запиту: ' . mysqli_error($mysqli)));
    }
} else {
    // Виведення помилки в консоль
    echo json_encode(array('error' => 'Кука player_id не знайдена. Вибачте, але ви не авторизовані.'));
}
?>
