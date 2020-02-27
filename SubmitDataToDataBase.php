<?php 
	$assetNo = $_POST['assetNo'];
	$owner = $_POST['owner'];
	$asset = $_POST['asset'];
	$category = $_POST['category'];
	$make = $_POST['make'];
	$model = $_POST['model'];
	$description = $_POST['description'];
	$serialNo = $_POST['serialNo'];
	$acquired = $_POST['acquired'];
	$cost = $_POST['cost'];
	$warranty = $_POST['warranty'];

	$user = 'root';
	$pass = '';
	$db = 'tcauctions';

	$conn = mysqli_connect('localhost', $user, $pass, $db);
	if($conn) {echo 'Connection succeeded';} else {echo 'Connection failed';}

	$query = "INSERT INTO binventory VALUES ('$assetNo', '$owner', '$asset', '$category', '$make', '$model', '$description', '$serialNo', '$acquired', '$cost','$warranty')";

	$result = mysqli_query($conn, $query);

	if($result) {
		echo 'Data stored';
	} else {
		echo 'nope';
		printf("error: %s\n", mysqli_error($conn));
	}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Submited</title>
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
		<a href="index.php" class="buttons">Home</a>
	</div>
</body>
</html>
