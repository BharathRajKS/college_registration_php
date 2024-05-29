<?php
require "module/DB.php";
session_start();

$id = $_GET['id'];

$sql = "DELETE FROM form WHERE id='$id'";

$result = $dataConnection->query($sql);

if ($result == true) {
    echo "<script type='text/javascript'>
            alert('Record deleted successfully');
            window.location.href = 'admin.view.php';
          </script>";
    exit();
} else {
    echo "<script type='text/javascript'>
            alert('Record not deleted successfully');
          </script>";
}