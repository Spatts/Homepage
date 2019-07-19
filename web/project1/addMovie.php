<?php
    require "dbConnect.php";
    $db = get_db();
    $descK = htmlspecialchars($_POST['description']);
    $photo = htmlspecialchars($_POST['photo']);
    $name = htmlspecialchars($_POST['movieName']);
    $stmt = $db->prepare('INSERT INTO movie( movie_name, movie_description, movie_photo) VALUES (:movieName, 
    :descK, :photo);');
    $stmt->bindValue(':descK', $descK, PDO::PARAM_STR);
    $stmt->bindValue(':photo', $photo, PDO::PARAM_STR);
    $stmt->bindValue(':movieName', $name, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: frontpage.php");
    die();
?>