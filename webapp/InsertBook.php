<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
		$ISBN = $_POST['ISBN'];
		$title = $_POST['title'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$year_published = $_POST['year_published'];
		$copies = $_POST['copies'];
		$price = $_POST['price'];
		$book_format = $_POST['book_format'];
		$keywords = $_POST['keywords'];
		$subject = $_POST['subject'];
		
		//Creating an sql query
		$sql = "INSERT INTO employee (ISBN,title,author,publisher,year_published,copies,price,book_format,keywords,subject) 
		VALUES ('$ISBN','$title','$author','$publisher', '$year_published','$copies', '$price', '$book_format', '$keywords', '$subject')";
		
		//Importing our db connection script
		require_once('init.php');
		
		//Executing query to database
		if(mysqli_query($con,$sql)){
			echo 'Book Added Successfully';
		}else{
			echo 'Could Not Add Book';
		}
		
		//Closing the database 
		mysqli_close($con);
	}