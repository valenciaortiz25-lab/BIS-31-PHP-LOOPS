<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valencia Ortiz - BIS 31</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Custom Cursor -->
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
            <?php
                for ($i = 1; $i <= 18; $i++) {
                echo "<li>$i</li>";
            }
            ?>
            </ul>

        <section class="bio">
        <h2>2. Use a while loop to print numbers 1 to 27 on the screen</h2>
            <ul>
            <?php
            $i = 1;

            while ($i <= 27) {
                echo "<li>$i</li>";
                $i++;
            }
            ?>
            </ul>
        <section class="bio">
        <h2>3. Use a do-while loop to print numbers 1 to 15 on the scree</h2>
        <ul>
        <?php
        $i = 1;

        do {
            echo "<li>$i</li>";
            $i++;
        } while ($i <= 15);
        ?>
        </ul>
        <section class="bio">
        <h2>4. Use a loop structure to calculate the sum of all odd numbers from 2 to 21</h2>
        <?php
        $sum = 0;

        for ($i = 2; $i <= 21; $i++) {
            if ($i % 2 != 0) {
                $sum += $i;
            }
        }

        echo "The sum of odd numbers from 2 to 21 is: " . $sum;
        ?>
        <section class="bio">
        <h2>5. Use a loop structure to calculate the product of all even numbers from 3 to 17</h2>
        <?php
        $product = 1;

        for ($i = 3; $i <= 17; $i++) {
            if ($i % 2 == 0) {
                $product *= $i;
            }
        }

        echo "The product of even numbers from 3 to 17 is: " . $product;
        ?>
        <img src="me.jpg" alt="Profile Picture" class="profile-img">
    </section>

    <footer>
        <p>© 2012 Valencia Ortiz. All Rights Reserved.</p>
    </footer>

    <script src="cursor.js"></script>
</body>
</html>