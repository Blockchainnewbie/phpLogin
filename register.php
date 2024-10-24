<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Registrierung'; ?></title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php
    require_once(__DIR__ . '/class/User.php');
    $pageTitle = 'Registrierung';
    require_once(__DIR__ . '/css/header.php');

    $user = new User(__DIR__ . '/users.txt');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];

        if ($user->register($email, $password, $first_name, $last_name)) {
            echo "<p>Registrierung erfolgreich!</p>";
        } else {
            echo "<p>Registrierung fehlgeschlagen. Bitte versuchen Sie es erneut.</p>";
        }
    }
    ?>

    <form method="post" action="register.php">
        <input type="text" name="first_name" placeholder="Vorname" required><br><br>
        <input type="text" name="last_name" placeholder="Nachname" required><br><br>
        <input type="email" name="email" placeholder="E-Mail" required><br><br>
        <input type="password" name="password" placeholder="Passwort" required><br><br>
        <button type="submit">Registrieren</button>
    </form>
    <a href="index.php">Zurück zur Startseite</a>

    <?php require_once(__DIR__ . '/css/footer.php'); ?>
</body>
</html>
