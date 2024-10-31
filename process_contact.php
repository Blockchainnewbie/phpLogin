<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $betreff = $_POST['betreff'] ?? '';
    $nachricht = $_POST['nachricht'] ?? '';
    
    // Datum und Zeit für den Dateinamen
    $timestamp = date('Y-m-d_H-i-s');
    $filename = "messages/message_{$timestamp}.txt";
    
    // Nachrichteninhalt formatieren
    $content = "Datum: " . date('Y-m-d H:i:s') . "\n";
    $content .= "Name: " . $name . "\n";
    $content .= "Email: " . $email . "\n";
    $content .= "Betreff: " . $betreff . "\n";
    $content .= "Nachricht:\n" . $nachricht . "\n";
    
    // Nachricht in Datei speichern
    if (file_put_contents($filename, $content)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Fehler beim Speichern der Nachricht']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Ungültige Anfrage']);
}
