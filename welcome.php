<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmy Online</title>
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

        /* Sekcja filmów */
        .movies-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .movies-section h1 {
            font-size: 36px;
            margin-bottom: 40px;
        }

        .movie {
            background-color: #292929;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            width: 320px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .movie:hover {
            transform: scale(1.05);
        }

        .movie img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .watch-button {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #ff6600;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .watch-button:hover {
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

    <!-- Sekcja filmów -->
    <section class="movies-section">
        <h1>Strona z filmami online!</h1>

        <!-- Pierwszy film -->
        <div class="movie">
            <h2>Budda. Dzieciak'98</h2> <!-- Usunięto "Film 1:" -->
            <img src="budda.jpg" alt="Miniaturka filmu Budda. Dzieciak'98">
            <p>Film o przygodach Buddy w roku 1998.</p>
            <a href="player.php?movie=budda" class="watch-button">Odtwórz</a>
        </div>

        <!-- Inny film -->
        <div class="movie">
            <h2>Inny film</h2> <!-- Usunięto "Film 2:" -->
            <img src="images/default.jpg" alt="Miniaturka filmu 2">
            <p>Tutaj będzie inny film w przyszłości.</p>
            <a href="player.php?movie=film2" class="watch-button">Odtwórz</a>
        </div>

    </section>

</body>
</html>
