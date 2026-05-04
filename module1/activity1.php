<?php
$name = "Christian Angelo Tamayo";
$profession = "Junior Web Developer";

$email = "tamayo.christian.angelo.pgsl@gmail.com";
$phone = "09272598044";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Resume</title>

    
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="background-image"></div>
    <!-- Header -->
    <header>
        <h1><?php echo $name; ?></h1>
        <h3><?php echo $profession; ?></h3>
    </header>

    <!-- Main Content -->
    <main>
        <section>
            <h2>Profile</h2>
            <p>
               As a Cybersecurity student, I’m learning about networks, ethical hacking, and ways to defend systems against cyber attacks. Being part of FEU Tech has given me a great environment to explore these topics and develop my skills for the future.
            </p>
        </section>

        <section>
            <h2>Skills</h2>
            <ul>
                <li>PHP</li>
                <li>HTML</li>
                <li>MySQL</li>
                <li>Basic JavaScript</li>
                <li>Java</li>
                <li>Python</li>
                <li>C++</li>
            </ul>
        </section>

        <section>
            <h2>Education</h2>
            <p>
                Bachelor of Science in Information Technology  Specialization in Cybersecurity<br>
                FEUTECH <br>
                2026 - Present
            </p>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>
            Email: <?php echo $email; ?><br>
            Phone: <?php echo $phone; ?><br>
        </p>
    </footer>

</body>
</html>