<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2d3748;
          
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}
        h1 {
            font-size: 2.25rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #2d3748;
        }

        .register-button {
            display: inline-block;
            background-color: #48bb78;
            color: white;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
            transition: background-color 0.2s ease-in-out;
        }

        .register-button:hover {
            background-color: #38a169;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <?php require "view/par/nav.php" ?>
</header>
<main>
    <div class="container">
        <h1>Welcome to Hogwarts University</h1>
        <div class="text-center">
            <a href="/form_view.php" class="register-button">Register Now</a>
        </div>
    </div>
</main>
</body>
</html>
