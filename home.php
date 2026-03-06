<?php include "loops.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valencia Ortiz - BIS 31</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="cursor"></div>

<ul class="navbar">
  <li><a href="home.php">Home</a></li>
  <li><a href="https://github.com/valenciaortiz25-lab/BIS-31-Test">GitHub</a></li>
</ul>

<header>
    <img src="Damian.jpg" alt="Logo" class="logo">
    <h1>BIS 31 PHP LOOPS</h1>
    <p class="intro">
        This is my PHP Loops assignment for BIS 31.
    </p>
</header>

<section class="bio">

<h2>1. Use a for loop to print numbers 1 to 18 on the screen</h2>
<ul>
<?php loop1(); ?>
</ul>

<h2>2. Use a while loop to print numbers 1 to 27 on the screen</h2>
<ul>
<?php loop2(); ?>
</ul>

<h2>3. Use a do-while loop to print numbers 1 to 15 on the screen</h2>
<ul>
<?php loop3(); ?>
</ul>

<h2>4. Use a loop structure to calculate the sum of all odd numbers from 2 to 21</h2>
<p>
<?php sumOdd(); ?>
</p>

<h2>5. Use a loop structure to calculate the product of all even numbers from 3 to 17</h2>
<p>
<?php productEven(); ?>
</p>

<img src="me.jpg" alt="Profile Picture" class="profile-img">

</section>

<footer>
    <p>© 2012 Valencia Ortiz. All Rights Reserved.</p>
</footer>

<script src="cursor.js"></script>

</body>
</html>