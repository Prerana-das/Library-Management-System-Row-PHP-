<?php 

	include('action/db.php');
	include('shared/sideber.php');
	
	$sql = "SELECT * FROM category";
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
	<div class="category">
	<h1 style="margin-bottom:20px;">Select a Catagory</h1>
		<a href="add_category.php">Add a New Category</a>
		<div>
			<table style="width:700px;margin-bottom:20px;">
				<thead>
					<tr>
						<th style="text-align: left;width:100px;">#</th>
						<th style="text-align: left;width:150px;">Date</th>
						<th style="text-align: left;width:150px;">Category Name</th>
						 <th style="text-align: left;width:150px;">Edit</th>
						<th style="text-align: left;width:150px;">Delete</th>
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
                            <td><?= $row['name'] ?></td>
                            <td><a href="edit_category.php?id=<?= $row['categoryID'] ?>" class="edit_btn">Edit</a></td>
                            <td><a href="delete_category.php?id=<?= $row['categoryID'] ?>" class="delete_btn">Delete</a></td>
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
