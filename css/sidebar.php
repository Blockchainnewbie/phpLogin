<?php
// Besucherzähler-Logik
$counterFile = "counter.txt";
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}
$visits = (int)file_get_contents($counterFile);
$visits++;
file_put_contents($counterFile, $visits);
?>

<div class="col-md-3">
    <!-- About Us Card -->
    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            Über Uns
        </div>
        <div class="card-body">
            <img src="img/alpaGang01.png" class="img-fluid mb-3" alt="Über Uns">
            <p class="mb-0">Willkommen beim Cannameleon Cannabis Club! Wir sind eine engagierte Gemeinschaft von Cannabis-Enthusiasten, die sich für einen verantwortungsvollen Umgang einsetzen.</p>
        </div>
    </div>
    <div class="sidebar">
        <!-- Besucherzähler -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                Besucherstatistik
            </div>
            <div class="card-body">
                <p class="mb-0">Besucher heute: <?php echo $visits; ?></p>
            </div>
        </div>

        <!-- Werbebereich 1 -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                Werbung
            </div>
            <div class="card-body">
                <div class="ad-space">
                    <!-- Hier kann Werbung eingefügt werden -->
                    <p class="text-center text-muted">Werbeplatz verfügbar</p>
                </div>
            </div>
        </div>

        <!-- Kontaktformular -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                Kontaktiere uns
            </div>
            <div class="card-body">
                <form id="contactForm" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="betreff" class="form-label">Betreff</label>
                        <input type="text" class="form-control" id="betreff" name="betreff" required>
                    </div>
                    <div class="mb-3">
                        <label for="nachricht" class="form-label">Nachricht</label>
                        <textarea class="form-control" id="nachricht" name="nachricht" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Senden</button>
                </form>
            </div>
        </div>

        <!-- Werbebereich 2 -->
        <div class="card">
            <div class="card-header bg-success text-white">
                Sponsoren
            </div>
            <div class="card-body">
                <div class="ad-space">
                    <!-- Hier kann weitere Werbung eingefügt werden -->
                    <p class="text-center text-muted">Werbeplatz verfügbar</p>
                </div>
            </div>
        </div>
    </div>
</div>
