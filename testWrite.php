<?php
$testFile = __DIR__ . '/test_write.txt';

if (file_put_contents($testFile, "Testinhalt") !== false) {
    echo "Schreibrechte vorhanden. Testdatei wurde erfolgreich erstellt.";
    unlink($testFile); // Lösche die Testdatei wieder
} else {
    echo "Keine Schreibrechte im aktuellen Verzeichnis.";
}
?>
