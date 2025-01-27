<!-- Done by Mohamad Adam Sadek 
     This page has a form to add a new book to the database -->

<!DOCTYPE html>
<html>

<head>
    <title>Book Library</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script src="books.js"></script>
</head>

<body>
    <!--  menu start -->
    <div id="container">
        <div id="menu">
            <ul>
                <li class="title">CMPS Book Library</li>
                <li><a href="addBook.php" class="current">Add Book</a></li>
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
                <h1>Add Books</h1>
                <div class="newBookDiv">
                    <form action="newBooks.php" id="newBooks">
                        <span style="margin-left: 12px">Title:</span> <br>
                        <input type="text" name="title" maxlength="50" required> 
                        <br>
                        <span style="margin-left: 12px">Author:</span> <br>
                        <input type="text" name="author" required> 
                        <br>
                        <span style="margin-left: 12px">Category:</span> <br>
                        <input type="text" name="category" required> 
                        <br>
                        <span style="margin-left: 12px">Year:</span> <br>
                        <input type="number" min="1600" max="2020" name="year" required> 
                        <br>
                        <span style="margin-left: 12px">Price:</span> <br>
                        <input type="number" step="any" name="price" required> 
                        <br>
                        <span style="margin-left: 12px">Description:</span> <br>
                        <textarea rows="4" cols="50" name="description" form="newBooks">
                        </textarea> <br>
                        <input type="submit" value="Submit">
                    </form>
                </div>    

            </div> <!-- end of content right -->

            <div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of content -->

    </div> <!-- end of container -->

</body>

</html>