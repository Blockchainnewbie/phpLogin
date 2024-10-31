<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unser Team - Cannameleon Cannabis Club</title>
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
                            <li><a class="dropdown-item active" href="team.php">Team</a></li>
                            <li><a class="dropdown-item" href="standort.php">Standort</a></li>
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
                <h1>Unser Team</h1>
                <div class="content-section">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="img/alpaGang01.png" class="card-img-top" alt="Vorstandsvorsitzender">
                                <div class="card-body">
                                    <h5 class="card-title">Max Mustermann</h5>
                                    <p class="card-text">Vorstandsvorsitzender</p>
                                    <p>Experte für nachhaltige Anbaumethoden mit über 10 Jahren Erfahrung.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="img/alpaGang02.png" class="card-img-top" alt="Mitgliederbetreuung">
                                <div class="card-body">
                                    <h5 class="card-title">Lisa Schmidt</h5>
                                    <p class="card-text">Mitgliederbetreuung</p>
                                    <p>Verantwortlich für die Betreuung unserer Mitglieder und Community-Events.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="img/alpaGang03.png" class="card-img-top" alt="Anbauexperte">
                                <div class="card-body">
                                    <h5 class="card-title">Tom Weber</h5>
                                    <p class="card-text">Anbauexperte</p>
                                    <p>Spezialist für Indoor-Kultivierung und Pflanzenpflege.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="mt-4">Unsere Werte</h2>
                    <ul>
                        <li>Transparenz und Offenheit in allen Bereichen</li>
                        <li>Nachhaltiger und verantwortungsvoller Umgang</li>
                        <li>Förderung von Bildung und Aufklärung</li>
                        <li>Gemeinschaftlicher Austausch und gegenseitige Unterstützung</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-spacing"></div>
    <?php require_once(__DIR__ . '/css/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
