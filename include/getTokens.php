<?php
require_once('../include/db.php');

$playerId = $_GET['player_id'];
$num = $_GET['num'];

if ($playerId && $num) {
    switch ($num) {
        case 1:
            $query = "SELECT tokensTimer FROM players WHERE player_id = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param('s', $playerId);
            $stmt->execute();
            $stmt->bind_result($tokensTimer);
            $stmt->fetch();
            $stmt->close();

            echo json_encode(['tokensTimer' => $tokensTimer, 'timerValue' => $tokensTimer]);
            break;
        case 2:
            $query = "UPDATE players SET tokensTimer = NULL WHERE player_id = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param('s', $playerId);
            $stmt->execute();
            $stmt->close();

            echo json_encode(['success' => true]);
            break;
        case 3:
            $newValue = $_GET['newValue'];
            $query = "UPDATE players SET tokensTimer = ? WHERE player_id = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param('is', $newValue, $playerId);
            $stmt->execute();
            $stmt->close();

            echo json_encode(['success' => true]);
            break;
        default:
            echo json_encode(['error' => 'Invalid num value']);
    }
} else {
    echo json_encode(['error' => 'Player ID or num not provided']);
}
?>
