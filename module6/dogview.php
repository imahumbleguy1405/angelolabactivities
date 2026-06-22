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
    echo "<div style='border:1px solid black; padding:10px; margin-bottom:10px; background:white;'>";

    echo "<strong>Dog ".$count++."</strong><br>";
    echo "Name: ".$row['d_name']."<br>";
    echo "Breed: ".$row['d_breed']."<br>";
    echo "Age: ".$row['d_age']."<br>";
    echo "Address: ".$row['d_add']."<br>";

    
    echo "<p>Color: ".$_GET['color']."
<span style='width:20px; height:20px; display:inline-block;
background:".$_GET['color'].";
border:1px solid black;
margin-left:8px; vertical-align:middle;'></span></p>";
    echo "Height: ".$row['d_height']."<br>";
    echo "Weight: ".$row['d_weight']."<br>";

    echo "</div>";
}
?>

</main>

</body>
</html>