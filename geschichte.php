<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geschichte - Cannameleon Cannabis Club</title>
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
                            <li><a class="dropdown-item active" href="geschichte.php">Geschichte</a></li>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown">
                            Ressourcen
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="anbau-guide.php">Anbau-Guide</a></li>
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
                <h1>Die Geschichte des Cannameleon Cannabis Clubs</h1>
                <div class="content-section">
                    <h2>Unsere Anfänge</h2>
                    <p>Der Cannameleon Cannabis Club wurde im Jahr 2023 von einer Gruppe engagierter Cannabis-Enthusiasten gegründet. Unsere Gründungsmitglieder teilten die Vision, einen sicheren und legalen Raum für den Austausch von Wissen und Erfahrungen rund um Cannabis zu schaffen.</p>
                    
                    <h2>Entwicklung und Wachstum</h2>
                    <p>Seit unserer Gründung haben wir uns stetig weiterentwickelt. Was als kleine Gemeinschaft begann, ist heute zu einem vibrierenden Netzwerk von Cannabis-Kennern und Interessierten gewachsen.</p>
                    
                    <h2>Meilensteine</h2>
                    <ul>
                        <li>2023: Gründung des Clubs</li>
                        <li>2024: Eröffnung unseres ersten Community-Zentrums</li>
                        <li>2024: Start unseres Bildungsprogramms</li>
                    </ul>
                    
                    <h2>Unsere Mission</h2>
                    <p>Wir setzen uns für einen verantwortungsvollen und aufgeklärten Umgang mit Cannabis ein. Durch Bildung, Aufklärung und gegenseitigen Austausch möchten wir das Stigma rund um Cannabis abbauen und eine positive Kultur fördern.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-spacing"></div>
    <?php require_once(__DIR__ . '/css/footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
