<?php
$grade = 10;
$rank  = "";
$image = "";

if ($grade >= 93 && $grade <= 100) {
    $rank = "A";   $image = "images/imageA.png";
} elseif ($grade >= 90) {
    $rank = "A-";  $image = "images/imageA.png";
} elseif ($grade >= 87) {
    $rank = "B+";  $image = "images/imageB.jpg";
} elseif ($grade >= 83) {
    $rank = "B";   $image = "images/imageB.jpg";
} elseif ($grade >= 80) {
    $rank = "B-";  $image = "images/imageC.png";
} elseif ($grade >= 77) {
    $rank = "C+";  $image = "images/imageC.png";
} elseif ($grade >= 73) {
    $rank = "C";   $image = "images/imageD.jpg";
} elseif ($grade >= 70) {
    $rank = "C-";  $image = "images/imageD.jpg";
} elseif ($grade >= 67) {
    $rank = "D+";  $image = "images/imageE.jpg";
} elseif ($grade >= 63) {
    $rank = "D";   $image = "images/imageE.jpg";
} elseif ($grade >= 60) {
    $rank = "D-";  $image = "images/imageE.jpg";
} else {
    $rank = "F";   $image = "images/imageF.jpeg";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grade Ranking Program</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Grade Result</h2>

    <div class="content">
        <div class="boxes">
            <div class="box">
                Grade<br>
                <strong><?php echo $grade; ?></strong>
            </div>

            <div class="box">
                Rank<br>
                <strong><?php echo $rank; ?></strong>
            </div>
        </div>

        <div class="picture">
            <img src="<?php echo $image; ?>" alt="Grade Image">
        </div>
    </div>

</div>

</body>
</html>