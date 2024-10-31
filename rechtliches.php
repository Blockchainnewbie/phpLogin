<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechtliche Informationen - Cannameleon Cannabis Club</title>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown">
                            Mitgliedschaft
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="vorteile.php">Vorteile</a></li>
                            <li><a class="dropdown-item" href="beitraege.php">Beiträge</a></li>
                            <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown">
                            Ressourcen
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="anbau-guide.php">Anbau-Guide</a></li>
                            <li><a class="dropdown-item active" href="rechtliches.php">Rechtliches</a></li>
                            <li><a class="dropdown-item" href="downloads.php">Downloads</a></li>
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
                <h1>Rechtliche Informationen</h1>
                <div class="content-section">
                    <div class="alert alert-warning">
                        <strong>Wichtiger Hinweis:</strong> Diese Informationen dienen nur zur allgemeinen Orientierung und ersetzen keine rechtliche Beratung.
                    </div>

                    <h2>Aktuelle Rechtslage</h2>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3>Cannabis Social Clubs in Deutschland</h3>
                            <ul>
                                <li>Gesetzliche Grundlagen und Rahmenbedingungen</li>
                                <li>Erlaubte Aktivitäten und Grenzen</li>
                                <li>Mitgliedschaftsbestimmungen</li>
                                <li>Dokumentationspflichten</li>
                            </ul>
                        </div>
                    </div>

                    <h2>Mitgliederrechte und -pflichten</h2>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    Rechte der Mitglieder
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Teilnahme an Vereinsaktivitäten</li>
                                        <li>Zugang zu Informationen</li>
                                        <li>Mitbestimmungsrecht</li>
                                        <li>Datenschutz</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    Pflichten der Mitglieder
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Einhaltung der Vereinsregeln</li>
                                        <li>Beitragszahlung</li>
                                        <li>Vertraulichkeit</li>
                                        <li>Verantwortungsvoller Umgang</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Compliance und Sicherheit</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Dokumentation</h3>
                            <ul>
                                <li>Mitgliederregister</li>
                                <li>Aktivitätenprotokolle</li>
                                <li>Sicherheitsrichtlinien</li>
                                <li>Qualitätskontrollen</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3>Datenschutz</h3>
                            <ul>
                                <li>DSGVO-Konformität</li>
                                <li>Sichere Datenspeicherung</li>
                                <li>Zugriffskontrolle</li>
                                <li>Löschungsrichtlinien</li>
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
