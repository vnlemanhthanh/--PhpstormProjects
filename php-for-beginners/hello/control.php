<?php

echo "<hr/>";
$day = "Wed";

switch ($day) {
    case 'Mon':
        echo "Monday";
        break;
    case 'Tue':
        echo "Tuesday"; break;
    case 'Wed':
        echo " Wednesday"; break;
    case 'Thu':
        echo "Thursday"; break;
    case 'Fri':
        echo "Friday"; break;
    case 'Sat':
        echo "Saturday"; break;
    case 'Sun':
        echo "Sunday"; break;
    default:
        echo "Days on Sunday";
}

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

