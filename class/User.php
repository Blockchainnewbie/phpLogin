<?php
class User {
    private $file;

    public function __construct($file) {
        $this->file = $file;
    
        // Überprüfen, ob die Datei existiert; wenn nicht, erstellen wir sie
        if (!file_exists($this->file)) {
            // Datei erstellen
            touch($this->file);
            // chmod funktioniert unter Windows möglicherweise nicht wie erwartet
            // Also stellen wir sicher, dass die Datei erstellt wurde und beschreibbar ist
        }
    }
    

    public function register($email, $password, $first_name, $last_name): bool {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $user_data = "$email|$hashed_password|$first_name|$last_name\n";
    
        try {
            file_put_contents($this->file, $user_data, FILE_APPEND);
            return true;
        } catch (Exception $e) {
            echo "Fehler bei der Registrierung: " . $e->getMessage();
            return false;
        }
    }
    

    public function login($email, $password): bool {
        try {
            $users = file($this->file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($users as $user) {
                list($stored_email, $stored_password, $stored_first_name, $stored_last_name) = explode('|', $user);
                if ($stored_email === $email && password_verify($password, $stored_password)) {
                    // Login erfolgreich
                    return true;
                }
            }
            // Login fehlgeschlagen
            return false;
        } catch (Exception $e) {
            return false;
        }
    }
}
?>