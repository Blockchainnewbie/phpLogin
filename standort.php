<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standort - Cannameleon Cannabis Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/navbar-hover.css">
</head>
<body>
    <?php require_once(__DIR__ . '/css/header.php'); ?>

    <nav class="navbar navbar-expand-lg navbar-custom mb-4">
        <div class="container-fluid d-flex justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown">
                            Über Uns
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="geschichte.php">Geschichte</a></li>
                            <li><a class="dropdown-item" href="team.php">Team</a></li>
                            <li><a class="dropdown-item active" href="standort.php">Standort</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown">
                            Mitgliedschaft
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Vorteile</a></li>
                            <li><a class="dropdown-item" href="#">Beiträge</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown">
                            Ressourcen
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Anbau-Guide</a></li>
                            <li><a class="dropdown-item" href="#">Rechtliches</a></li>
                            <li><a class="dropdown-item" href="#">Downloads</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <?php require_once(__DIR__ . '/css/sidebar.php'); ?>
            <div class="col-md-9">
                <h1>Unser Standort</h1>
                <div class="content-section">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Adresse</h2>
                            <p>
                                Cannameleon Cannabis Club<br>
                                Hanfstraße 420<br>
                                12345 Grasstadt<br>
                                Deutschland
                            </p>
                            
                            <h2>Öffnungszeiten</h2>
                            <p>
                                Montag - Freitag: 10:00 - 20:00 Uhr<br>
                                Samstag: 12:00 - 18:00 Uhr<br>
                                Sonntag: Geschlossen
                            </p>
                            
                            <h2>Kontakt</h2>
                            <p>
                                Telefon: +49 123 456789<br>
                                E-Mail: info@cannameleon-club.de
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/alpaGang04.png" class="card-img-top" alt="Unser Clubhaus">
                                <div class="card-body">
                                    <h5 class="card-title">Unser Clubhaus</h5>
                                    <p class="card-text">Ein Ort der Begegnung und des Austauschs für unsere Community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="mt-4">Anfahrt</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Mit öffentlichen Verkehrsmitteln</h3>
                            <ul>
                                <li>U-Bahn: Linie U4 bis "Hanfplatz"</li>
                                <li>Bus: Linie 420 bis "Cannameleon"</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3>Mit dem Auto</h3>
                            <ul>
                                <li>Autobahn A420, Ausfahrt "Grasstadt-Mitte"</li>
                                <li>Kostenlose Parkplätze vorhanden</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-spacing"></div>
    <?php require_once(__DIR__ . '/css/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
