<?php
    require "dbConnect.php";
    $db = get_db();
    $bookID = htmlspecialchars($_GET['book_id']);
    $descK = htmlspecialchars($_POST['desc']);
    $photo = htmlspecialchars($_POST['photo']);
    $name = htmlspecialchars($_POST['bookName']);
   
    if(!isset($descK) || $descK==null)
    {
        $stmt = $db->prepare('SELECT book.book_description FROM book WHERE book_id=:id');
        $stmt->bindValue(':id', $bookID, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $descK = $row['book_description'];
    }
    if(!isset($photo) || $photo==null)
    {
        $stmt = $db->prepare('SELECT book.book_photo FROM book WHERE book_id=:id');
        $stmt->bindValue(':id', $bookID, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $photo = $row['book_photo'];
    }
    if(!isset($name) || $name==null)
    {
        $stmt = $db->prepare('SELECT book.book_name FROM book WHERE book_id=:id');
        $stmt->bindValue(':id', $bookID, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        $name = $row['book_name'];
    }
    $stmt = $db->prepare("UPDATE book
                          SET descriptionK=:descK, photo=:photo, book_name=:bookName
                          WHERE book_id=$bookID;");
    $stmt->bindValue(':descK', $descK, PDO::PARAM_STR);
    $stmt->bindValue(':photo', $photo, PDO::PARAM_STR);
    $stmt->bindValue(':bookName', $name, PDO::PARAM_STR);
    $stmt->execute();
    header("Location: homepage.php?username=$user");
    die();
?>