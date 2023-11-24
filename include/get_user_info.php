<?php

include('../include/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Haal player_id op uit de queryparameter
    $player_id = isset($_GET['player_id']) ? $_GET['player_id'] : null;

    if ($player_id !== null) {
        // Voer een query uit in de database om informatie over een gebruiker te verkrijgen op basis van zijn speler_id
        $query = "SELECT player_name, gold, tokens FROM players WHERE player_id = ?";
        $stmt = $mysqli->prepare($query);

        if ($stmt) {
            $stmt->bind_param('s', $player_id);
            $stmt->execute();
            $stmt->bind_result($player_name, $gold, $tokens);
            $stmt->fetch();

            // Gegevens retourneren in JSON-indeling
            echo json_encode(['player_name' => $player_name, 'gold' => $gold, 'tokens' => $tokens]);

            $stmt->close();
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Помилка підготовки запиту']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Не вказаний player_id']);
    }
} else {
    // Запит не є GET-запитом
    http_response_code(405);
    echo json_encode(['error' => 'Неприпустимий метод запиту']);
}
?>