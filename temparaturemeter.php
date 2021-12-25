<!DOCTYPE html>
<html>
<head>
         <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Digibyte-- Temparature Producer</title>
        <meta name="description" content="Temparature Producer Website<">
        <meta name="keywords" content="HTML, CSS, JavaScript,JQUERY,PHP">
        <meta name="author" content="Rahat Ahmed">
        <!-- Mobile Specific Metas
         Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
		.block {
    position: absolute;color:#123;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background: #ddd;
    padding: 100px;
}

input[type="text"] {
    display: block;
    padding: 5px;
    margin: 12px;
}

.button {
    display: block;
    margin: 12px;
    padding: 12px;
    background: aqua;
    border-radius: 12px;
}
	</style>
</head>
<body>

	<div class="temp">
		
		  <div class="block">
		  <form action="" method="POST">
		     <input type="text" name="number" placeholder="Enter Your mind">

		  	 cel 
		  	 <input type="radio" name="hasan">

		  	 faren

		  	 <input type="radio" name="hasan">

		  	 <input class="button" type="submit" name="submit">
		  </form>
		  	  <p>
		  	<?php
               if (isset($_POST['submit'])) {
               	$number      = $_POST['number'];
               	$Temparature = $_POST['hasan'];

               	if ($Temparature == "number") {
               		$result = $number * 9 / 5 + 32;
               		echo "The conversion value of cel in faren is " .$result;
               	}else{
               		$result = ($number - 32 ) * 5 / 9;
               		echo "The conversion value of faren in cel is " .$result;

               	}
               }
		  	?>
		  </p>
		  </div>

	
	</div>

</body>
</html>