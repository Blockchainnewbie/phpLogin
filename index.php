<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"> <!-- Setzt die Zeichencodierung der Seite auf UTF-8, um Umlaute und Sonderzeichen korrekt darzustellen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Setzt die Viewport-Einstellungen, damit die Seite auf mobilen Geräten richtig skaliert wird -->
    <title>Startseite</title> <!-- Setzt den Titel der Seite auf 'Startseite' -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Verlinkt das externe CSS-Stylesheet, um das Styling der Seite festzulegen -->
    <link rel="stylesheet" type="text/css" href="css/navbar-hover.css">
</head>
<body>
    <?php require_once(__DIR__ . '/css/header.php'); ?> <!-- Lädt den Header der Seite, um eine einheitliche Kopfzeile zu gewährleisten -->

    <nav class="navbar navbar-expand-lg navbar-custom mb-4">
        <div class="container-fluid d-flex justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Über Uns
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="#">Geschichte</a></li>
                            <li><a class="dropdown-item" href="#">Team</a></li>
                            <li><a class="dropdown-item" href="#">Standort</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mitgliedschaft
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="#">Vorteile</a></li>
                            <li><a class="dropdown-item" href="#">Beiträge</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ressourcen
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <li><a class="dropdown-item" href="#">Anbau-Guide</a></li>
                            <li><a class="dropdown-item" href="#">Rechtliches</a></li>
                            <li><a class="dropdown-item" href="#">Downloads</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- Bootstrap Carousel -->
        <div id="imageCarousel" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="3000">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myCarousel = new bootstrap.Carousel(document.getElementById('imageCarousel'), {
                interval: 3000,
                wrap: true
            });
        });
    </script>
</body>
</html>
