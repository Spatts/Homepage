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
    $nameERR = $emailERR = $addressERR = $cityERR = $stateERR = $zipERR = "";
    $name = $email = $address = $city = $state = $zip = "";
    
    if(isset($_POST['submit'])){
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);
        $_SESSION['address'] = htmlentities($_POST['address']);
        $_SESSION['city'] = htmlentities($_POST['city']);
        $_SESSION['state'] = htmlentities($_POST['state']);
        $_SESSION['zip'] = htmlentities($_POST['zip']);
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $address = $_SESSION['address'];
        $city =  $_SESSION['city'];
        $state = $_SESSION['state'];
        $zip =$_SESSION['zip'];
        if(empty($name)){
            $nameERR = "*Name is required.";
        }
        if(empty($email)){
            $emailERR = "*Email is required.";
        }
        if(empty($address)){
            $addressERR = "*Address is required.";
        }
        if(empty($city)){
            $cityERR = "*City is required.";
        }
        if(empty($state)){
            $stateERR = "*State is required.";
        }
        if(empty($zip)){
            $zipERR = "*Zip code is required.";
        }
        if(!empty($name) && !empty($email) && !empty($city) && !empty($state) && !empty($zip) && !empty($address)){
            header('Location: confirm.php');
        }
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
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="checkout.php">Checkout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="confirm.php">Confirmation</a>
            </li>
        </ul>
    </nav> 

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="row justify-content-center">
       <input type="text" name="name" placeholder="John Doe"><span class="text-danger"><?php echo $nameERR ?></span>
       <input type="text" name="email" placeholder="email@email.com"><span class="text-danger"><?php echo $emailERR ?></span>
       <input type="text" name="address" placeholder="123 Street"><span class="text-danger"><?php echo $addressERR ?></span>
       <input type="text" name="city" placeholder="Rexburg"><span class="text-danger"><?php echo $cityERR ?></span>
       <input type="text" name="state" placeholder="ID"><span class="text-danger"><?php echo $stateERR ?></span>
       <input type="text" name="zip" placeholder="83440"><span class="text-danger"><?php echo $zipERR ?></span>
       </div>
        <br>
        <br>
    <div class="row justify-content-center">
        <input type="submit" name="submit" class="btn btn-dark btn-lg" value="Complete Purchase">
    </div>
</form>

<div class="row justify-content-center">
    <a href="cart.php" class="btn btn-info btn-lg">Back to Cart</a>
</div>
</body>
</html>