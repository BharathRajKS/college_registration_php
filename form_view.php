


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Registration Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php require "view/par/nav.php" ?>
<body class="bg-gray-100  min-h-screen">



  <div class="w-full max-w-lg bg-white p-3 rounded-lg shadow-lg mx-auto mt-2">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Course Registration</h2>
    <form  method="post" >
      <div class="mb-4">
        <label for="name" class="block text-gray-700 font-bold mb-2">Full Name</label>
        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="John Doe">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">Email Address</label>
        <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="john.doe@example.com">
      </div>
      <div class="mb-4">
        <label for="phone" class="block text-gray-700 font-bold mb-2">Password</label>
        <input type="password" id="phone" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="+91">
      </div>
      <div class="mb-4">
        <label for="course" class="block text-gray-700 font-bold mb-2">Select Course</label>
        <select id="course" name="course" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          <option value="">Choose a course</option>
          <option value="HTML"> HTML</option>
          <option value="CSS">CSS</option>
          <option value="React Js">React JS</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="comments" class="block text-gray-700 font-bold mb-2">Additional Comments</label>
        <textarea id="comments" name="comments" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4" placeholder="Enter your comments here..."></textarea>
      </div>
      <div class="flex items-center justify-between">
        <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="btn">
          Register
        </button>
       
      </div>
    </form>
  </div>
<script>
  let btn=document.getElementById('btn');
  btn.addEventListener('click',function(e){
    e.preventDefault();
    alert('Form Submitted');
    a
    <?php  require './controller/form_controll.php'; ?>
  });
</script>
</body>
</html>
