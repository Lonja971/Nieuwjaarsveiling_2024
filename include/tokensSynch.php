<?php
require_once '../include/db.php';

// Wij controleren of de benodigde gegevens in de POST-aanvraag zijn ontvangen
if (isset($_POST['playerId']) && isset($_POST['tokens'])) {
    $playerId = $_POST['playerId'];
    $tokens = $_POST['tokens'];

    // We voeren een verzoek uit naar de database om het aantal tokens in de speler bij te werken
    $updateTokensQuery = "UPDATE players SET tokens = '$tokens' WHERE player_id = '$playerId'";
    $updateTokensResult = mysqli_query($mysql, $updateTokensQuery);

    if ($updateTokensResult) {
        // We retourneren de bijgewerkte gegevens over de speler
        $getUserDataQuery = "SELECT player_name, gold, tokens FROM players WHERE player_id = '$playerId'";
        $userDataResult = mysqli_query($mysql, $getUserDataQuery);

        if ($userDataResult) {
            if (mysqli_num_rows($userDataResult) > 0) {
                $userData = mysqli_fetch_assoc($userDataResult);
                // We voeren gegevens uit in een geldig JSON-formaat
                echo json_encode($userData);
            } else {
                echo json_encode(['error' => 'Дані про користувача не знайдено.']);
            }
        } else {
            echo json_encode(['error' => 'Помилка при виконанні запиту: ' . mysqli_error($mysql)]);
        }
    } else {
        echo json_encode(['error' => 'Помилка при виконанні запиту: ' . mysqli_error($mysql)]);
    }
} else {
    echo json_encode(['error' => 'Не отримано необхідні дані для оновлення токенів']);
}
?>
