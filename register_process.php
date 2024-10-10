<?php
include 'db_config.php'; // Połączenie z bazą danych

// Sprawdzenie, czy formularz został przesłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Szyfrowanie hasła
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Zapytanie SQL do wstawienia użytkownika
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Rejestracja powiodła się!";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }
}

// Zamknięcie połączenia
$conn->close();
?>
