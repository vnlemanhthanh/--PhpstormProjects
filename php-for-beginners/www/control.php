<?php

echo "<hr/>";
for ($i = 1; $i < 11; $i++) {
    echo $i . ', ';
}

echo "<hr/>";
$month = 1;

while ($month <= 12) {
    echo $month . ', ';
    $month++;
}

echo "<hr>";
$articles = [];

if (empty($articles)) echo "the array is <br> empty <br/>";

