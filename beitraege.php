<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitgliedsbeiträge - Cannameleon Cannabis Club</title>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown">
                            Über Uns
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="geschichte.php">Geschichte</a></li>
                            <li><a class="dropdown-item" href="team.php">Team</a></li>
                            <li><a class="dropdown-item" href="standort.php">Standort</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown">
                            Mitgliedschaft
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="vorteile.php">Vorteile</a></li>
                            <li><a class="dropdown-item active" href="beitraege.php">Beiträge</a></li>
                            <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
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
                <h1>Mitgliedsbeiträge</h1>
                <div class="content-section">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white text-center">
                                    <h3 class="mb-0">Basis</h3>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title text-center mb-4">20€ / Monat</h4>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">✓ Zugang zur Community</li>
                                        <li class="mb-2">✓ Basis-Beratung</li>
                                        <li class="mb-2">✓ Newsletter</li>
                                        <li class="mb-2">✓ Teilnahme an Events</li>
                                    </ul>
                                    <a href="register.php" class="btn btn-success mt-auto">Jetzt Mitglied werden</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 border-success">
                                <div class="card-header bg-success text-white text-center">
                                    <h3 class="mb-0">Premium</h3>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title text-center mb-4">35€ / Monat</h4>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">✓ Alle Basis-Vorteile</li>
                                        <li class="mb-2">✓ Premium-Support</li>
                                        <li class="mb-2">✓ Exklusive Workshops</li>
                                        <li class="mb-2">✓ Rabatte bei Partnern</li>
                                    </ul>
                                    <a href="register.php" class="btn btn-success mt-auto">Premium wählen</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white text-center">
                                    <h3 class="mb-0">VIP</h3>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h4 class="card-title text-center mb-4">50€ / Monat</h4>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">✓ Alle Premium-Vorteile</li>
                                        <li class="mb-2">✓ Persönlicher Berater</li>
                                        <li class="mb-2">✓ VIP-Events</li>
                                        <li class="mb-2">✓ Exklusive Angebote</li>
                                    </ul>
                                    <a href="register.php" class="btn btn-success mt-auto">VIP werden</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <h2>Zusätzliche Informationen</h2>
                        <ul>
                            <li>Alle Mitgliedschaften haben eine Mindestlaufzeit von 3 Monaten</li>
                            <li>Beiträge werden monatlich per SEPA-Lastschrift eingezogen</li>
                            <li>Kündigungsfrist: 1 Monat zum Monatsende</li>
                            <li>Upgrade/Downgrade jederzeit möglich</li>
                        </ul>
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
