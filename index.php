<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"> <!-- Setzt die Zeichencodierung der Seite auf UTF-8, um Umlaute und Sonderzeichen korrekt darzustellen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Setzt die Viewport-Einstellungen, damit die Seite auf mobilen Geräten richtig skaliert wird -->
    <title>Startseite</title> <!-- Setzt den Titel der Seite auf 'Startseite' -->
    <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Verlinkt das externe CSS-Stylesheet, um das Styling der Seite festzulegen -->
</head>
<body>
    <?php require_once(__DIR__ . '/css/header.php'); ?> <!-- Lädt den Header der Seite, um eine einheitliche Kopfzeile zu gewährleisten -->

    <div class="container">
        <h2>Werde Mitglied in unserem Club!!!!</h2> <!-- Hauptüberschrift der Seite, die die Besucher zum Mitmachen animiert -->
        <p>Der Cannameleon Cannabis Club ist eine Community, die sich für den sicheren und <br>
        verantwortungsvollen Anbau und Austausch von Cannabis engagiert. Werde Teil unseres <br>
        Netzwerks und profitiere von den gemeinsamen Erfahrungen und unserem Wissen über den Anbau.</p>

        <div class="club-info">
            <h2>Über den Cannameleon Cannabis Club</h2>
            <p>Unser Club bietet Mitgliedern die Möglichkeit, in einer geschlossenen Gemeinschaft Cannabis anzubauen und sich über die besten Anbaumethoden auszutauschen. Wir fördern den verantwortungsbewussten Umgang mit Cannabis und setzen uns dafür ein, dass unsere Mitglieder Zugang zu hochwertigen Informationen und Ressourcen haben.</p>
            <h3>Als Mitglied hast du die Möglichkeit:</h3>
            <ul>
                <li>Anbau-Tipps und Erfahrungen mit anderen zu teilen.</li>
                <li>Exklusive Events und Treffen zu besuchen.</li>
                <li>Teil unserer einzigartigen Community zu sein,<br>
                 die Wissen und Samen austauscht.</li>
            </ul>
        </div>

        <div class="cta-buttons">
            <a href="register.php">Registrieren</a> <!-- Link zur Registrierungsseite -->
            <a href="login.php">Anmelden</a> <!-- Link zur Login-Seite -->
        </div>
    </div>

    <div class="footer-spacing"></div> <!-- Abstandshalter, um Platz zwischen dem Body und dem Footer zu schaffen -->

    <?php require_once(__DIR__ . '/css/footer.php'); ?> <!-- Lädt den Footer der Seite, um eine einheitliche Fußzeile zu gewährleisten -->
</body>
</html>
