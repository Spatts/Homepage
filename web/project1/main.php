<?php
  require('dbConnect.php');
  $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="project1.css">
  <title>Homepage</title>
</head>
<body>
<?php
  require("navbar.php");
?>
<div class="jumbotron text-center jumbo">
  <h1>Homepage</h1>
</div>
    <h2>Books</h2>
<?php
  foreach ($db->query('SELECT b.book_name, b.book_description, b.book_photo, b.book_id FROM book b ORDER BY book_id DESC') as $row)
  {
    $desc = $row['book_description'];
    $photo = $row['book_photo'];
    $name = $row['book_name'];
    $bookID = $row['book_id'];
?>
  <div class="border keyList">
    <div class="jumbotron text-center">
      <h1><?php echo $name; ?></h1>
    </div>
    <div>
      <img class="img-thumbnail mx-auto d-block img-fluid" src="<?php echo $photo; ?>">
    </div>
    <div>
      <h4><?php echo $desc; ?></h4> 
    </div>    
    <div>
        <a href="editBook.php?book_id=<?php echo $bookID; ?>"><input type="submit" name="Edit Book" value="Edit Book" class="btn btn-warning btn-sm"></a>
        <input onclick="promptBook()" type="button" name="Remove Book" value="Remove Book" class="btn btn-danger btn-sm">
    </div>
  </div>
<?php
  }
?>
<h2>Movies</h2>
<?php
  foreach ($db->query('SELECT m.movie_name, m.movie_description, m.movie_photo, m.movie_id FROM movie m ORDER BY movie_id DESC') as $row)
  {
    $desc = $row['movie_description'];
    $photo = $row['movie_photo'];
    $name = $row['movie_name'];
    $movieID = $row['movie_id'];
?>
  <div class="border keyList">
    <div class="jumbotron text-center">
      <h1><?php echo $name; ?></h1>
    </div>
    <div>
      <img class="img-thumbnail mx-auto d-block img-fluid" src="<?php echo $photo; ?>">
    </div>
    <div>
      <h4><?php echo $desc; ?></h4> 
    </div>
    <div>
        <a href="editMovie.php?movie_id=<?php echo $movieID; ?>"><input type="submit" name="Edit Movie" value="Edit Movie" class="btn btn-warning btn-sm"></a>
        <input onclick="promptMovie()" type="button" name="Remove Movie" value="Remove Movie" class="btn btn-danger btn-sm">
    </div>    
  </div>
<?php
  }
?>
<h2>Comics</h2>
<?php
  foreach ($db->query('SELECT c.comic_name, c.comic_description, c.comic_photo, c.comic_id FROM comic c ORDER BY comic_id DESC') as $row)
  {
    $desc = $row['comic_description'];
    $photo = $row['comic_photo'];
    $name = $row['comic_name'];
    $comicID = $row['comic_id'];
?>
  <div class="border keyList">
    <div class="jumbotron text-center">
      <h1><?php echo $name; ?></h1>
    </div>
    <div>
      <img class="img-thumbnail mx-auto d-block img-fluid" src="<?php echo $photo; ?>">
    </div>
    <div>
      <h4><?php echo $desc; ?></h4> 
    </div>   
    <div>
        <a href="editComic.phpcomic_id=<?php echo $comicID; ?>"><input type="submit" name="Edit Comic" value="Edit Comic" class="btn btn-warning btn-sm"></a>
        <input onclick="promptComic()" type="button" name="Remove Comic" value="Remove Comic" class="btn btn-danger btn-sm">
    </div>    
  </div>
<?php
  }
?>
<script type="text/javascript" src="promptDelete.js"></script>
</body>
</html>