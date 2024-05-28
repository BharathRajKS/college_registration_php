<?php 


$config = require "./config.php";
require "./module/DB.php";


$database = new Database($config);
$dataConnection = $database->conn();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['phone'];
    $course=$_POST['course'];
    $comment=$_POST['comments'];
    
    $password = md5($password);
    $sql = "INSERT INTO form(Username, Email, password,course, comments)
     VALUES ('$name','$email','$password','$course','$comment')";

    if($dataConnection->query($sql)===TRUE){
    echo "<script>alert('register successfully'); window.location='view/login_view.php';</script>";
    // header("Location:./view/login_view.php");
    } else {
        echo "failed";
    
}

}

?>


