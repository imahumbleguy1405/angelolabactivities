<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("fname", $_POST['fname'], time()+30);
    setcookie("mname", $_POST['mname'], time()+25);
    setcookie("lname", $_POST['lname'], time()+20);
    setcookie("dob", $_POST['month']."/".$_POST['day']."/".$_POST['year'], time()+15);
    setcookie("address", $_POST['address'], time()+10);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fade Cookies</title>
    <link rel="stylesheet" href="style1.css">

    <script>
        function fadeOut(id, delay) {
            setTimeout(() => {
                let el = document.getElementById(id);
                if (el) {
                    el.style.transition = "opacity 1s";
                    el.style.opacity = 0;

                    setTimeout(() => {
                        el.style.display = "none";
                    }, 1000);
                }
            }, delay);
        }

        window.onload = () => {
            fadeOut("address", 10000);
            fadeOut("dob", 15000);
            fadeOut("lname", 20000);
            fadeOut("mname", 25000);
            fadeOut("fname", 30000);
        };
    </script>
</head>

<body>

<header>
    <h1>Forms</h1>
</header>

<main>

<form method="post">

<h2>Enter Information</h2>

First Name:<br>
<input type="text" name="fname"
onkeypress="return /^[A-Za-z ]$/.test(event.key) || event.key==='Backspace'" required><br>

Middle Name:<br>
<input type="text" name="mname"
onkeypress="return /^[A-Za-z ]$/.test(event.key) || event.key==='Backspace'" required><br>

Last Name:<br>
<input type="text" name="lname"
onkeypress="return /^[A-Za-z ]$/.test(event.key) || event.key==='Backspace'" required><br>

Date of Birth:<br>
Month: <input type="number" name="month" min="1" max="12" required><br>
Day: <input type="number" name="day" min="1" max="31" required><br>
Year: <input type="number" name="year" min="1900" max="2100" required><br>

Address:<br>
<input type="text" name="address"
onkeypress="return /^[A-Za-z0-9\s\-.,#]$/.test(event.key) || event.key==='Backspace'" required><br><br>

<input type="submit" value="Submit">

</form>

<hr>

<h2>Stored Data</h2>

<p id="fname">First Name: <?php echo $_COOKIE['fname'] ?? ""; ?></p>
<p id="mname">Middle Name: <?php echo $_COOKIE['mname'] ?? ""; ?></p>
<p id="lname">Last Name: <?php echo $_COOKIE['lname'] ?? ""; ?></p>
<p id="dob">Date of Birth: <?php echo $_COOKIE['dob'] ?? ""; ?></p>
<p id="address">Address: <?php echo $_COOKIE['address'] ?? ""; ?></p>

</main>

</body>
</html>
