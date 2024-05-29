<?php 
session_start();

require "./module/DB.php";

error_reporting(E_ALL);
ini_set("display_errors", 1);

$database = new Database($config);
$dataConnection = $database->conn();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $email = $_POST['email'];

    $password = md5($password); 
    $adminId = "bharathraj@gmail.com";

    if ($email == $adminId) {
        $adminQuery = "SELECT * FROM form WHERE Email = '$adminId' AND password = '$password'";
        $resultAdmin = $dataConnection->query($adminQuery);

        if ($resultAdmin && $resultAdmin->num_rows > 0) {
            $_SESSION['name'] = $email;
            header("Location: list.php?list_id=true");
            exit();
        }
    }

 
        $sql = "SELECT * FROM form WHERE password='$password' AND Email='$email'";
        $result = $dataConnection->query($sql);

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
            $_SESSION['name'] = $email; 
            header("Location:home_page.php");
            exit();
        } else {
            echo "<p>Invalid username or password</p>";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
P{
  color:red;
  text-align: center;
  /* margin-bottom: 12px; */
}


    </style>
</head>
<body>
  
</body>
</html>