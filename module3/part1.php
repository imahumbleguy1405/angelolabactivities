<?php
 
$people = [
 ["name" => "Ren Amamiya", "image" => "images/joker.webp", "age" => 17, "birthday" => "June 18", "contact" => "0998754932"],
 ["name" => "Morgana", "image" => "images/morgana.webp", "age" => 2, "birthday" => "April 19", "contact" => "0967543887"],
 ["name" => "Ann Takamaki", "image" => "images/ann.webp", "age" => 17, "birthday" => "November 12", "contact" => "09055678904"],
 ["name" => "Ryuji Sakamoto", "image" => "images/ryuji sakamoto.webp", "age" => 17, "birthday" => "July 3", "contact" => "0911230055"],
 ["name" => "Yusuke Kitagawa", "image" => "images/yusuke kitagawa.webp", "age" => 17, "birthday" => "January 28", "contact" => "0999740245"],
 ["name" => "Makoto Niijima", "image" => "images/makoto.webp", "age" => 18, "birthday" => "April 23", "contact" => "09090988654"],
 ["name" => "Futaba Sakura", "image" => "images/futaba.webp", "age" => 16, "birthday" => "February 19", "contact" => "09865463256"],
 ["name" => "Haru Okumura", "image" => "images/haru.webp", "age" => 18, "birthday" => "December 5", "contact" => "09451167544"],
 ["name" => "Goro Akechi", "image" => "images/akechi.webp", "age" => 18, "birthday" => "June 2", "contact" => "0945465886617"],
 ["name" => "Kasumi Yoshizawa", "image" => "images/kasumi.webp", "age" => 17, "birthday" => "March 25", "contact" => "0912556378954"]
];
 
usort($people, function ($a, $b) {
 return strcmp($a['name'], $b['name']);
});
?>
 
<!DOCTYPE html>
<html>
<head>
 <title>Phantom Thieves Members</title>
 
 <style>
 
 *{
 margin:0;
 padding:0;
 box-sizing:border-box;
 font-family:Arial, sans-serif;
 }
 
 body{
 background-image:url('images/phantom.jpg');
 background-size:cover;
 background-position:center;
 background-attachment:fixed;
 color:white;
 min-height:100vh;
 }
 
 .overlay{
 background:rgba(0,0,0,0.75);
 min-height:100vh;
 display:flex;
 flex-direction:column;
 }
 
 header{
 text-align:center;
 padding:30px;
 background:rgba(255,0,0,0.85);
 border-bottom:4px solid white;
 }
 
 header h1{
 font-size:45px;
 letter-spacing:3px;
 text-transform:uppercase;
 text-shadow:3px 3px 8px black;
 }
 
 table{
 width:90%;
 margin:40px auto;
 border-collapse:collapse;
 background:rgba(20,20,20,0.92);
 box-shadow:0 0 20px red;
 }
 
 th{
 background:#b30000;
 color:white;
 padding:15px;
 font-size:18px;
 text-transform:uppercase;
 }
 
 td{
 padding:15px;
 text-align:center;
 border-bottom:1px solid #444;
 }
 
 tr:hover{
 background:rgba(255,0,0,0.25);
 transition:0.3s;
 }
 
 img{
 width:90px;
 height:90px;
 object-fit:cover;
 border-radius:50%;
 border:3px solid red;
 box-shadow:0 0 12px red;
 transition:0.3s;
 }
 
 img:hover{
 transform:scale(1.1);
 }
 
 footer{
 margin-top:auto;
 text-align:center;
 padding:20px;
 background:rgba(0,0,0,0.9);
 border-top:3px solid red;
 font-size:18px;
 }
 
 </style>
 
</head>
 
<body>
 
<div class="overlay">
 
<header>
 <h1>Phantom Thieves Members</h1>
</header>
 
<table>
 
 <tr>
 <th>No.</th>
 <th>Name</th>
 <th>Image</th>
 <th>Age</th>
 <th>Birthday</th>
 <th>Contact Number</th>
 </tr>
 
 <?php foreach ($people as $index => $person): ?>
 
 <tr>
 
 <td><?php echo $index + 1; ?></td>
 
 <td><?php echo $person['name']; ?></td>
 
 <td>
 <img src="<?php echo $person['image']; ?>">
 </td>
 
 <td><?php echo $person['age']; ?></td>
 
 <td><?php echo $person['birthday']; ?></td>
 
 <td><?php echo $person['contact']; ?></td>
 
 </tr>
 
 <?php endforeach; ?>
 
</table>
 
<footer>
 Created by Christian Angelo Tamayo | Contact Number: 09272598044
</footer>
 
</div>
 
</body>
</html>
 