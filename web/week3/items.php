<?php
    session_start();
    class Product {
        public function __construct($pic, $name, $price, $count) {
            $this->pic = $pic;
            $this->name = $name;
            $this->price = $price;
            $this->count = $count;
    }
}
$products = array();
$cartItems = array();
$books = array("Black Prism", "Dawn of Wonder", "Hell Divers",
                    "Promise of Blood", "The Shadow of What Was Lost", "Way of Kings");
$prices = array(44, 40, 25, 35, 38, 45);
$pics = array("blackprism.jpg", "dawnofwonder.jpg", "helldivers.jpg",
                    "powdermage.jpg", "shadowofwhatwaslost.jpg", "wayofkings.jpg");
$count = array(0,0,0,0,0,0);
$total = 0;
for($i = 0; $i <6; $i++){
    $oneBook = new Product($pics[$i], $books[$i], $prices[$i], $count[$i]);
    array_push($products, $oneBook);
}
$_SESSION["booksCart"] = $products;
if(isset($_POST['submit'])){
    $_SESSION['inCart0'] = htmlentities($_POST['inCart0']);
    $_SESSION['inCart1'] = htmlentities($_POST['inCart1']);
    $_SESSION['inCart2'] = htmlentities($_POST['inCart2']);
    $_SESSION['inCart3'] = htmlentities($_POST['inCart3']);
    $_SESSION['inCart4'] = htmlentities($_POST['inCart4']);
    $_SESSION['inCart5'] = htmlentities($_POST['inCart5']);
    header('Location: cart.php');
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
            <li class="nav-item active">
                <a class="nav-link" href="items.php">Items</a>
            </li>
            <li class="nav-item">
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
    
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <img class="mx-auto d-block" src="<?php echo $pics[0]; ?>" alt="book0">
        <h3 class="text-xl-center display-4"><?php echo $books[0]; ?></h3>
        <h3 class="text-center">$ <?php echo number_format($prices[0], 2); ?></h3>
            <div class="row justify-content-center">
                <input type="text" name="inCart0" placeholder="How many do you want?">
            </div>
        <br>
        <br>

        <img class="mx-auto d-block" src="<?php echo $pics[1]; ?>" alt="book1">
        <h3 class="text-xl-center display-4"><?php echo $books[1]; ?></h3>
        <h3 class="text-center">$ <?php echo number_format($prices[1], 2); ?></h3>
            <div class="row justify-content-center">
                <input type="text" name="inCart1" placeholder="How many do you want?">
            </div>
        <br>
        <br>

        <img class="mx-auto d-block" src="<?php echo $pics[2]; ?>" alt="book2">
        <h3 class="text-xl-center display-4"><?php echo $books[2]; ?></h3>
        <h3 class="text-center">$ <?php echo number_format($prices[2], 2); ?></h3>
            <div class="row justify-content-center">
                <input type="text" name="inCart2" placeholder="How many do you want?">
            </div>
        <br>
        <br>

        <img class="mx-auto d-block" src="<?php echo $pics[3]; ?>" alt="book3">
        <h3 class="text-xl-center display-4"><?php echo $books[3]; ?></h3>
        <h3 class="text-center">$ <?php echo number_format($prices[3], 2); ?></h3>
            <div class="row justify-content-center">
                <input type="text" name="inCart3" placeholder="How many do you want?">
            </div>
        <br>
        <br>

        <img class="mx-auto d-block" src="<?php echo $pics[4]; ?>" alt="book4">
        <h3 class="text-xl-center display-4"><?php echo $books[4]; ?></h3>
        <h3 class="text-center">$ <?php echo number_format($prices[4], 2); ?></h3>
            <div class="row justify-content-center">
                <input type="text" name="inCart4" placeholder="How many do you want?">
            </div>
        <br>
        <br>

        <img class="mx-auto d-block" src="<?php echo $pics[5]; ?>" alt="book5">
        <h3 class="text-xl-center display-4"><?php echo $books[5]; ?></h3>
        <h3 class="text-center">$ <?php echo number_format($prices[5], 2); ?></h3>
            <div class="row justify-content-center">
                <input type="text" name="inCart5" placeholder="How many do you want?">
            </div>
        <br>
        <br>

        <div class="row justify-content-center">
            <input type="submit" name="submit" class="btn btn-dark btn-lg" value="Proceed to View Cart">
        </div>
    </form>


</body>
</html>