<?php
session_start();

if ($_POST) {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];
}

function showColor($color) {
    $validColors = [
        "red","blue","green","yellow","orange","purple","violet",
        "pink","black","white","gray","brown","cyan","magenta","lime","navy"
    ];

    $colorLower = strtolower(trim($color));

    if (in_array($colorLower, $validColors)) {
        return "<div style='display:flex; align-items:center; justify-content:center; gap:10px;'>
                    <span>$color</span>
                    <div style='width:50px; height:20px; background:$colorLower; border:1px solid black;'></div>
                </div>";
    } else {
        return "<span>$color</span>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #ff0000, #000000);
            text-align: center;
        }
        .container {
            width: 400px;
            margin: 60px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
        p {
            font-size: 18px;
        }
        img {
            width: 100px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>My Favorite Colors</h2>

    <img src="futaba.webp">

    <p>Color 1: <?php echo showColor($_SESSION['color1']); ?></p>
    <p>Color 2: <?php echo showColor($_SESSION['color2']); ?></p>
    <p>Color 3: <?php echo showColor($_SESSION['color3']); ?></p>
    <p>Color 4: <?php echo showColor($_SESSION['color4']); ?></p>
    <p>Color 5: <?php echo showColor($_SESSION['color5']); ?></p>
</div>

</body>
</html>