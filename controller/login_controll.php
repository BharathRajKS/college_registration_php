<?php 

session_start();


require "./module/DB.php";

error_reporting(E_ALL);
ini_set("display_errors",1);


if(isset($_POST['submit'])){
// echo "Raman";
    $name=$_POST['name'];
    $email=$_POST['email'];


 if($name!="" && $email!=""){
   $sql="SELECT * from form where Username='$name' and Email='$email'";
   

   $result=mysqli_query($dataConnection,$sql);
   if($result->num_rows > 0){
    $_SESSION['name'] = $name; 
    
    // echo('insde');
    header("Location:home_page.php");

    echo"sucessfully";

 }else{
     echo "<p>Invalid username or password</p>";
 }

 }

   // header("Location:home.php");


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