window.onload = function(){
    fillCategory();
    getTitles();
}

function getTitles(){
    fetch("booksToJSON.php?mode=title")
        .then(response => response.json())
        .then(function (data) {
            var list = data.Titles;
            var ul = document.getElementById("topBooks");

            $i = 0; // counter for how many to show
            list.forEach(element => {
                if($i < 10){
                    // create li and a tags
                    var li = document.createElement("li");
                    var anchor = document.createElement("a");

                    // populate the anchor
                    anchor.innerHTML = element.title;
                    anchor.href = "bookDetail.php/category=" + element.title;

                    // append anchor to li and li to lu
                    li.appendChild(anchor);
                    ul.appendChild(li);

                    // increment i
                    $i++;
                }
            });
        });
}

function fillCategory(){
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
            anchor.href = "bookDetail.php/category=" + element.category;

            // append anchor to li and li to lu
            li.appendChild(anchor);
            ul.appendChild(li);
        });
    });
}

function fillHomeBoxes(){

}