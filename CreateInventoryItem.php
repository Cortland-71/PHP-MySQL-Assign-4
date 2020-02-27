

<!DOCTYPE html>
<html>
<head>
	<?php 
		include("handler.php");
		$handler = new Handler();
	?>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Test</title>
</head>
<body>
	<div class="header">
		<h1>Create Inventory Item</h1>
		<h6>Cortland Carrillo PHP and MySQL</h6>
	</div>

	<style >

		.submitButton {
			background-color: cyan;
			border: none;
			color: black;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			transition-duration: 0.3s;
		}
		.submitButton:hover {
			background-color: #4CAF50;
			color: white;
		}

		.buttons {
			background-color: black;
			border: none;
			color: gray;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			transition-duration: 0.3s;
		}

		.buttons:hover {
			background-color: #4CAF50;
			color: white;
		}
	</style>

	<div class="bar">
		<a href="index.php" class="buttons">Home</a>
	</div>

	<form action="SubmitDataToDataBase.php" method="POST">

		<h4>Asset No</h4>
		<input type='text' name='assetNo'>

		<h4>Owner</h4>
		<input type='text' name='owner'>

		<h4>Asset</h4>
		<input type='text' name='asset'>

		<h4>Category</h4>
		<input type='text' name='category'>

		<h4>Make</h4>
		<input type='text' name='make'>

		<h4>Model</h4>
		<input type='text' name='model'>

		<h4>Description</h4>
		<input type='text' name='description'>

		<h4>Serial No</h4>
		<input type='text' name='serialNo'>

		<h4>Acquired</h4>
		<input type='date' name='acquired'>

		<h4>Cost</h4>
		<input type='decimal' name='cost'>

		<h4>Warranty</h4>
		<input type='number' name='warranty'>

		<div>
			<input type="submit">
		</div>
	</form>

	
</body>
</html>