<?php
require_once '../include/db.php';

if (isset($_COOKIE['player_id'])) {
    $player_id = $_COOKIE['player_id'];

    $getUserTanksQuery = "SELECT tanks.tank_name FROM player_tanks
                        JOIN tanks ON player_tanks.id_tank = tanks.tank_id
                        WHERE player_tanks.id_player = '$player_id'";

    $userTanksResult = mysqli_query($mysqli, $getUserTanksQuery);

    if ($userTanksResult) {
        $userTanks = array();

        while ($row = mysqli_fetch_assoc($userTanksResult)) {
            $userTanks[] = $row['tank_name'];
        }

        echo json_encode($userTanks);
    } else {
        echo json_encode(array('error' => 'Помилка при виконанні запиту: ' . mysqli_error($mysqli)));
    }
} else {
    echo json_encode(array('error' => 'Кука player_id не знайдена. Вибачте, але ви не авторизовані.'));
}
?>