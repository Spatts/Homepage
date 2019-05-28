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
	$total = ($key0 * $prices[0]) + ($key1 * $prices[1]) + ($key2 * $prices[2]);
	
	if(isset($_POST['submit'])){
		$total = ($key0 * $prices[0]) + ($key1 * $prices[1]) + ($key2 * $prices[2]) + ($key3 * $prices[3]) + ($key4 * $prices[4]) + ($key5 * $prices[5]);
    	header('Location: checkout.php');
	}
					
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
            <li class="nav-item active">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="checkout.php">Checkout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="confirm.php">Confirmation</a>
            </li>
        </ul>
    </nav>

    <h3>Your Cart: </h3>
    <?php
        if($key0 != 0){
    ?>
	<img class="mx-auto d-block" src="<?php echo $pics[0]; ?>" alt="book0">
	<h3 class="text-xl-center display-4"><?php echo $key0; ?>x <?php echo $books[0]; ?> at $<?php echo number_format($prices[0] * $key0, 2); ?></h3>
    <?php
    }
    ?>

    <?php
        if($key1 != 0){
    ?>
	<img class="mx-auto d-block" src="<?php echo $pics[1]; ?>" alt="book1">
	<h3 class="text-xl-center display-4"><?php echo $key1; ?>x <?php echo $books[1]; ?> at $<?php echo number_format($prices[1] * $key1, 2); ?></h3>
    <?php
    }
    ?>

    <?php
        if($key2 != 0){
    ?>
	<img class="mx-auto d-block" src="<?php echo $pics[2]; ?>" alt="book2">
	<h3 class="text-xl-center display-4"><?php echo $key2; ?>x <?php echo $books[2]; ?> at $<?php echo number_format($prices[2] * $key2, 2); ?></h3>
    <?php
    }
    ?>

    <?php
        if($key3 != 0){
    ?>
	<img class="mx-auto d-block" src="<?php echo $pics[3]; ?>" alt="book3">
	<h3 class="text-xl-center display-4"><?php echo $key3; ?>x <?php echo $books[3]; ?> at $<?php echo number_format($prices[3] * $key3, 2); ?></h3>
    <?php
    }
    ?>

    <?php
        if($key4 != 0){
    ?>
	<img class="mx-auto d-block" src="<?php echo $pics[4]; ?>" alt="book4">
	<h3 class="text-xl-center display-4"><?php echo $key4; ?>x <?php echo $books[4]; ?> at $<?php echo number_format($prices[4] * $key4, 2); ?></h3>
    <?php
    }
    ?>
    <?php
        if($key5 != 0){
    ?>
	<img class="mx-auto d-block" src="<?php echo $pics[5]; ?>" alt="book5">
	<h3 class="text-xl-center display-4"><?php echo $key5; ?>x <?php echo $books[5]; ?> at $<?php echo number_format($prices[5] * $key5, 2); ?></h3>
    <?php
    }
    ?>

    <br>
    <h5 class="text-xl-center display-2">Your total: $<?php echo number_format($total, 2); ?></h5>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div class="row justify-content-center">
    	<input type="submit" name="submit" class="btn btn-dark btn-lg" value="Proceed to Checkout">
	</div>

</form>
    
</body>
</html>