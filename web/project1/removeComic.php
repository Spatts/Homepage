<?php
    $comicID = $_GET['comic_id'];
    require('dbConnect.php');
    $db = get_db();
    $stmt = $db->prepare("DELETE FROM comic WHERE comic_id=$comicID;");
    $stmt->execute();
    header("Location: frontpage.php");
    die();
?>