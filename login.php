<?php
session_start(); // Zainicjalizuj sesję
include 'db_config.php'; // Upewnij się, że to jest na początku pliku

// Sprawdź, czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sprawdź, czy użytkownik istnieje
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Użytkownik istnieje, sprawdź hasło
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Użytkownik zalogowany pomyślnie, zapisz sesję
            $_SESSION['username'] = $username; // Zapisz nazwę użytkownika w sesji
            header("Location: welcome.php"); // Przekieruj na stronę powitalną
            exit(); // Zakończ skrypt
        } else {
            echo "<div class='alert alert-danger'>Błędne hasło!</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Użytkownik nie istnieje!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link do pliku CSS -->
</head>
<body>
    <header>
        <h1>Logowanie</h1>
        <nav>
            <a href="register.php">Rejestracja</a>
            <a href="login.php">Logowanie</a>
        </nav>
    </header>
    <div class="container">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Nazwa użytkownika:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Hasło:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Zaloguj się</button>
        </form>
    </div>
</body>
</html>
