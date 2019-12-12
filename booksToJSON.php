<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=booklibrary", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // return all the books
        if(isset($_REQUEST["mode"]) && $_REQUEST["mode"] == "title"){
            $query = "SELECT title FROM book";	
            $statement = $conn->prepare($query);
            $statement->execute();
        
            $userData_List = array();
        
            while($row=$statement->fetch(PDO::FETCH_ASSOC)){
                $userData_List["Titles"][] = $row;	
            }
            echo json_encode($userData_List);
        }
        
        // return all the books
        if(isset($_REQUEST["mode"]) && $_REQUEST["mode"] == "category"){
            $query = "SELECT category FROM book GROUP BY CATEGORY";	
            $statement = $conn->prepare($query);
            $statement->execute();
        
            $userData_List = array();
        
            while($row=$statement->fetch(PDO::FETCH_ASSOC)){
                $userData_List["Category"][] = $row;	
            }

            echo json_encode($userData_List);
        }

        if(isset($_REQUEST["mode"]) && $_REQUEST["mode"] == "all"){
            $query = "SELECT * FROM book";	
            $statement = $conn->prepare($query);
            $statement->execute();
        
            $userData_List = array();
        
            while($row=$statement->fetch(PDO::FETCH_ASSOC)){
                $userData_List["Books"][] = $row;	
            }

            echo json_encode($userData_List);
        }

        if(isset($_REQUEST["mode"]) && $_REQUEST["mode"] == "single" && isset($_REQUEST["title"])){
            $title = $_REQUEST["title"];
            $query = "SELECT `TITLE`, `AUTHOR`,`YEAR`, `PRICE`, `DESCRIPTION` FROM book WHERE title = $title";	
            $statement = $conn->prepare($query);
            $statement->execute();
        
            $userData_List = array();
        
            while($row=$statement->fetch(PDO::FETCH_ASSOC)){
                $userData_List["Book"][] = $row;	
            }

            echo json_encode($userData_List);
        }
        
        // echo "Connected successfully <br>";
        // $rows = $conn->query("SELECT * FROM book");

        // foreach($rows as $row) {
        //     // print_r($row);
        //     echo $row[1]."<br>";
        // }
    }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    $conn = null;
?>