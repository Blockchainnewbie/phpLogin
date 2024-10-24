<?php
// Der Pfad zur Datei, die zum Testen der Schreibrechte verwendet wird
$testFile = __DIR__ . '/test_write.txt';

// Versucht, "Testinhalt" in die Testdatei zu schreiben
if (file_put_contents($testFile, "Testinhalt") !== false) {
    // Wenn das Schreiben erfolgreich war, gibt es an, dass Schreibrechte vorhanden sind
    echo "Schreibrechte vorhanden. Testdatei wurde erfolgreich erstellt.";
    unlink($testFile); // Löscht die Testdatei, da der Schreibtest nur temporär war
} else {
    // Wenn das Schreiben fehlschlägt, wird eine Meldung ausgegeben, dass keine Schreibrechte vorhanden sind
    echo "Keine Schreibrechte im aktuellen Verzeichnis.";
}
?>
