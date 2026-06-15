<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #74ebd5, #9face6);
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
        input {
            width: 90%;
            padding: 8px;
            margin: 5px;
        }
        button {
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }
        img {
            width: 100px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Enter your 5 Favorite Colors</h2>

    <img src="futaba.webp">

    <form action="resultColors.php" method="post">
        Favorite Color 1: <input type="text" name="color1"><br>
        Favorite Color 2: <input type="text" name="color2"><br>
        Favorite Color 3: <input type="text" name="color3"><br>
        Favorite Color 4: <input type="text" name="color4"><br>
        Favorite Color 5: <input type="text" name="color5"><br><br>

        <button type="submit">Send Colors</button>
    </form>
</div>

</body>
</html>