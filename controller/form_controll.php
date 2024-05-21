<?php 
error_reporting(E_ALL);
ini_set("error_reporting", 1);

$config = require "./config.php";
require "./module/DB.php";

echo "qry enty";

$database = new Database($config);
$dataConnection = $database->conn();
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $course=$_POST['course'];
    $comment=$_POST['comments'];
    

    $sql = "INSERT INTO form(Username, Email, password,course, comments) VALUES ('$name','$email','$phone','$course','$comment')";


    $result = mysqli_query($dataConnection,$sql);

if($result){
    echo "Data Inserted";
    header("location:./login_view.php");
}else{
    echo "Data Not Inserted";
}


}



?>


