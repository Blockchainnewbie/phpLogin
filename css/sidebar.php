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
