<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"> <!-- Setzt die Zeichencodierung der Seite auf UTF-8, um Umlaute und Sonderzeichen korrekt darzustellen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Setzt die Viewport-Einstellungen, damit die Seite auf mobilen Geräten richtig skaliert wird -->
    <title>Startseite</title> <!-- Setzt den Titel der Seite auf 'Startseite' -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Verlinkt das externe CSS-Stylesheet, um das Styling der Seite festzulegen -->
</head>
<body>
    <?php require_once(__DIR__ . '/css/header.php'); ?> <!-- Lädt den Header der Seite, um eine einheitliche Kopfzeile zu gewährleisten -->

    <div class="container">
        <!-- Bootstrap Carousel -->
        <div id="imageCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/alpaGang01.png" class="d-block w-100" alt="Alpa Gang 1">
                </div>
                <div class="carousel-item">
                    <img src="img/alpaGang02.png" class="d-block w-100" alt="Alpa Gang 2">
                </div>
                <div class="carousel-item">
                    <img src="img/alpaGang03.png" class="d-block w-100" alt="Alpa Gang 3">
                </div>
                <div class="carousel-item">
                    <img src="img/alpaGang04.png" class="d-block w-100" alt="Alpa Gang 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Zurück</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Weiter</span>
            </button>
        </div>
        
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
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
