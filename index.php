

<!DOCTYPE html>
<html>
<head>
	<?php 
		include("handler.php"); 
		$handler = new Handler();
	?>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Carrillo Assign 4</title>
</head>
<body>

	<div class="header">
		<h1>Bids Project v4</h1>
		<h6>Cortland Carrillo PHP and MySQL</h6>
	</div>
	<style >
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
		<a href="CreateInventoryItem.php" class="buttons">Create Inventory Item</a>
		<a href="ListInventoryItems.php" class="buttons">List Inventory Items</a>
		<a href="SearchItems.php" class="buttons">Search For An Item</a>
	</div>

	<div>
		<table class="dataTable">
		<?php $handler->getDisplay()->displayAllData(); ?>
		</table>
	</div>

	
</body>
</html>