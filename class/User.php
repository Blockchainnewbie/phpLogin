<?php

// Die Klasse User dient dazu, Benutzerinformationen zu speichern, zu registrieren und sich anzumelden.
class User {
    private $file;

    // Konstruktor, der den Pfad zur Datei setzt, die Benutzerdaten speichert.
    public function __construct($file) {
        $this->file = $file;

        // Überprüfen, ob die Datei existiert; wenn nicht, erstellen wir sie.
        if (!file_exists($this->file)) {
            // Datei erstellen, wenn sie nicht existiert
            touch($this->file);
            // Hinweis: chmod funktioniert unter Windows möglicherweise nicht wie erwartet.
            // Wir stellen jedoch sicher, dass die Datei erstellt wurde und beschreibbar ist.
        }
    }

    // Diese Funktion registriert einen neuen Benutzer und speichert seine Daten in der Datei.
    // Sie nimmt die E-Mail, das Passwort, den Vornamen und den Nachnamen als Parameter entgegen.
    public function register($email, $password, $first_name, $last_name): bool {
        // Das Passwort wird gehasht, bevor es gespeichert wird, um die Sicherheit zu erhöhen.
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Benutzerinformationen werden als Zeichenkette gespeichert.
        $user_data = "$email|$hashed_password|$first_name|$last_name\n";

        try {
            // Die Benutzerinformationen werden an die Datei angehängt.
            file_put_contents($this->file, $user_data, FILE_APPEND);
            return true; // Registrierung erfolgreich
        } catch (Exception $e) {
            // Bei einem Fehler wird eine Fehlermeldung ausgegeben und false zurückgegeben.
            echo "Fehler bei der Registrierung: " . $e->getMessage();
            return false;
        }
    }

    // Diese Funktion überprüft die Anmeldedaten des Benutzers.
    // Sie nimmt die E-Mail, den Vornamen und das Passwort als Parameter entgegen.
    public function login($email, $first_name, $password): bool {
        try {
            // Die Datei wird zeilenweise eingelesen, wobei jede Zeile einen Benutzer repräsentiert.
            $users = file($this->file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($users as $user) {
                // Die gespeicherten Benutzerdaten werden in ihre Bestandteile zerlegt.
                list($stored_email, $stored_password, $stored_first_name, $stored_last_name) = explode('|', $user);
                // Überprüfen, ob die eingegebene E-Mail, der Vorname und das Passwort übereinstimmen.
                if ($stored_email === $email && $stored_first_name === $first_name && password_verify($password, $stored_password)) {
                    // Wenn die Daten übereinstimmen, wird eine Session gestartet und der Benutzer wird eingeloggt.
                    session_start();
                    $_SESSION['email'] = $email; // Speichern der E-Mail in der Session
                    $_SESSION['first_name'] = $stored_first_name; // Speichern des Vornamens in der Session
                    return true; // Login erfolgreich
                }
            }
            // Wenn keine Übereinstimmung gefunden wird, schlägt der Login fehl.
            return false;
        } catch (Exception $e) {
            // Bei einem Fehler wird eine Fehlermeldung ausgegeben und false zurückgegeben.
            echo "Fehler beim Login: " . $e->getMessage();
            return false;
        }
    }
} // Ende der User-Klasse

?>
