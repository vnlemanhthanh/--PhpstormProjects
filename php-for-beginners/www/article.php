<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "0Cxuwi27jEViUxd3";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

$id = 1;  // get input
$sql = "SELECT *
        FROM article
        WHERE id = $id";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($results);
}

?>

<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
</head>
<body>

<header>
    <h1>My blog</h1>
</header>

<main>
    <?php if ($article === null): ?>
        <p>Article not found.</p>
    <?php else: ?>

        <article>
            <h2><?= $article['title']; ?></h2>
            <p><?= $article['content']; ?></p>
        </article>

    <?php endif; ?>
</main>
</body>
</html>
