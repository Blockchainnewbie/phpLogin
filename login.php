<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Login'; ?></title>
    <link rel="stylesheet" type="text/css" href="/css/styles.css"> <!-- Einfügen des Stylesheets -->
</head>
<body>
    <?php
    require_once(__DIR__ . '/class/User.php');
    $pageTitle = 'Login';
    require_once(__DIR__ . '/css/header.php');

    $user = new User(__DIR__ . '/users.txt');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($user->login($email, $password)) {
            // Erfolgreiches Login - Weiterleitung zur Dashboard-Seite
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<p>Login fehlgeschlagen. Bitte überprüfen Sie Ihre E-Mail-Adresse und Ihr Passwort.</p>";
        }
    }
    ?>

    <form method="post" action="login.php">
        <input type="email" name="email" placeholder="E-Mail" required><br><br>
        <input type="password" name="password" placeholder="Passwort" required><br><br>
        <button type="submit">Anmelden</button>
    </form>
    <a href="index.php">Zurück zur Startseite</a>

    <?php require_once(__DIR__ . '/css/footer.php'); ?>
</body>
</html>
