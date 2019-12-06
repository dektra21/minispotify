<?php
$host = $_SERVER['HTTP_HOST'];

if ($host == 'localhost') {
    $pdo = new PDO('mysql:host=localhost;dbname=lagu', "root", "");
}
else {
    $db = parse_url(getenv("DATABASE_URL"));

    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));
}
?>

