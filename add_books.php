<?php
	session_start();
	
    include('action/db.php');
	include('shared/header.php');
    
        if(!isset($_SESSION["type"])){
    header('Location: http://localhost/Library/admin_login.php');
    }
    
    $category_sql = "SELECT name, categoryID FROM category";
    
    $cat_result =$conn ->query($category_sql);
    
    $books_sql = "SELECT booksName, authorName,booksPrice FROM books";
    
    $books_result =$conn ->query($books_sql); 
?>

<!-- =========================Banner=================== -->
	<section class="banner-section fix">
		<div class="banner_item3 fix">
			<p class="animated wow slideInLeft">LIBRARIA</p>
			<h2 class="animated wow slideInRight">Add Books</h2>
			<a href="">SEE MORE</a>
		</div>
	</section>
	
<section class="add_books_back fix">
	<div class="add_books main fix">
		<form action="action/add_books.php" method="post" enctype="multipart/form-data">
			<select name="categoryID">		
				<option value="">Category Name</option>
			<?php
				if($cat_result->num_rows > 0){
				   while($row = $cat_result->fetch_assoc()){
	       
				echo '<option value="'.$row['categoryID'].'">'.$row['name'].'</option>';
				}
				}
				?> 
			</select>
			<input type="text" placeholder="Add Title" name="addTitle"/>
			<textarea placeholder="Description" name="description"></textarea>
			<input type="text" placeholder="price" name="price"/>
			<input type="number" placeholder="Books quantity" name="booksQty" />
			<input type="file" name="fileToUpload" id="fileToUpload">
			 <input type="submit" value="Add Books"/>
		</form>
	</div>
</section>
		
<?php
	include('shared/footer.php');
?>