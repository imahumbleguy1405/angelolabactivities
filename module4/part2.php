<?php

// Array of 20 names
$names = [
    "alice", "azumi", "fortuna", "jack frost", "nezha taizi",
    "anahita", "angel", "black ooze", "mara", "feng huang",
    "hell biker", "hua po", "high pixie", "kikuri hime",
    "ippon datara", "hell biker", "turbo granny", "mad gasser",
    "principality", "sukuna"
];

echo "<h2 style='text-align:center;'>List of Names</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width:100%; text-align:center;'>";

// Table header
echo "<tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Position of 'a'</th>
        <th>Reverse Name</th>
      </tr>";

// Loop through each name
foreach ($names as $name) {

    
    $charCount = strlen($name);

    
    $upperName = ucwords($name);

    
    $replaceVowels = preg_replace('/[aeiouAEIOU]/', '@', $name);

    $posA = strpos($name, 'a');
    $posA = ($posA !== false) ? $posA + 1 : "Not found";

    
    $reverseName = strrev($name);

    
    echo "<tr>
            <td>$name</td>
            <td>$charCount</td>
            <td>$upperName</td>
            <td>$replaceVowels</td>
            <td>$posA</td>
            <td>$reverseName</td>
          </tr>";
}

echo "</table>";

?>
