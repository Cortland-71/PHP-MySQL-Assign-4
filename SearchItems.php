<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Search</title>
</head>
<body>
	<div class="header">
		<h1>Search for Items</h1>
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

	<h4>Search Entry</h4>
	<h6>Enter Asset Number, Owner, Asset, Category, Make, Model, Description, Serial Number, Date, Cost or Warranty</h6>
	<form action="ListInventoryItems.php" method="POST">
		<input type='text' name='search'>
		<input type="submit">
	</form>
	


</body>
</html>