<?php
error_reporting(E_ALL);
ini_set("error_reporting", 1);
?>


<!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>

/* General Styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f3f4f6;
  /* display: flex;
  justify-content: center;
  align-items: center; */
  height: 100vh;
}

/* Container Styles */
.container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 1.5rem;
}

/* Form Container Styles */
.form-container {
  background-color: #ffffff;
  padding: 2rem;
  border-radius: 0.5rem;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 24rem;
  margin: auto;
  text-align: center;
}

.form-container h2 {
  font-size: 1.5rem;
  font-weight: bold;
  color: #1a202c;
  margin-bottom: 1.5rem;
}

/* Form Group Styles */
.form-group {
  margin-bottom: 1rem;
  text-align: left;
}

.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 0.5rem;
  color: #1a202c;
}

.form-group input {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #cbd5e0;
  border-radius: 0.25rem;
  transition: border-color 0.2s ease-in-out;
}

.form-group input:focus {
  border-color: #5a67d8;
  outline: none;
}

/* Button Styles */
.form-group button {
  background-color: #5a67d8;
  color: #ffffff;
  font-weight: bold;
  padding: 0.75rem 1.5rem;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
  width: 100%;
}

.form-group button:hover {
  background-color: #434190;
}

/* Signup Prompt Styles */
.signup-prompt {
  margin-top: 1.5rem;
  color: #718096;
}

.signup-prompt a {
  color: #5a67d8;
  text-decoration: none;
  font-weight: bold;
}

.signup-prompt a:hover {
  text-decoration: underline;
}




  
</style>

</head>
<?php require "view/par/nav.php"; ?>
<?php require "controller/login_controll.php"; ?>
<body>

  <div class="container">
    <div class="form-container">
      <h2>Login to your account</h2>
      <form method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input id="name" name="name" type="text" required>
        </div>
        <div class="form-group">
          <label for="email">Email_id</label>
          <input id="email" name="email" type="email" required>
        </div>
        <div class="form-group">
          <a href="home_page.php">
            <button type="submit" id="login" name="submit">Log in</button>
          </a>
        </div>
      </form>
      <p class="signup-prompt">
        Not a member?
        <a href="home_page.php">Start a 14 day free trial</a>
      </p>
    </div>
  </div>

</body>
</html>
