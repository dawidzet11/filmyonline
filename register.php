<?php
include 'db_config.php'; // Upewnij się, że to jest na początku pliku

// Sprawdź, czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Zaszyfruj hasło
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Dodaj użytkownika do bazy danych
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Rejestracja się powiodła!</div>";
    } else {
        echo "<div class='alert alert-danger'>Błąd: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link do pliku CSS -->
</head>
<body>
    <header>
        <h1>Rejestracja</h1>
        <nav>
            <a href="register.php">Rejestracja</a>
            <a href="login.php">Logowanie</a>
        </nav>
    </header>
    <div class="container">
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Nazwa użytkownika:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Hasło:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Zarejestruj się</button>
        </form>
    </div>
</body>
</html>
