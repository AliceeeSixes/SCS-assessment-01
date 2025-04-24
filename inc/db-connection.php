<?php
// Initial connection
try {
    $db = new PDO("sqlite:".__DIR__."/nm.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

?>