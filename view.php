<?php
	session_start();
	
	include('action/db.php');
	include('shared/header.php');
	$addID=$_GET['addID'];
	
	$sql = "SELECT * FROM addbooks INNER JOIN addimage on addbooks.addID = addimage.addID inner join category on 
	addbooks.categoryID=category.categoryID where  addbooks.addID=".$addID;
	
	
	$result = $conn->query($sql);
?>

	<section class="view_back fix">
		<div class="view main fix">
		<?php 
			if ($result) {
			while($row = $result->fetch_assoc()) {
			?>
				
					
			<div class='single_view'>
				<img src="img/<?= $row['imageName'] ?>" alt="<?= $row['addTitle'] ?>" />
				<h3>Book Name:<?= $row['addTitle'] ?></h3>
				<p>Price: $<?= $row['price'] ?></p>
			</div>
			
			<div class="book_des">
				<p>Reading helps you to become smarter and intelligent.Reading encourages us to think. Sometimes, we even start dreaming based on the content we read. In addition, reading gives us new perspectives, that the reader may not even have thought of itself! Thus, through reading, we get new ideas and inspiration, so that we ourselves may try something new or different, inspired the things we read.</p>
				<h4><span>Description</span><br/><?= $row['description'] ?></h4>
				<a href="#">Order Now</a>
			</div>


		 <?php
		
			}
			}
		?>
		</div>
	</section>
