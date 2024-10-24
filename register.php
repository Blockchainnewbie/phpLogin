<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"> <!-- Setzt die Zeichencodierung der Seite auf UTF-8, um Umlaute und Sonderzeichen korrekt darzustellen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Setzt die Viewport-Einstellungen, damit die Seite auf mobilen Geräten richtig skaliert wird -->
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Registrierung'; ?></title> <!-- Setzt den Titel der Seite. Wenn $pageTitle gesetzt ist, wird dieser verwendet, andernfalls wird 'Registrierung' als Standard verwendet -->
    <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Verlinkt das externe CSS-Stylesheet, um das Styling der Seite festzulegen -->
</head>
<body>
    <?php
    require_once(__DIR__ . '/class/User.php'); // Lädt die User-Klasse, die Methoden zur Benutzerregistrierung und Anmeldung enthält
    $pageTitle = 'Registrierung'; // Setzt den Seitentitel auf 'Registrierung'
    require_once(__DIR__ . '/css/header.php'); // Lädt den Header der Seite, um eine einheitliche Kopfzeile zu gewährleisten

    // Erstellt eine neue Instanz der User-Klasse, wobei die Datei 'users.txt' als Speicherort für die Benutzer verwendet wird
    $user = new User(__DIR__ . '/users.txt');

    // Überprüft, ob das Formular per POST-Methode abgeschickt wurde
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email']; // E-Mail-Adresse aus dem Formular auslesen
        $password = $_POST['password']; // Passwort aus dem Formular auslesen
        $first_name = $_POST['first_name']; // Vorname aus dem Formular auslesen
        $last_name = $_POST['last_name']; // Nachname aus dem Formular auslesen

        // Versucht, den Benutzer mit den eingegebenen Daten zu registrieren
        if ($user->register($email, $password, $first_name, $last_name)) {
            echo "<p>Registrierung erfolgreich!</p>"; // Erfolgreiche Registrierungsmeldung
        } else {
            echo "<p>Registrierung fehlgeschlagen. Bitte versuchen Sie es erneut.</p>"; // Fehlermeldung bei Registrierungsfehler
        }
    }
    ?>

    <!-- Registrierungsformular, das die Benutzerinformationen aufnimmt -->
    <form method="post" action="register.php">
        <input type="text" name="first_name" placeholder="Vorname" required><br><br> <!-- Eingabefeld für den Vornamen -->
        <input type="text" name="last_name" placeholder="Nachname" required><br><br> <!-- Eingabefeld für den Nachnamen -->
        <input type="email" name="email" placeholder="E-Mail" required><br><br> <!-- Eingabefeld für die E-Mail-Adresse -->
        <input type="password" name="password" placeholder="Passwort" required><br><br> <!-- Eingabefeld für das Passwort -->
        <button type="submit">Registrieren</button> <!-- Button zum Absenden des Formulars -->
    </form>
    
    <a href="index.php">Zurück zur Startseite</a> <!-- Link, um zurück zur Startseite zu navigieren -->

    <div class="footer-spacing"></div> <!-- Abstandshalter, um Platz zwischen dem Body und dem Footer zu schaffen -->

    <?php require_once(__DIR__ . '/css/footer.php'); ?> <!-- Lädt den Footer der Seite, um eine einheitliche Fußzeile zu gewährleisten -->
</body>
</html>
