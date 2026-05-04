<?php
for ($i = 0; $i <= 99; $i++) {
    echo sprintf("%02d", $i);

    if ($i < 99) {
        echo ", ";
    }
}
?>