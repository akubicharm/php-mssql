<?php


echo "<h1>Hello External DB</h1>";
$mysqli = new mysqli(getenv("HELLO_PHP_MYSQL_SERVICE_HOST"), getenv("MYSQL_USER"), getenv("MYSQL_PASSWORD"), getenv("MYSQL_DATABASE"));
if ($mysqli->connect_error) {
    exit($mysqli->connect_error);
} else {
    $mysqli->set_charset("utf8");
}
$result = $mysqli->query("select msg from hello") or exit($mysqli->error());
echo var_dump($result->fetch_assoc());
$mysqli->close();

?>
