<?php
    require "dbConnect.php";
    $db = get_db();
    $movieID = htmlspecialchars($_GET['movie_id']);
    $descK = htmlspecialchars($_POST['desc']);
    $photo = htmlspecialchars($_POST['photo']);
    $name = htmlspecialchars($_POST['movieName']);
   
    if(!isset($descK) || $descK==null)
    {
        $stmt = $db->prepare('SELECT movie.movie_description FROM movie WHERE movie_id=:id');
        $stmt->bindValue(':id', $movieID, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $descK = $row['movie_description'];
    }
    if(!isset($photo) || $photo==null)
    {
        $stmt = $db->prepare('SELECT movie.movie_photo FROM movie WHERE movie_id=:id');
        $stmt->bindValue(':id', $movieID, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $photo = $row['movie_photo'];
    }
    if(!isset($name) || $name==null)
    {
        $stmt = $db->prepare('SELECT movie.movie_name FROM movie WHERE movie_id=:id');
        $stmt->bindValue(':id', $movieID, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $name = $row['movie_name'];
    }
    $stmt = $db->prepare("UPDATE movie
                          SET descriptionK=:descK, photo=:photo, movie_name=:movieName
                          WHERE movie_id=$movieID;");
    $stmt->bindValue(':descK', $descK, PDO::PARAM_STR);
    $stmt->bindValue(':photo', $photo, PDO::PARAM_STR);
    $stmt->bindValue(':movieName', $name, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: homepage.php?username=$user");
    die();
?>