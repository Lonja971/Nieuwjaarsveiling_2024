<?php
require_once '../include/db.php';

if (isset($_POST['playerId']) && isset($_POST['tankId'])) {
    $playerId = $_POST['playerId'];
    $tankId = $_POST['tankId'];

    $addTankQuery = "INSERT INTO player_tanks (player_id, tank_id) VALUES ('$playerId', '$tankId')";
    $addTankResult = $mysqli->query($addTankQuery);

    if ($addTankResult) {
        echo json_encode(['success' => 'Танк успішно додано']);
    } else {
        $errorMessage = 'Помилка при виконанні запиту: ' . $mysqli->error;
        echo json_encode(['error' => $errorMessage]);
        error_log($errorMessage, 0);
    }
} else {
    echo json_encode(['error' => 'Не отримано необхідні дані для додавання танка']);
}
?>