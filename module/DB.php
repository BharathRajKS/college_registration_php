
<!-- <link rel="stylesheet" href="../config.php"> -->

<?php



$config = require "config.php";


$database = new Database($config);
$dataConnection = $database->conn();

class Database{
       public $connection;

       public function __construct($config){
            $this->connection=mysqli_connect($config["host"],$config["root"],$config["password"],$config["database"]);

          if($this->connection){
            // echo "Connection Successful";
           }else{
              // echo "Connection Failure";
           }
       }

       public function conn(){
           return $this->connection;
       }
     
}