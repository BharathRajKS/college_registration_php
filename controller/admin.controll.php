<?php

// Ensure the correct path to DB.php is provided
require "module/DB.php";  // Adjust the path if needed

// Rest of the code remains the same
$database = new Database($config);
$dataConnection = $database->conn();

$sql = "SELECT * FROM form";
$result = $dataConnection->query($sql);

if ($result->num_rows > 0) {
    echo "<table>"; // Start a table
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Courses</th><th>Comments</th><th>Modifications</th></tr>"; // Table header row

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["Username"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>" . $row["course"] . "</td>";
        echo "<td>" . $row["comments"] . "</td>";
        echo "<td>";
        echo "<button style='background-color: red; color: white; border: none; padding: 5px 10px; margin-right: 5px; cursor: pointer;'><a href='delete.php?id=". $row["id"] . "' style='color: white; text-decoration: none;'>Delete</a></button>";
        echo "<button style='background-color: green; color: white; border: none; padding: 5px 10px; cursor: pointer;'><a href='edit.php?id=". $row['id'] . "' style='color: white; text-decoration: none;'>Edit</a></button>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table><br><br>"; 
} else {
    echo "0 results";
}

$dataConnection->close();
