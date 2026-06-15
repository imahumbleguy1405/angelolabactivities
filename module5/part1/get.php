<!DOCTYPE html>
<html>
<head>
    <title>GET Form</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

<header>
    <h1>GET Method</h1>
</header>

<main>

<form method="get">

<h2>Enter Information</h2>

First Name:<br>
<input type="text" name="fname"
onkeypress="return /^[A-Za-z ]$/.test(event.key) || event.key === 'Backspace'" required><br>

Middle Name:<br>
<input type="text" name="mname"
onkeypress="return /^[A-Za-z ]$/.test(event.key) || event.key === 'Backspace'" required><br>

Last Name:<br>
<input type="text" name="lname"
onkeypress="return /^[A-Za-z ]$/.test(event.key) || event.key === 'Backspace'" required><br>

Date of Birth:<br>
Month: <input type="number" name="month" min="1" max="12" required><br>
Day: <input type="number" name="day" min="1" max="31" required><br>
Year: <input type="number" name="year" min="1900" max="2100" required><br>

Address:<br>
<input type="text" name="address"
onkeypress="return /^[A-Za-z0-9\s\-.,#]$/.test(event.key) || event.key === 'Backspace'" required><br><br>

<input type="submit" value="Submit">

</form>

<hr>

<?php
if (isset($_GET['fname'])) {
    echo "<h2>Submitted Data:</h2>";
    echo "<p>First Name: ".$_GET['fname']."</p>";
    echo "<p>Middle Name: ".$_GET['mname']."</p>";
    echo "<p>Last Name: ".$_GET['lname']."</p>";
    echo "<p>Date of Birth: ".$_GET['month']."/".$_GET['day']."/".$_GET['year']."</p>";
    echo "<p>Address: ".$_GET['address']."</p>";
}
?>

</main>

</body>
</html>