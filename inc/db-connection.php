<?php
require_once realpath(__DIR__ . "/../vendor/autoload.php");
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$db_servername = $_ENV["HOST"];
$db_username = $_ENV["USER"];
$db_password = $_ENV["PASSWORD"];
$db_name = $_ENV["DB_NAME"];


// Messages connection
try {
    $db = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Database connection failed";
    echo $e->getMessage();
    exit;
}

// News connection
try {
    $news = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
    $news->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Database connection failed";
    echo $e->getMessage();
    exit;
}

// Fetch News Articles
// To-do: write this functionality


// Store Message in db
function storeMessage($name, $company, $email, $tel, $message) {
    global $db;
    $sql = $db->prepare("INSERT INTO MESSAGES (NAME, COMPANY, EMAIL, PHONE, MESSAGE) VALUES (?, ?, ?, ?, ?)");
    $sql->bindParam(1, $name);
    $sql->bindParam(2, $company);
    $sql->bindParam(3, $email);
    $sql->bindParam(4, $tel);
    $sql->bindParam(5, $message);
    $sql->execute();
}


function receiveContactForm() {
    echo('<script>alert("form");</script>');
}

function getNews() {
    global $news;
    $result = $news->query("SELECT * FROM NEWS ORDER BY DATE DESC LIMIT 3");
    $news_array = $result->fetchAll(PDO::FETCH_ASSOC);
    return $news_array;
}

?>