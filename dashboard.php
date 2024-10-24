<?php
session_start(); // Startet die Session, um auf Session-Variablen zugreifen zu können

// Überprüft, ob der Benutzer eingeloggt ist, indem geprüft wird, ob die Session-Variable 'email' gesetzt ist
if (!isset($_SESSION['email'])) {
    // Wenn keine gültige Session vorhanden ist, wird der Benutzer zur Login-Seite weitergeleitet
    header("Location: login.php");
    exit(); // Beendet das Skript, um sicherzustellen, dass keine weiteren Codes ausgeführt werden
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"> <!-- Setzt die Zeichencodierung der Seite auf UTF-8, um Umlaute und Sonderzeichen korrekt darzustellen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Setzt die Viewport-Einstellungen, damit die Seite auf mobilen Geräten richtig skaliert wird -->
    <title>Dashboard</title> <!-- Setzt den Titel der Seite auf 'Dashboard' -->
    <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Verlinkt das externe CSS-Stylesheet, um das Styling der Seite festzulegen -->
</head>
<body>
    <?php require_once(__DIR__ . '/css/header.php'); ?> <!-- Lädt den Header der Seite, um eine einheitliche Kopfzeile zu gewährleisten -->

    <h1>Willkommen im Dashboard!</h1> <!-- Überschrift des Dashboards -->
    <p>Hallo <?php echo htmlspecialchars($_SESSION['first_name']); ?>, schön, dass Sie wieder da sind!</p> <!-- Begrüßt den Benutzer mit seinem Vornamen, der sicherheitsbereinigt ausgegeben wird -->

    <a href="logout.php" class="logout-button">Abmelden</a> <!-- Link, um sich abzumelden und die Session zu beenden -->

    <?php require_once(__DIR__ . '/css/footer.php'); ?> <!-- Lädt den Footer der Seite, um eine einheitliche Fußzeile zu gewährleisten -->
</body>
</html>
