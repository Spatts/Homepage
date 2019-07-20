function promptBook(){
    var bookID = document.getElementById("book_id").value;
    console.log("Book id is")
    console.log(bookID);
    if(confirm("Are you sure you want to delete this book?")){
        window.location.href = "removeBook.php?book_id=" + bookID;
    }
}

function promptMovie(){
    var movieID = document.getElementById("movie_id").value;
    if(confirm("Are you sure you want to delete this movie?")){
        window.location.href = "removeMovie.php?movie_id=" + movieID;
    }
}

function promptComic(){
    var comicID = document.getElementById("comic_id").value;
    if(confirm("Are you sure you want to delete this comic?")){
        window.location.href = "removeComic.php?comic_id=" + comicID;
    }
}