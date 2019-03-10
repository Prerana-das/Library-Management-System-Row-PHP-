<?php
	session_start();
	include('action/db.php');
	include('shared/header.php');
	
	
	$sql = "SELECT * FROM addbooks INNER JOIN category on category.categoryID=addbooks.categoryID INNER JOIN addimage 
	on addimage.addID= addbooks.addID";
	
	$result = $conn->query($sql);

	
	//print_r($result);
?>

	
	<section class="books_back fix">
		<div class="new_books main fix">
		<?php 
			 if($result->num_rows > 0){
			// output data of each row
			while($row = $result->fetch_assoc()) {
			?>
			
			<div class='single_book'>
				<img src="img/<?= $row['imageName'] ?>" alt="<?= $row['addTitle'] ?>" />
				<h3><?= $row['addTitle'] ?></h3>
				<p>$<?= $row['price'] ?></p>
				<a href="view.php?addID=<?= $row['addID'] ?>">View</a>
			</div>
			
		 <?php
		
        }
     }
?>
		
		</div>
	</section>