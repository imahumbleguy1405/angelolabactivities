<?php
    $pageTitle = "Module 4 Menu";
    $year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <body class="menu-body">

    </body>

    <!-- MAIN STYLESHEET (use one shared CSS for all pages) -->
    <link rel="stylesheet" href="style1.css">
</head>

<body>



<div class="menu">
    <h1><?php echo $pageTitle; ?></h1>

    <a href="part1.php">PART 1</a>
    <a href="part2.php">PART 2</a>
   
    <footer>
        © <?php echo $year; ?> Christian Angelo Tamayo
    </footer>
</div>

</body>
</html>