<?php
session_start();
if(!isset($_SESSION['name'])) {
   header("Location: login_view.php");
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
   <style>
    /* General Styles */
body {
    background-color: #ebf8ff;
    color: #2d3748;
    font-family: Arial, sans-serif;
}

/* Hero Section */
.bg-blue-600 {
    background-color: #3182ce;
}

.container {
    max-width: 70rem;
    margin: 0 auto;
    padding: 4rem 1rem;
    text-align: center;
}

.container h1 {
    font-size: 2.25rem;
    font-weight: 800;
    color: #fff;
    line-height: 1.25;
}

.container p {
    margin-top: 1.5rem;
    max-width: 50rem;
    margin-left: auto;
    margin-right: auto;
    font-size: 1.125rem;
    color: #c3dafe;
}

.hero-buttons {
    margin-top: 2rem;
    display: flex;
    justify-content: center;
}

.button-container {
    margin-right: 0.75rem;
}

.button {
    display: inline-block;
    padding: 0.75rem 2rem;
    border: 1px solid transparent;
    font-size: 1rem;
    font-weight: 500;
    border-radius: 0.375rem;
    text-decoration: none;
    transition: background-color 0.2s;
}

.get-started {
    color: #3182ce;
    background-color: #fff;
}

.get-started:hover {
    background-color: #f7fafc;
}

.learn-more {
    color: #fff;
    background-color: #4299e1;
}

.learn-more:hover {
    background-color: #2b6cb0;
}

/* Footer */
.footer {
    background-color: #fff;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}

.footer .container {
    padding: 2rem 1rem;
    overflow: hidden;
}

.footer-nav {
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.footer-link {
    color: #718096;
    font-size: 0.875rem;
    text-decoration: none;
}

.footer-link:hover {
    color: #1a202c;
}

.footer p {
    margin-top: 2rem;
    text-align: center;
    color: #cbd5e0;
    font-size: 0.875rem;
}

   </style>
</head>
<body>
<header>
    <?php require "view/par/nav.php"; ?>
</header>
    <!-- Hero Section -->
    <div class="bg-blue-600">
        <div class="container">
            <h1>Welcome to 
            <p>We provide the best solutions for your business needs.</p>
            <div class="hero-buttons">
                <div class="button-container">
                    <a href="#" class="button get-started"> Get Started </a>
                </div>
                <div class="button-container">
                    <a href="#" class="button learn-more"> Learn More </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <nav class="footer-nav">
                <a href="#" class="footer-link">About</a>
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Terms of Service</a>
                <a href="#" class="footer-link">Contact</a>
            </nav>
            <p>© 2024 MyWebsite. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

