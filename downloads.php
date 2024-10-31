<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloads - Cannameleon Cannabis Club</title>
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
                            <li><a class="dropdown-item" href="rechtliches.php">Rechtliches</a></li>
                            <li><a class="dropdown-item active" href="downloads.php">Downloads</a></li>
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
                <h1>Downloads</h1>
                <div class="content-section">
                    <div class="alert alert-info mb-4">
                        <strong>Hinweis:</strong> Einige Downloads sind nur für registrierte Mitglieder verfügbar.
                    </div>

                    <h2>Formulare & Dokumente</h2>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Mitgliedsantrag</h5>
                                    <p class="card-text">Formular für neue Mitglieder</p>
                                    <a href="#" class="btn btn-success">Download PDF</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Satzung</h5>
                                    <p class="card-text">Aktuelle Vereinssatzung</p>
                                    <a href="#" class="btn btn-success">Download PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Informationsmaterial</h2>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    Grundlagen
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="#" class="text-decoration-none">
                                                <i class="fas fa-file-pdf"></i> Einsteiger-Guide
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#" class="text-decoration-none">
                                                <i class="fas fa-file-pdf"></i> Sicherheitsrichtlinien
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    Fortgeschritten
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="#" class="text-decoration-none">
                                                <i class="fas fa-file-pdf"></i> Anbautechniken
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#" class="text-decoration-none">
                                                <i class="fas fa-file-pdf"></i> Qualitätskontrolle
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    Rechtliches
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="#" class="text-decoration-none">
                                                <i class="fas fa-file-pdf"></i> Gesetzliche Grundlagen
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="#" class="text-decoration-none">
                                                <i class="fas fa-file-pdf"></i> Mitgliederrechte
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Newsletter Archive</h2>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-success">
                                <tr>
                                    <th>Datum</th>
                                    <th>Titel</th>
                                    <th>Beschreibung</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Oktober 2023</td>
                                    <td>Herbst-Newsletter</td>
                                    <td>Saisonale Tipps und Updates</td>
                                    <td><a href="#" class="btn btn-sm btn-success">PDF</a></td>
                                </tr>
                                <tr>
                                    <td>September 2023</td>
                                    <td>Special Edition</td>
                                    <td>Gesetzesänderungen</td>
                                    <td><a href="#" class="btn btn-sm btn-success">PDF</a></td>
                                </tr>
                            </tbody>
                        </table>
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
