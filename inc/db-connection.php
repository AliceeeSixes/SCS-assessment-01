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

// Validate Message

function validateMessage ($name, $company, $email, $tel, $message, $marketing) {
    $valid = true;
    $invalidValues = [];
    if (! $name) {
        $valid = false;
        array_push($invalidValues, "Name");
    }
    if (! ($email && filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $valid = false;
        array_push($invalidValues, "Email");
    }
    if (! ($tel && preg_match('/^(?:(?:\+44\s?|0)(?:1|2|3|7)(?:\d\s?){8,9})$/', $tel))) {
        $valid = false;
        array_push($invalidValues, "Telephone");
    }
    if (! ($message && strlen($message) >= 5)) {
        $valid = false;
        array_push($invalidValues, "Message");
    }
    if ($marketing) {
        $marketing = 1;
    } else {
        $marketing = 0;
    }


    if ($valid) {
        return (storeMessage($name, $company, $email, $tel, $message, $marketing));
    } else {
        // Throw exception
        $error = "Invalid or missing details: " . implode(", ", $invalidValues);
        echo "<script>formError('$error')</script>";
        return false;
    }
}

// Store Message in db
function storeMessage($name, $company, $email, $tel, $message, $marketing) {
    global $db;
    $sql = $db->prepare("INSERT INTO MESSAGES (NAME, COMPANY, EMAIL, PHONE, MESSAGE, MARKETING) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bindParam(1, $name);
    $sql->bindParam(2, $company);
    $sql->bindParam(3, $email);
    $sql->bindParam(4, $tel);
    $sql->bindParam(5, $message);
    $sql->bindParam(6, $marketing);
    $sql->execute();
    echo "<div class='form-send-success'><p>Your message has been sent!<p><div class='close-message'>&times;</div></div>";
    return true;
}


function getNews() {
    global $news;
    $result = $news->query("SELECT * FROM NEWS ORDER BY DATE DESC LIMIT 3");
    $news_array = $result->fetchAll(PDO::FETCH_ASSOC);
    return $news_array;
}

?>