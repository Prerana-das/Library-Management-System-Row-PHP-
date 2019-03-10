<?php 

	include('action/db.php');
	include('shared/sideber.php');
	
	$sql = "SELECT * FROM addbooks INNER JOIN orderbooks on addbooks.addID=orderbooks.addID";
	$result= $conn->query($sql);
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div class="orderList">
		<h1 style="margin-bottom:20px;">Order List</h1>
			<div>
				<table style="width:700px;margin-bottom:20px;">
					<thead>
						<tr>
							<th style="text-align: left;width:100px;">#</th>
							<th style="text-align: left;width:150px;">Date</th>
							<th style="text-align: left;width:150px;">Name</th>
						</tr>
					</thead>
					<tbody>
					<?php
								 if ($result->num_rows > 0) {
									 $i = 1;
									while($row = $result->fetch_assoc()) {
							 ?>
						<tr>
                            <td><?= $i ?></td>
                            <td><?= date("d/m/Y", strtotime($row['doc'])) ?></td>
                            <td><?= $row['addTitle'] ?></td>
						</tr>
					<?php
						$i++;
						}
                    }
					?>
				</tbody>
			</table>
		</div>
	</div>
	</body>
</html>