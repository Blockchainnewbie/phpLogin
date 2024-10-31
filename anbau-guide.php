<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anbau-Guide - Cannameleon Cannabis Club</title>
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
                            <li><a class="dropdown-item active" href="anbau-guide.php">Anbau-Guide</a></li>
                            <li><a class="dropdown-item" href="rechtliches.php">Rechtliches</a></li>
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
                <h1>Anbau-Guide</h1>
                <div class="content-section">
                    <div class="alert alert-info">
                        <strong>Hinweis:</strong> Dieser Guide dient nur zu Informationszwecken und berücksichtigt die aktuellen rechtlichen Rahmenbedingungen.
                    </div>

                    <h2>Grundlagen des Cannabis-Anbaus</h2>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h3>Wachstumsbedingungen</h3>
                            <ul>
                                <li>Optimale Temperatur: 20-28°C</li>
                                <li>Luftfeuchtigkeit: 40-60%</li>
                                <li>Beleuchtungsdauer: 18/6 (Wachstum), 12/12 (Blüte)</li>
                                <li>Ausreichende Belüftung</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3>Nährstoffe</h3>
                            <ul>
                                <li>NPK-Verhältnis beachten</li>
                                <li>pH-Wert: 6.0-6.5</li>
                                <li>Regelmäßige Düngung</li>
                                <li>Qualitätserde verwenden</li>
                            </ul>
                        </div>
                    </div>

                    <h2>Anbaumethoden</h2>
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    Indoor
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Kontrollierte Umgebung</li>
                                        <li>Ganzjähriger Anbau möglich</li>
                                        <li>Höhere Anfangsinvestition</li>
                                        <li>Bessere Qualitätskontrolle</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    Outdoor
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Natürliches Sonnenlicht</li>
                                        <li>Geringere Kosten</li>
                                        <li>Saisonabhängig</li>
                                        <li>Größere Pflanzen möglich</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100">
                                <div class="card-header bg-success text-white">
                                    Gewächshaus
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Kombination der Vorteile</li>
                                        <li>Verlängerte Saison</li>
                                        <li>Wettergeschützt</li>
                                        <li>Moderate Kosten</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Pflege und Wartung</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Regelmäßige Kontrollen</h3>
                            <ul>
                                <li>Tägliche Inspektion der Pflanzen</li>
                                <li>Überwachung von Temperatur und Luftfeuchtigkeit</li>
                                <li>Kontrolle auf Schädlinge und Krankheiten</li>
                                <li>Regelmäßiges Gießen und Düngen</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3>Häufige Probleme</h3>
                            <ul>
                                <li>Nährstoffmangel oder -überschuss</li>
                                <li>Schädlingsbefall</li>
                                <li>Schimmel und Pilzbefall</li>
                                <li>Über- oder Unterwässerung</li>
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
