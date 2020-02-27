<?php 
	$user = 'root';
	$pass = '';
	$db = 'tcauctions';

	$conn = mysqli_connect('localhost', $user, $pass, $db);
	if(!$conn) {echo 'Connection failed';}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Test</title>
</head>
<body>
	<div class="header">
		<h1>List Inventory Items</h1>
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

	<?php 
		$sql = "SELECT * FROM binventory;";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		echo "<table class='dataTable'>
				<tr>
					<th class='data'>Asset No</th>
					<th class='data'>Owner</th>
					<th class='data'>Asset</th>
					<th class='data'>Category</th>
					<th class='data'>Make</th>
					<th class='data'>Model</th>
					<th class='data'>Description</th>
					<th class='data'>Serial No</th>
					<th class='data'>Acquired</th>
					<th class='data'>Cost</th>
					<th class='data'>Warranty</th>
				</tr>";
				
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td class='data'>".$row['AssetNo']."</td>";
				echo "<td class='data'>".$row['Owner']."</td>";
				echo "<td class='data'>".$row['Asset']."</td>";
				echo "<td class='data'>".$row['Category']."</td>";
				echo "<td class='data'>".$row['Make']."</td>";
				echo "<td class='data'>".$row['Model']."</td>";
				echo "<td class='data'>".$row['Description']."</td>";
				echo "<td class='data'>".$row['SerialNo']."</td>";
				echo "<td class='data'>".$row['Acquired']."</td>";
				echo "<td class='data'>".$row['Cost']."</td>";
				echo "<td class='data'>".$row['Warranty']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	?>

</body>
</html>