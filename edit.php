<?php

require "module/DB.php";
session_start();

$database = new Database($config);
$dataconnection = $database->conn();

$studentName = $email = $password = $course = $comments = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT `Username`, `Email`, `password`, `course`, `comments` FROM `form` WHERE `id` = '$id'";
    $result = $dataconnection->query($query);

    if ($result) {
        $user = $result->fetch_assoc();
        $studentName = $user['Username'];
        $email = $user['Email'];
        $password = $user['password'];
        $course = $user['course'];
        $comments = $user['comments'];
    } else {
        echo "Error: " . $dataconnection->error;
        exit();
    }
} else {
    echo "No user specified.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_input = $_POST['name'];
    $email_input = $_POST['email'];
    $password_input = $_POST['phone'];
    $course_input = $_POST['course'];
    $comment_input = $_POST['comments'];

    $password_input = md5($password_input);

    $query = "UPDATE `form` SET `Username` = '$name_input', `Email` = '$email_input', `password` = '$password_input', `course` = '$course_input', `comments` = '$comment_input' WHERE `id` = '$id'";
    $result = $dataconnection->query($query);

    if ($result) {
        echo "Record updated successfully";
        header("Location: admin.view.php");
        exit(); 
    } else {
        echo "Error: " . $dataconnection->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Registration Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php require "view/par/nav.php" ?>
<body class="bg-gray-100 min-h-screen">
  <div class="w-full max-w-lg bg-white p-3 rounded-lg shadow-lg mx-auto mt-2">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Course Registration</h2>
    <form method="post">
      <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Full Name</label>
        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="John Doe" value="<?php echo htmlspecialchars($studentName); ?>">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">Email Address</label>
        <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="john.doe@example.com" value="<?php echo htmlspecialchars($email); ?>">
      </div>
      <div class="mb-4">
        <label for="phone" class="block text-gray-700 font-bold mb-2">Password</label>
        <input type="password" id="phone" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label for="course" class="block text-gray-700 font-bold mb-2">Select Course</label>
        <select id="course" name="course" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
          <option value="">Choose a course</option>
          <option value="HTML" <?php echo $course == 'HTML' ? 'selected' : ''; ?>>HTML</option>
          <option value="CSS" <?php echo $course == 'CSS' ? 'selected' : ''; ?>>CSS</option>
          <option value="React Js" <?php echo $course == 'React Js' ? 'selected' : ''; ?>>React JS</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="comments" class="block text-gray-700 font-bold mb-2">Additional Comments</label>
        <textarea id="comments" name="comments" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4" placeholder="Enter your comments here..."><?php echo htmlspecialchars($comments); ?></textarea>
      </div>
      <div class="flex items-center justify-between">
        <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>
      </div>
    </form>
  </div>
</body>
</html>
