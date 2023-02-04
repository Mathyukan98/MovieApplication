<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if(!isset($_COOKIE['loginuser']))
			echo "<p id=p>Please login your account</p>";
		else{
	?>
	<div id='d7'>
	<h2> Add Comment for <?php echo $_GET['add']; ?> </h2><hr>
	<div id='d5'>  <img src='coverimage/<?php echo $_GET['mp']; ?>' ></div>
	<div id='d6'>
		<form action="" method="POST">
			<textarea name='comment' rows="12" cols="55" style="border: 1px solid rgb(30,116,242)"></textarea>
			<button name='ac' style="border:none; padding: 6px; margin-top: 12%;">Add Comment</button>
		</form>
	</div>

</body>
</html>
<?php
	if(isset($_POST['ac']) & !empty($_POST['comment']) & isset($_COOKIE['loginuser']) ){
		//$d=strtotime("now");
		$q="insert into comment values('".$_GET['add']."','".$_COOKIE['loginuser']."','".date('d/m/y h:i:s a',time())."','".$_POST['comment']."')";
		$r=mysqli_query($conn,$q);

			if(!$r){
				echo "error".mysqli_error($conn);	
			}
			else{
				header('location: index.php');
			}
	}
}

?>

