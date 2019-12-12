<?php
$servername = "localhost";
$username = "root";
$password = "root";
try {
    $conn = new PDO("mysql:host=$servername;dbname=booklibrary", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $title = $_REQUEST["title"];
    $author = $_REQUEST["author"];
    $category = $_REQUEST["category"];
    $year = $_REQUEST["year"];
    $price = $_REQUEST["price"];
    $description = "k";
    if(isset($_REQUEST["description"])){
        $description = $_REQUEST["description"];
    }

    $sql = "INSERT INTO `book`(`TITLE`, `AUTHOR`, `CATEGORY`, `YEAR`, `PRICE`, `DESCRIPTION`) 
    VALUES (\"$title\",\"$author\",\"$category\",$year,$price,\"$description\")";
    // use exec() because no results are returned
    $conn->exec($sql);

    header("Location: home.php");
    die();
    // echo "New record created successfully";
}catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
    
?>