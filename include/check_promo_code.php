<?php

require_once '../include/db.php';

// Controleren of er een databaseverbinding bestaat in het db.php-bestand
if (!isset($mysqli) || $mysqli->connect_error) {
    die('Помилка підключення до БД в db.php: ' . $mysqli->connect_error);
}

// Uit de aanvraag halen wij de waarde van de promotiecode
$promoCode = $_POST['promoCode'];

// We krijgen de gebruikers-ID uit cookies (er wordt aangenomen dat u al weet hoe u dit moet doen)
$userId = $_COOKIE['player_id'];

// Wij controleren of er een actiecode met de opgegeven naam in de bonuscodestabel aanwezig is
$result = $mysqli->query("SELECT * FROM bonuscodes WHERE name = '$promoCode'");

if ($result !== false && $result->num_rows > 0) {
    //Promotiecode gevonden, we krijgen de waarde ervan
    $row = $result->fetch_assoc();
    $promoValue = $row['value'];

    // Wij controleren of de gebruiker deze promotiecode al heeft geactiveerd
    $activationResult = $mysqli->query("SELECT * FROM activated_codes WHERE id_player = '$userId' AND code_name = '$promoCode'");

    if ($activationResult !== false && $activationResult->num_rows > 0) {
        // De gebruiker heeft deze promotiecode al geactiveerd
        echo json_encode(['success' => false, 'message' => 'Промокод вже активовано']);
    } else {
        // De gebruiker heeft deze promotiecode nog niet geactiveerd, laten we deze activeren
        $mysqli->query("INSERT INTO activated_codes (id_player, code_name) VALUES ('$userId', '$promoCode')");

        //We tonen de waarde van de promotiecode
        echo json_encode(['success' => true, 'message' => $promoValue]);
    }
} else {
    // Promotiecode niet gevonden of databasequeryfout
    echo json_encode(['success' => false, 'message' => 'Промокод невірний']);
}
?>