<?php
session_start(); // Rozpocznij sesję
include 'db_config.php'; // Połączenie z bazą danych

// Obsługa rejestracji
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashowanie hasła

    // Wstawianie do bazy
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Rejestracja powiodła się!";
    } else {
        echo "Błąd rejestracji: " . $conn->error;
    }
}

// Obsługa logowania
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];

    // Zapytanie SQL do sprawdzenia użytkownika
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Weryfikacja hasła
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username; // Ustawienie sesji
            echo "Zalogowano pomyślnie!";
            // Możesz dodać przekierowanie do strony głównej lub innej
        } else {
            echo "Nieprawidłowe hasło!";
        }
    } else {
        echo "Użytkownik nie znaleziony!";
    }
}

// Zamknięcie połączenia
$conn->close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie i Rejestracja</title>
</head>
<body>

<h2>Rejestracja</h2>
<form action="index.php" method="POST">
    <label for="username">Nazwa użytkownika:</label>
    <input type="text" name="username" required>
    
    <label for="password">Hasło:</label>
    <input type="password" name="password" required>
    
    <input type="submit" name="register" value="Zarejestruj się">
</form>

<h2>Logowanie</h2>
<form action="index.php" method="POST">
    <label for="login_username">Nazwa użytkownika:</label>
    <input type="text" name="login_username" required>
    
    <label for="login_password">Hasło:</label>
    <input type="password" name="login_password" required>
    
    <input type="submit" name="login" value="Zaloguj się">
</form>

</body>
</html>
