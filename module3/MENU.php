<?php
    $pageTitle = "Module 3 Menu";
    $year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>

    
    <style>
        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(135deg, #000000, #8b0000);
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu {
            background: rgba(0, 0, 0, 0.9);
            padding: 40px 60px;
            border: 3px solid red;
            box-shadow: 0 0 30px red;
            text-align: center;
            min-width: 300px;
        }

        .menu h1 {
            color: red;
            letter-spacing: 4px;
            margin-bottom: 30px;
        }

        .menu a {
            display: block;
            margin: 15px 0;
            padding: 15px;
            background: red;
            color: black;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .menu a:hover {
            background: black;
            color: red;
            border: 2px solid red;
            transform: scale(1.08);
        }

        footer {
            margin-top: 25px;
            font-size: 12px;
            color: #ccc;
        }
    </style>
</head>

<body>

    
    <div class="menu">
        <h1><?php echo $pageTitle; ?></h1>

      <a href="part1.php">PART 1</a>
      <a href="part2.php">PART 2</a>
      <a href="part3.php">PART 3</a>

        <!-- FOOTER -->
        <footer>
            © <?php echo $year; ?> Christian Angelo Tamayo
        </footer>
    </div>

</body>
</html>