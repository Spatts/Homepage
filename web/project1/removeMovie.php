<?php
    $movieID = $_GET['movie_id'];
    require('dbConnect.php');
    $db = get_db();
    $stmt = $db->prepare("DELETE FROM movie WHERE movie_id=$movieID;");
    $stmt->execute();
    header("Location: frontpage.php");
    die();
?>