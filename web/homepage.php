<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
    <div class="jumbotron text-center">
        <h1>White Ranger</h1>
    </div>
    <img src="whiteranger.jpg" alt="white ranger">

    <br>
    <footer>
        <?php 
            date_default_timezone_set('America/Denver');
            echo date("l jS \of F Y h:i:s A") . "<br>";
        ?>
    </footer>
</body>
</html>