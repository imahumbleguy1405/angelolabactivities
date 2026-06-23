<?php
$conn = new mysqli("localhost", "root", "", "dog_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM dogs");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <link rel="stylesheet" href="stylemenu.css">
</head>

<body>

<div class="background-image"></div>

<header>
    <h1>Dog Records</h1>
</header>

<main>

<h2>All Dogs</h2>

<?php
$count = 1;

while($row = $result->fetch_assoc()) {
?>

<div class="dog-box">
    <strong>Dog <?php echo $count++; ?></strong><br>

    Name: <?php echo $row['d_name']; ?><br>
    Breed: <?php echo $row['d_breed']; ?><br>
    Age: <?php echo $row['d_age']; ?><br>
    Address: <?php echo $row['d_add']; ?><br>

    Color: <?php echo $row['d_color']; ?>
    <span class="color-box" style="background:<?php echo $row['d_color']; ?>"></span><br>

    Height: <?php echo $row['d_height']; ?><br>
    Weight: <?php echo $row['d_weight']; ?><br>
</div>

<?php
}
?>

</main>

</body>
</html>