<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"> <!-- Setzt die Zeichencodierung der Seite auf UTF-8, um Umlaute und Sonderzeichen korrekt darzustellen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Setzt die Viewport-Einstellungen, damit die Seite auf mobilen Geräten richtig skaliert wird -->
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Login'; ?></title> <!-- Setzt den Titel der Seite. Wenn $pageTitle gesetzt ist, wird dieser verwendet, andernfalls wird 'Login' als Standard verwendet -->
    <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Verlinkt das externe CSS-Stylesheet, um das Styling der Seite festzulegen -->
</head>
<body>
    <?php
    require_once(__DIR__ . '/class/User.php'); // Lädt die User-Klasse, die Methoden zur Benutzerregistrierung und Anmeldung enthält
    $pageTitle = 'Login'; // Setzt den Seitentitel auf 'Login'
    require_once(__DIR__ . '/css/header.php'); // Lädt den Header der Seite, um eine einheitliche Kopfzeile zu gewährleisten

    // Erstellt eine neue Instanz der User-Klasse, wobei die Datei 'users.txt' als Speicherort für die Benutzer verwendet wird
    $user = new User(__DIR__ . '/users.txt');

    // Überprüft, ob das Formular per POST-Methode abgeschickt wurde
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first_name']; // Vorname aus dem Formular auslesen
        $email = $_POST['email']; // E-Mail-Adresse aus dem Formular auslesen
        $password = $_POST['password']; // Passwort aus dem Formular auslesen
    
        // Versucht, den Benutzer mit den eingegebenen Daten anzumelden
        if ($user->login($email, $first_name, $password)) {
            // Erfolgreiches Login - Weiterleitung zur Dashboard-Seite
            header("Location: dashboard.php"); // Leitet den Benutzer zur Dashboard-Seite weiter
            exit(); // Beendet das Skript, um sicherzustellen, dass keine weiteren Codes ausgeführt werden
        } else {
            echo '<div class="error-message">Login fehlgeschlagen. Bitte überprüfen Sie Ihre E-Mail-Adresse, Ihren Vornamen und Ihr Passwort.</div>'; // Fehlermeldung bei fehlerhaftem Login
        }
    }
    ?>

    <!-- Login-Formular, das die Benutzerinformationen aufnimmt -->
    <form method="post" action="login.php">
        <input type="text" name="first_name" placeholder="Vorname" required><br><br> <!-- Eingabefeld für den Vornamen -->
        <input type="email" name="email" placeholder="E-Mail" required><br><br> <!-- Eingabefeld für die E-Mail-Adresse -->
        <input type="password" name="password" placeholder="Passwort" required><br><br> <!-- Eingabefeld für das Passwort -->
        <button type="submit">Anmelden</button> <!-- Button zum Absenden des Formulars -->
    </form>

    <a href="index.php">Zurück zur Startseite</a> <!-- Link, um zur Startseite zurückzukehren -->

    <?php require_once(__DIR__ . '/css/footer.php'); ?> <!-- Lädt den Footer der Seite, um eine einheitliche Fußzeile zu gewährleisten -->
</body>
</html>
