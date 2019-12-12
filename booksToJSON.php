<?php
    // Done by Mohamad Adam Sadek ID: 201600322
    // This php file retrieves books from the database and send them as JSON

    $servername = "localhost";
    $username = "root";
    $password = "root";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=booklibrary", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // return all the book titles 
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
        
        // return all the book categories
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

        // return the datails of a book based on the title
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

        // return all the books based on a category
        if(isset($_REQUEST["mode"]) && $_REQUEST["mode"] == "search" && isset($_REQUEST["category"])){
            $category = $_REQUEST["category"];
            $query = "SELECT title FROM book WHERE category = $category";	
            $statement = $conn->prepare($query);
            $statement->execute();
        
            $userData_List = array();
        
            while($row=$statement->fetch(PDO::FETCH_ASSOC)){
                $userData_List["Category"][] = $row;	
            }

            echo json_encode($userData_List);
        }
        
    }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    $conn = null;
?>