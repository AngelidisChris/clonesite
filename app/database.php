<?php


$host = getenv("DB_HOST");
$driver = getenv("DB_DRIVER");
$dbname = getenv("DB_NAME");
$user = getenv("DB_USERNAME");
$pass = getenv("DB_PASSWORD");


$dbHandle = new PDO("$driver:host=$host;dbname=$dbname", $user, $pass);
$dbHandle->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// always disable emulated prepared statement when using the MySQL driver
$dbHandle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

function run($dbHandle, $sql, $args = null) {
    if (!$args)
    {
        return $dbHandle->query($sql);
    }
    $stmt = $dbHandle->prepare($sql);
    $stmt->execute($args);
    return $stmt;
}