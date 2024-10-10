<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odtwarzacz - Budda. Dzieciak'98</title>
    <link rel="stylesheet" href="styles.css"> <!-- Stylizacja strony -->
    <style>
        /* Globalne style */
        body {
            font-family: Arial, sans-serif;
            background-color: #1c1c1c;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #444;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #555;
        }

        /* Styl sekcji odtwarzacza */
        .player-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        video {
            width: 80%;
            max-width: 600px;
            margin-top: 20px;
            border: 2px solid #ff6600;
            border-radius: 10px;
        }

        .movie-title {
            font-size: 24px;
            margin: 15px 0;
        }

        .back-button {
            margin-top: 20px;
            padding: 10px 15px;
            color: #fff;
            background-color: #ff6600;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #ff4500;
        }
    </style>
</head>
<body>

    <!-- Pasek nawigacyjny -->
    <nav>
        <ul>
            <li><a href="register.php">Rejestracja</a></li>
            <li><a href="login.php">Logowanie</a></li>
        </ul>
    </nav>

    <!-- Sekcja odtwarzacza -->
    <section class="player-section">
        <h2 class="movie-title">Budda. Dzieciak'98</h2> <!-- Nazwa filmu -->
        <video controls>
            <source src="videos/Budda Dzieciak'98.mp4" type="video/mp4">
            Twoja przeglądarka nie wspiera elementu wideo.
        </video>
        <br>
        <a href="welcome.php" class="back-button">Powrót do strony głównej</a> <!-- Przycisk powrotu -->
    </section>

</body>
</html>
