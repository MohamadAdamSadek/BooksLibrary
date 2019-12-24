<!-- Done by Mohamad Adam Sadek 
     This page displays all the details of a book by receiving a title parameter -->

<?php
    if(isset($_REQUEST["title"])){
        $title = $_REQUEST["title"];
    }
    else{
        header("Location: searchBook.php");
        die();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Details</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="books.js"></script>
</head>

<body>
    <div id="container">
        <div id="menu">
            <ul>
                <li class="title">CMPS Book Library</li>
                <li><a href="addBook.php">Add Book</a></li>
                <li><a href="searchBook.php">Search</a></li>
                <li><a href="home.php">Home</a></li>
            </ul>
        </div> <!-- end of menu -->

        <div id="header"></div> <!-- Header with image and spacing -->

        <div id="content">

            <div id="content_left">
                <!-- Display all the categories -->
                <div class="content_left_section">
                    <h1>Categories</h1>
                    <ul id="categories"></ul>
                </div>

                <!-- Display the topBooks -->
                <div class="content_left_section">
                    <h1>Top Books</h1>
                    <ul id="topBooks"></ul>
                </div>

            </div> <!-- end of content left -->

            <div id="content_right">
                <div id="bookDetail"></div>

                <div class="cleaner_with_height">&nbsp;</div>

            </div> <!-- end of content right -->

            <div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of content -->

        <script>
            getBookByTitle(<?= $title?>);
        </script>
</body>

</html>