<?php

$file_uri = array_filter(explode("/", $_SERVER["REQUEST_URI"]));
$page_uri = $file_uri[count($file_uri)];
$page_title = strtoupper(str_replace(".php", "", $page_uri));

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$page_title;?></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1 class="header">Ali Restaurant</h1>
      <ul class="menu">
        <li> <a href="home.php">Home</a> </li>
        <li> <a href="meals.php">Meals</a> </li>
        <li> <a href="drinks.php">Drinks</a> </li>
        <li> <a href="desserts.php">Desserts</a> </li>
        <li> <a href="about.php">About</a> </li>
      </ul>

<div class="about">
  <img src="images/restaurant.jpg" alt="Ali_restaurant">
  <h1>About Our Ali Restaurant</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>


<div class="footer">
  &copy; 2020 Ali Restaurant
</div>
</div>
<script src="main.js" charset="utf-8"></script>
</body>
</html>
