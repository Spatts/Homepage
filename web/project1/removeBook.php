<?php
    $bookID = $_GET['book_id'];
    require('dbConnect.php');
    $db = get_db();
    $stmt = $db->prepare("DELETE FROM book WHERE book_id=$bookID;");
    $stmt->execute();
    header("Location: frontpage.php");
    die();
?>