<?php
require_once '../include/db.php';

// Перевіряємо, чи є кука player_id
if (isset($_COOKIE['player_id'])) {
    $player_id = $_COOKIE['player_id'];

    // Doorzoek de database om informatie te krijgen over de tanks van de gebruiker
    $getUserTanksQuery = "SELECT tanks.tank_name FROM player_tanks
                        JOIN tanks ON player_tanks.tank_id = tanks.tank_id
                        WHERE player_tanks.player_id = '$player_id'";

    $userTanksResult = mysqli_query($mysqli, $getUserTanksQuery); // Wijzig hier de variabele $mysql in $mysqli

    if ($userTanksResult) {
        $userTanks = array();

        while ($row = mysqli_fetch_assoc($userTanksResult)) {
            $userTanks[] = $row['tank_name'];
        }

        // We retourneren het resultaat in JSON-indeling
        echo json_encode($userTanks);
    } else {
        echo json_encode(array('error' => 'Помилка при виконанні запиту: ' . mysqli_error($mysqli)));
    }
} else {
    echo json_encode(array('error' => 'Кука player_id не знайдена. Вибачте, але ви не авторизовані.'));
}
?>