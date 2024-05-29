<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* styles.css */

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 1em;
    font-family: Arial, sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

table th,
table td {
    padding: 12px 15px;
}

table tbody tr {
    border-bottom: 1px solid #dddddd;
}

table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

button {
    padding: 5px 10px;
    cursor: pointer;
    border: none;
    color: white;
    text-decoration: none;
}

button a {
    color: white;
    text-decoration: none;
}

button.delete {
    background-color: red;
    margin-right: 5px;
}

button.edit {
    background-color: green;
}

    </style>
</head>
<body>
<?php require "./view/par/nav.php" ?>

<?php require "./controller/admin.controll.php" ?>
    
</body>
</html>