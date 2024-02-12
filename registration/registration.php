<!DOCTYPE html>
<html lang="en">
<head>
    <title>Veiling Registration</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>
<body class="popupOpen">
<div class="popup_login">
    <form id="loginForm" name="loginForm" class="popup__login-box" method="post">
        <div class="popup__login-maintext">Voer uw gegevens in:</div>
        <div class="popup__login-inputBox">
            <input placeholder="Naam" type="text" id="loginplayer_password" name="loginName" class="popup__login-input">
            <input placeholder="Wachtwoord" type="player_password" id="loginPasword" name="loginplayer_password" class="popup__login-input">
        </div>
        <?php
            require_once '../include/db.php';

            function generateRandomString($length = 10) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, strlen($characters) - 1)];
                }
                return $randomString;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['loginName'];
                $player_password = $_POST['loginplayer_password'];

                // We hash the password before comparing it with the database
                $hashed_password = strtolower(hash('sha256', $player_password));

                $checkUserQuery = "SELECT player_id, player_password FROM players WHERE player_name = '$name'";
                $result = mysqli_query($mysqli, $checkUserQuery);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $stored_password = $row['player_password'];
                        $player_id = $row['player_id'];

                        if ($hashed_password == strtolower($stored_password)) {
                            echo "<div class='loginTextAlerp'>Het wachtwoord is correct</div>";

                            $delete_query = "DELETE FROM tokens WHERE user_id = '$player_id'";
                            if (mysqli_query($mysqli, $delete_query)) {
                                echo "Всі записи з user_id = $player_id було успішно видалено.";
                            } else {
                                echo "Помилка: " . mysqli_error($mysqli);
                            }
                            
                        
                            // Генеруємо токен_identifier
                            $token_identifier = generateRandomString(10);
                            $current_time = time();
                        
                            // SQL-запит для вставки нового запису в таблицю tokens
                            $insert_query = "INSERT INTO tokens (token_identifier, user_id, created_at) VALUES ('$token_identifier', '$player_id', '$current_time')";
                            // Виконуємо SQL-запит для вставки нового запису в таблицю tokens
                            $result2 = mysqli_query($mysqli, $insert_query);

                            // Перевіряємо, чи вдалося виконати запит на вставку
                            if ($result2) {
                                echo "Новий запис успішно створений.";
                            } else {
                                echo "Помилка: " . mysqli_error($mysqli);
                            }

                        
                            setcookie("t", $token_identifier, time() + 30 * 24 * 3600, "/");
                            header("Location: ../Veiling.php");
                            exit();
                        } else {
                            echo "<div class='loginTextAlerp red'>!!! De gegevens zijn niet correct ingevoerd !!!</div>";
                        }                        
                    } else {
                        echo "<div class='loginTextAlerp red'>!!! De gegevens zijn niet correct ingevoerd !!!</div>";
                    }
                } else {
                    echo "Er is een fout opgetreden tijdens het uitvoeren van het verzoek: " . mysqli_error($mysqli);
                }
            }
        ?>
        <div class="popup__login-form">
            <button class="button buttonClickSound" type="submit">
                <div class="button-side button-side1"></div>
                <div class="button-side button-side2"></div>
                <div class="button-side button-side3"></div>
                <div class="button-side button-side4"></div>
                <p class="button-side button-text">Aanmelden</p>
            </button>
        </div>
    </form>
</div>
<div id="popupStart" class="popup__start">
		<div class="popup__container first-slide">
			<div class="popup__start-photo">
				<img src="../img/background/logo-big.png" alt="" class="popup__start-img">
				<div class="popup__text">Vertegenwoordigt</div>
			</div>
		</div>
		<div class="popup__container second-slide">
			<div class="popup__start-photo">
				<img src="../img/background/alert.png" alt="" class="popup__start-img alarm-img">
				<div class="popup__text alarm-text">! Let op!<br>Er zit geluid in het project</div>
			</div>
		</div>
	</div>
</body>
<script src="js/registration.js"></script>
</html>