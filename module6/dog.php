<?php
$conn = new mysqli("localhost", "root", "", "dog_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['save'])) {

    $name = $_GET['name'];
    $breed = $_GET['breed'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $color = $_GET['color']; // ✅ plain color
    $height = $_GET['height'] . " cm";
    $weight = $_GET['weight'] . " kg";

    $sql = "INSERT INTO dogs (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight)
            VALUES ('$name','$breed','$age','$address','$color','$height','$weight')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Saved successfully!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Register</title>
    <link rel="stylesheet" href="stylemenu.css">
</head>

<body>

<div class="background-image"></div>

<header>
    <h1>Dog Registration</h1>
</header>

<main>

<h2>Dog Information</h2>

<form method="get">

<label>Name:</label>
<input type="text" name="name"
onkeypress="return /^[A-Za-z ]$/.test(event.key) || event.key==='Backspace'" required>

<label>Breed:</label>
<input type="text" name="breed"
onkeypress="return /^[A-Za-z ]$/.test(event.key) || event.key==='Backspace'" required>

<label>Age (numbers only):</label>
<input type="number" name="age" min="0" required>

<label>Address (letters & numbers only):</label>
<input type="text" name="address"
onkeypress="return /^[A-Za-z0-9 ]$/.test(event.key) || event.key==='Backspace'" required>

<label>Color:</label>
<input type="text" name="color"
onkeypress="return /^[A-Za-z ]$/.test(event.key) || event.key==='Backspace'" placeholder="e.g. red, blue" required>

<label>Height:</label>
<div class="inline">
    <span>cm</span>
    <input type="number" name="height" required>
</div>

<label>Weight:</label>
<div class="inline">
    <span>kg</span>
    <input type="number" name="weight" required>
</div>

<br>
<input type="submit" name="save" value="Save">

</form>

<hr>

<?php
if (isset($_GET['name'])) {
    echo "<h2>Submitted Data:</h2>";
    echo "<p>Name: ".$_GET['name']."</p>";
    echo "<p>Breed: ".$_GET['breed']."</p>";
    echo "<p>Age: ".$_GET['age']."</p>";
    echo "<p>Address: ".$_GET['address']."</p>";
    echo "<p>Color: ".$_GET['color']."</p>";
    echo "<p>Height: ".$_GET['height']." cm</p>";
    echo "<p>Weight: ".$_GET['weight']." kg</p>";
}
?>

<br>
<a href="DogView.php">View Records</a>

</main>

</body>
</html>
