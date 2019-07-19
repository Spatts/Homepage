<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Add Comic</title>
</head>
<body>
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-lg-12 centered-form">
        	    <div class="panel panel-default">
        	        <div class="panel-heading">
		                <h3 class="panel-title">Add Comic</h3>
		            </div>
			        <div class="panel-body">
			            <form method="POST" action="addComic.php">
                            <div class="form-group">
                                <input type="text" name="comicName" id="comicName" class="form-control input-sm" placeholder="Comic Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="desc" id="desc" class="form-control input-sm" placeholder="Description" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="photo" id="photo" class="form-control input-sm" placeholder="Photo URL" required>
                            </div>
                            <input type="submit" name="Add" value="Add" class="btn btn-info btn-block">
			    	    </form>
			        </div>
	    	    </div>
    	    </div>
    	</div>
    </div>
</body>
</html>