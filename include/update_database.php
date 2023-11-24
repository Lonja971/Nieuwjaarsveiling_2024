<?php

include('../include/db.php');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Haal gegevens op uit de hoofdtekst van een POST-verzoek
        $postData = json_decode(file_get_contents('php://input'), true);
        
        if ($postData !== null) {
            // Gegevens verkrijgen
            $player_name = $postData['player_name'];
            $gold = $postData['gold'];
            $tokens = $postData['tokens'];

            // Voer een query uit op de database om gebruikersinformatie bij te werken
            $query = "UPDATE players SET gold = ?, tokens = ? WHERE player_name = ?";
            $stmt = $mysqli->prepare($query);

            if ($stmt) {
                // Bindparameters
                $stmt->bind_param('iis', $gold, $tokens, $player_name);
                $stmt->execute();
                $stmt->close();
                echo json_encode(['success' => true]);
            } else {
                throw new Exception('Помилка підготовки запиту');
            }
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'Невірний формат даних']);
        }
    } else {
        http_response_code(405);
        echo json_encode(['error' => 'Неприпустимий метод запиту']);
    }
} catch (Exception $e) {
    // Обробка помилок
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>