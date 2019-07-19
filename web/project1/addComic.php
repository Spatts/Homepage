<?php
    require "dbConnect.php";
    $db = get_db();
    $descK = htmlspecialchars($_POST['description']);
    $photo = htmlspecialchars($_POST['photo']);
    $name = htmlspecialchars($_POST['comicName']);
    $stmt = $db->prepare('INSERT INTO comic( comic_name, comic_description, comic_photo) VALUES (:comicName, 
    :descK, :photo);');
    $stmt->bindValue(':descK', $descK, PDO::PARAM_STR);
    $stmt->bindValue(':photo', $photo, PDO::PARAM_STR);
    $stmt->bindValue(':comicName', $name, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: frontpage.php");
    die();
?>