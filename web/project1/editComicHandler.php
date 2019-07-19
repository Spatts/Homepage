<?php
    require "dbConnect.php";
    $db = get_db();
    $comicID = htmlspecialchars($_GET['comic_id']);
    $descK = htmlspecialchars($_POST['desc']);
    $photo = htmlspecialchars($_POST['photo']);
    $name = htmlspecialchars($_POST['comicName']);
   
    if(!isset($descK) || $descK==null)
    {
        $stmt = $db->prepare('SELECT comic.comic_description FROM comic WHERE comic_id=:id');
        $stmt->bindValue(':id', $comicID, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $descK = $row['comic_description'];
    }
    if(!isset($photo) || $photo==null)
    {
        $stmt = $db->prepare('SELECT comic.comic_photo FROM comic WHERE comic_id=:id');
        $stmt->bindValue(':id', $comicID, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $photo = $row['comic_photo'];
    }
    if(!isset($name) || $name==null)
    {
        $stmt = $db->prepare('SELECT comic.comic_name FROM comic WHERE comic_id=:id');
        $stmt->bindValue(':id', $comicID, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $name = $row['comic_name'];
    }
    $stmt = $db->prepare("UPDATE comic
                          SET descriptionK=:descK, photo=:photo, comic_name=:comicName
                          WHERE comic_id=$comicID;");
    $stmt->bindValue(':descK', $descK, PDO::PARAM_STR);
    $stmt->bindValue(':photo', $photo, PDO::PARAM_STR);
    $stmt->bindValue(':comicName', $name, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: homepage.php?username=$user");
    die();
?>