// Done by Mohamad Adam Sadek ID: 201600322 
// This js file controls alot of the interactions in the rest of the pages

// load left tab at beginning of every page
window.onload = function () {
    fillCategory();
    getTopBooks();
}

// get all the book titles available
function getTopBooks() {
    fetch("booksToJSON.php?mode=title")
        .then(response => response.json())
        .then(function (data) {
            var list = data.Titles;
            var ul = document.getElementById("topBooks");

            $i = 0; // counter for how many to show
            list.forEach(element => {
                if ($i < 8) {
                    // create li and a tags
                    var li = document.createElement("li");
                    var anchor = document.createElement("a");

                    // populate the anchor
                    anchor.innerHTML = element.title;
                    anchor.href = "bookDetail.php?title=\"" + element.title + "\"";

                    // append anchor to li and li to lu
                    li.appendChild(anchor);
                    ul.appendChild(li);

                    // increment i
                    $i++;
                }
            });
        });
}

// get all the categories and fill the category section of the side bar
function fillCategory() {
    fetch("booksToJSON.php?mode=category")
        .then(response => response.json())
        .then(function (data) {
            var list = data.Category;
            var ul = document.getElementById("categories");
            list.forEach(element => {
                // create li and a tags
                var li = document.createElement("li");
                var anchor = document.createElement("a");

                // populate the anchor
                anchor.innerHTML = element.category;
                anchor.href = "searchBook.php?category=" + element.category;

                // append anchor to li and li to lu
                li.appendChild(anchor);
                ul.appendChild(li);
            });
        });
}

// get all info about a book by given title and display it
function getBookByTitle(title) {
    console.log("change");
    fetch("booksToJSON.php?mode=single&title=\"" + title + "\"")
        .then(response => response.json())
        .then(function (data) {
            var list = data.Book;
            var div = document.getElementById("bookDetail");
            var div2 = document.createElement("div");
            var h1 = document.createElement("h1");
            var img = document.createElement("img");
            var ul = document.createElement("ul");
            var li1 = document.createElement("li");
            var li2 = document.createElement("li");
            var li3 = document.createElement("li");
            var p = document.createElement("p");

            h1.innerHTML = list[0].TITLE;
            img.src = "images/" + title + ".jpg";
            div2.className = "image_panel";
            li1.innerHTML = "By " + list[0].AUTHOR;
            li2.innerHTML = "Published in " + list[0].YEAR;
            li3.innerHTML = "Price: $" + list[0].PRICE;
            p.innerHTML = list[0].DESCRIPTION;

            ul.appendChild(li1);
            ul.appendChild(li2);
            ul.appendChild(li3);

            div2.appendChild(img);

            div.appendChild(h1);
            div.appendChild(div2);
            div.appendChild(ul);
            div.appendChild(p);
        });
}

// get all the categories and fill the select tag
function sortByCategory() {
    fetch("booksToJSON.php?mode=category")
        .then(response => response.json())
        .then(function (data) {
            var list = data.Category;
            var div = document.getElementById("selectCategory");

            list.forEach(element => {
                var button = document.createElement("button");

                button.innerHTML = element.category;
                button.addEventListener("click", function () {
                    fetch("booksToJSON.php?mode=search&category=\"" + element.category + "\"")
                        .then(response => response.json())
                        .then(function (data) {
                            var list = data.Category;
                            var div = document.getElementById("allBooks");
                            div.innerHTML = "";
                            var ul = document.createElement("ul");

                            list.forEach(element => {
                                // create li and a tags
                                var li = document.createElement("li");
                                var anchor = document.createElement("a");

                                // populate the anchor
                                anchor.innerHTML = element.title;
                                anchor.href = "bookDetail.php?title=\"" + element.title + "\"";

                                // append anchor to li and li to lu
                                li.appendChild(anchor);
                                ul.appendChild(li);
                            });
                            div.appendChild(ul);
                        });
                });

                div.appendChild(button);
            });

        });
}

// get all the book titles for a category
function getTitlesByCategory(category) {
    if (category != "") {
        fetch("booksToJSON.php?mode=search&category=\"" + category + "\"")
            .then(response => response.json())
            .then(function (data) {
                var list = data.Category;
                var div = document.getElementById("allBooks");
                div.innerHTML = "";
                var ul = document.createElement("ul");

                list.forEach(element => {
                    // create li and a tags
                    var li = document.createElement("li");
                    var anchor = document.createElement("a");

                    // populate the anchor
                    anchor.innerHTML = element.title;
                    anchor.href = "bookDetail.php?title=\"" + element.title + "\"";

                    // append anchor to li and li to lu
                    li.appendChild(anchor);
                    ul.appendChild(li);
                });
                div.appendChild(ul);
            });
    }
}
