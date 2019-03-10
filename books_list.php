<?php 

	include('action/db.php');
	include('shared/sideber.php');
	
	$sql = "SELECT * FROM addbooks INNER JOIN category on category.categoryID=addbooks.categoryID";
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
		<div class="booksList">
		<h1 style="margin-bottom:20px;">Book List</h1>
			<div>
				<table style="width:700px;margin-bottom:20px;">
					<thead>
						<tr>
							<th style="text-align: left;width:100px;">#</th>
							<th style="text-align: left;width:150px;">Date</th>
							<th style="text-align: left;width:200px;">Name</th>
							<th style="text-align: left;width:250px;">Description</th>
							<th style="text-align: left;width:220px;">Category</th>
							<th style="text-align: left;width:150px;">Quantity</th>
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
                            <td><?= $row['addTitle'] ?></td>
                            <td><?= $row['description'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['booksQty'] ?></td>
							<td><a href="edit_books.php?id=<?= $row['addID'] ?>" class="edit_btn">Edit</a></td>
                            <td><a href="delete_books.php?id=<?= $row['addID'] ?>" class="delete_btn">Delete</a></td>
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