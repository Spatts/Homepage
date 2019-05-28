<?php
	session_start();
	$key0 = $_SESSION['inCart0'];
	$key1 = $_SESSION['inCart1'];
    $key2 = $_SESSION['inCart2'];
    $key3 = $_SESSION['inCart3'];
	$key4 = $_SESSION['inCart4'];
	$key5 = $_SESSION['inCart5'];
	if(!ctype_digit($key0)){
		$key0 = 0;
	}
	if(!ctype_digit($key1)){
		$key1 = 0;
	}
	if(!ctype_digit($key2)){
		$key2 = 0;
    }
    if(!ctype_digit($key3)){
        $key3 = 0;
    }
    if(!ctype_digit($key4)){
        $key4 = 0;
    }
    if(!ctype_digit($key5)){
        $key5 = 0;
    }
    $books = array("Black Prism", "Dawn of Wonder", "Hell Divers",
        "Promise of Blood", "The Shadow of What Was Lost", "Way of Kings");
    $prices = array(40, 40, 40, 40, 40, 40);
    $pics = array("blackprism.jpg", "dawnofwonder.jpg", "helldivers.jpg",
        "powdermage.jpg", "shadowofwhatwaslost.jpg", "wayofkings.jpg");
        $total = ($key0 * $prices[0]) + ($key1 * $prices[1])
                 + ($key2 * $prices[2]) + ($key3 * $prices[3]) + ($key4 * $prices[4]) + ($key5 * $prices[5]);
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $address = $_SESSION['address'];
        $city = $_SESSION['city'];
        $state = $_SESSION['state'];
        $zip = $_SESSION['zip'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Buy</title>
    <link rel="stylesheet" href="week3.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">  
</head>
<body>
<div class="jumbotron">
        <h1 class="text-center display-1">Book Buy</h1>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="items.php">Items</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="checkout.php">Checkout</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="confirm.php">Confirmation</a>
            </li>
        </ul>
    </nav>

    <p class="text-center display-1">Thank You! <?php echo $name; ?></p> 
<br>
<p class="text-center display-2">It will be shipped to <?php echo $address; ?>, <?php echo $city; ?>, <?php echo $state; ?> <?php echo $zip; ?></p>
<br>
<p class="text-center display-4">Check your email for shipping updates.</p>
<br>
<p class="text-center display-4">It usually takes about 3 days to ship</p>

</body>
</html>