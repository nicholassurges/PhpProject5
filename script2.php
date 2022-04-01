<?php
 
include 'db/connect.php';
include 'db/books.php';
include 'header.php';
// sql statement to select books
$sql = "SELECT * FROM books_sc1.books";

// execute query
$qry = $conn->query($sql);
?>

<h1>Books Shop</h1>
<h2>All Books</h2>
<?php

// create table rows for each row
echo "<table border=1><thead><th>ISBN</th><th>Author</th><th>Title</th><th>Price</th></thead>\n";
while($result = mysqli_fetch_array($qry, true))	
{
	$book = new Books();
    $book->populate($result);
    $book->printAsRow();
}
echo "</table>\n";

// close database connection

include 'footer.php';
?>