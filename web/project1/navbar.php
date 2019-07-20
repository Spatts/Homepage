<?php
	$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
	<ul class="nav navbar-nav">
		<li class="nav-item">
			<a class="title nav-link" href="main.php">Watchlist</a>
		</li>
		<li class="nav-item">
			<a class="title nav-link" href="inputBook.php">Add New Book</a>
		</li>
		<li class="nav-item">
			<a class="title nav-link" href="inputMovie.php">Add New Movie </a>
		</li>
		<li class="nav-item">
			<a class="title nav-link" href="inputComic.php">Add New Comic</a>
		</li>
	</ul>
</nav>