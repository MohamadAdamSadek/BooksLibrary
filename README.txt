Done by Mohamad Adam Sadek

The main page is home.php.

All the pages have a header with a "Home" button that redirects to home.php, a "Search" button that redirects to search.php, and an "Add Book" button that redirect to addBook.php.

They also have a side bar at the left that shows all the categories, and the top books.

addBook.php has a form that allows users to add new books. It uses newBook.php to submit the data to the database.

searchBook.php shows a button for every category. When the button is pressed it shows the titles of all the books of that category. The titles can be pressed that redirect to bookDetail.php.

bookDetail.php shows all the details of a book given their title.

booksToJSON.php queries the database and returns the data as a JSON.

style.css controls the css of all the pages.

books.js controls the js of all the pages.

The images folder contains all the images used.