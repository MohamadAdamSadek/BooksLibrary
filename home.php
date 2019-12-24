<!-- Done by Mohamad Adam Sadek 
     Home page of the book library, it shows the categories and top books on the left 
     and 4 random books on the right -->

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
                <li><a href="addBook.php">Add Book</a></li>
                <li><a href="searchBook.php">Search</a></li>
                <li><a href="home.php" class="current">Home</a></li>
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

            <div id="content_right"> <!-- Begining of content right -->
                <div class=" product_box">
                    <h1>I Choose You!<span>(by Tracy West)</span></h1>
                    <img src="images/I Choose You!.jpg" alt="image"/>
                    <div class="product_info">
                        <p>Ash wants to be the world's greatest Pokemon mas...</p>
                        <h3>$28.34</h3>
                        <div class="detail_button"><a href="bookDetail.php?title=&quot;I Choose You!&quot;">Detail</a></div>
                    </div>
                    <div class="cleaner">&nbsp;</div>
                </div>

                <div class="cleaner_with_width">&nbsp;</div>

                <div class="product_box">
                    <h1>Wizard of Oz <span>(by L. Frank Baum)</span></h1>
                    <img src="images/The Wonderful Wizard of Oz.jpg" alt="image" />
                    <div class="product_info">
                        <p>Follow the yellow brick road! Dorothy thinks she's...</p>
                        <h3>$8.70</h3>
                        <div class="detail_button"><a href="bookDetail.php?title=&quot;The Wonderful Wizard of Oz&quot;">Detail</a></div>
                    </div>
                    <div class="cleaner">&nbsp;</div>
                </div>

                <div class="cleaner_with_height">&nbsp;</div>

                <div class="product_box">
                    <h1>The Hobbit <span>(by J.R.R. Tolkien)</span></h1>
                    <img src="images/The Hobbit.jpg" alt="image" />
                    <div class="product_info">
                        <p>Written for J.R.R. Tolkien’s own children, The Hob...</p>
                        <h3>$11.16</h3>
                        <div class="detail_button"><a href="bookDetail.php?title=&quot;The Hobbit&quot;">Detail</a></div>
                    </div>
                    <div class="cleaner">&nbsp;</div>
                </div>

                <div class="cleaner_with_width">&nbsp;</div>

                <div class="product_box">
                    <h1>Mensa Kakuro<span>(by Conceptis)</span></h1>
                    <img src="images/Mensa Kakuro.jpg" alt="image" />
                    <div class="product_info">
                        <p>The trick to kakuro is in making it all add up: the...</p>
                        <h3>$8.95</h3>
                        <div class="detail_button"><a href="bookDetail.php?title=&quot;Mensa Kakuro&quot;">Detail</a></div>
                    </div>
                    <div class="cleaner">&nbsp;</div>
                </div>

                <div class="cleaner_with_height">&nbsp;</div>

            </div> <!-- end of content right -->

            <div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of content -->

    </div> <!-- end of container -->
</body>

</html>