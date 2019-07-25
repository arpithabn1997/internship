<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
		#container{
				max-width:600px;
				padding: 20px;
				box-shadow: 1px 1px 6px 6px #ccc;
				margin: auto;


		}


</style>
	<title></title>
</head>
<body>
    <div id="container">
        <?php
        if(isset($_GET['message'])){
            $message = $_GET['message'];
            ?>
            <div class="alert alert-danger">
                <?php echo $message;?>
            </div>


   <?php }


?>

    	<form action="verify.php" method="post">
    		
    		<div class="form-group">
    			<label for="email">email</label>
    			<input type="email" class="form-control" name="email" id="email" placeholder="enter your email">
    		</div>
    		<div class="form-group">
    			<label for="address">password</label>
    			<input type="password" class="form-control" name="password" id="password" placeholder="enter your password">
    		</div>
    		
    			

            <input type="submit" name="submit" class="btn-btn-primary" value="register">
</form>
    </div>


</body>
</html>