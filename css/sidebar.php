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
