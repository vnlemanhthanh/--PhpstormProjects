<?php
$hour = 19;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lorem Ipsum</h1>

    <?php if ($hour < 12): ?>
        Good morning
    <?php elseif ($hour < 18): ?>
        Good afternoon
    <?php elseif ($hour < 22): ?>
        Good evening
    <?php else: ?>
        Good night
    <?php endif; ?>

</body>
</html>