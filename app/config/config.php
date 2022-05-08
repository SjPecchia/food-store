<?php
define("APPROOT", dirname(dirname(__FILE__)));
$host = substr($_SERVER['HTTP_HOST'], 0, 5);
if (in_array($host, array('local', '127.0', '192.1'))) {
    $local = true;
} else {
    $local = false;
}
define("LOCAL", $local);
if ($local) {
    $debug = true;
    define('URLROOT', 'http://localhost/food-store');
} else {
    $debug = false;
    define('URLROOT', 'https://march??.sg-host.com');
}
define("SITENAME", "Steven Pecchia");
define("CURRENTYEAR", "2022");

if ($local) {
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PORT", "3307");
    define("DB_PASS", "");
    define("DB_NAME", "food_store");
} else {
    define("DB_HOST", "localhost");
    define("DB_USER", "????????");
    define("DB_PORT", "3307");
    define("DB_PASS", "");
    define("DB_NAME", "food_store");
}