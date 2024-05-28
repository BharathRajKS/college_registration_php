<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hogwarts University</title>
  <style>
    /* General Styles */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Navigation Styles */
    .navbar {
      background-color: black;
      padding: 1rem 0;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .container1 {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
    display: flex;
    justify-content:space-between;
    align-items: center;
}

    .logo {
      color: #ffffff;
      font-size: 1.5rem;
      font-weight: bold;
      text-decoration: none;
    }

    .login-btn {
        background-color: #002bff;
    color: #ffffff;
    font-weight: bold;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    text-decoration: none;
}
    
.admin{
  background-color: #002bff;
    color: #ffffff;
    font-weight: bold;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    text-decoration: none;
}

    .login-btn:hover {
      background-color: #38a169;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="container1">
      <div class="logo">
        <a href="index.php" class="logo">Hogwarts University</a>
      </div>
      <div class="login-btn">
        <a href="controller/admin.controll.php" class="admin">list</a></div>
        <?php 
            
            session_start();

            if(isset($_SESSION['name'])){
                echo "<span><a href='logout.php' class='login-btn'>Logout</a>";
            } else {
                echo "<a href='login_view.php' class='login-btn'>Login</a>";
            }
            ?>
      
    </div>
  </nav>

  <!-- Page content goes here -->

</body>
</html>

    <!-- Main Content -->
    
