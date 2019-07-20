<?php
    require "dbConnect.php";
    $db = get_db();
    $descK = htmlspecialchars($_POST['desc']);
    $photo = htmlspecialchars($_POST['photo']);
    $name = htmlspecialchars($_POST['bookName']);
    $stmt = $db->prepare('INSERT INTO book( book_name, book_description, book_photo) VALUES (:bookName, 
    :descK, :photo);');
    $stmt->bindValue(':descK', $descK, PDO::PARAM_STR);
    $stmt->bindValue(':photo', $photo, PDO::PARAM_STR);
    $stmt->bindValue(':bookName', $name, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: main.php");
    die();
?>