<?php
session_start();

// Überprüfen, ob der Benutzer eingeloggt ist
if (!isset($_SESSION['email'])) {
    // Wenn keine gültige Session vorhanden ist, weiter zur Login-Seite
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php require_once(__DIR__ . '/css/header.php'); ?>

    <h1>Willkommen im Dashboard!</h1>
    <p>Hallo <?php echo htmlspecialchars($_SESSION['first_name']); ?>, schön, dass Sie wieder da sind!</p>

    <a href="logout.php" class="logout-button">Abmelden</a>

    <?php require_once(__DIR__ . '/css/footer.php'); ?>
</body>
</html>
