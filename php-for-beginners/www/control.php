<?php

echo "<hr/>";
$hours = 17;

if ($hours < 12) {
    echo "Good morning";
} elseif ($hours < 18) {
    echo "Good afternoon";
} elseif ($hours < 22) {
    echo "Good evening";
} else {
    echo "Good night";
}

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

