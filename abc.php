<DOCTYPE! html>

<html>

<head>

<style>

#regform{

border: 5px outset black;

background-color: lightblue;

text-align: center;

width: 600;

height: 700;

margin:auto;

}

table,tr,td,th{

border: 1px solid black;

}

</style>
</head>
<body>
<div id="regform">

<h2> book store</h2>
<form name="bookForm" action="abc.php" method="post">
<label for="id">book id:</label>
<input type="text" id="id" name="id" > <br><br>
<label for="name">book name :</label>
<input type="text" id="name" name="name" ><br><br>
<label for="author">book author:</label>
<input type="text" id="author" name="author" > <br><br>
<label for="price">book price:</label>
<input type="text" id="price" name="price" ><br><br>
<input type="submit" name="register" value="register"><br><br>
</form>

<h4>Search book Data</h4>
<form name="searchForm" action="abc.php" method="post">
<label for="tot">Author::</label>
<input type="text" name="author" id="author">
<input type="submit" name="search" value="Search"><br><br>
</form>




<?php
$conn= mysqli_connect("localhost","root","","db_books");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
if (isset($_POST['register'])){
$book_id = $_POST['id'];
$book_name = $_POST['name'];
$book_author = $_POST['author'];
$book_price = $_POST['price'];
echo " The values are: ".'<br>';
echo "book_id: ".$book_id.'<br>';
echo "book_name: ".$book_name.'<br>';
echo "book_author: ".$book_author.'<br>';
echo "book_price: ".$book_price.'<br>';
$sql1="insert into `tbl_books` (`book_id`, `book_name`, `book_author`, `book_price`) VALUES ('$book_id', '$book_name', '$book_author', '$book_price')";
// $sql1="INSERT INTO 'tbl_books' VALUES ('$book_id', '$book_name', '$book_author', '$book_price')";
if (mysqli_query($conn, $sql1)) {
echo "<br>New record created successfully";
} else {
echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
}
if (isset($_POST['search'])){
$book_author2= $_POST['author'];   
echo "book_author: ".$book_author2.'<br>';
$sql="SELECT * from tbl_books where book_author='$book_author2'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res)){
    echo $row["book_id"].'<br>';
    echo $row["book_name"].'<br>';
    echo $row["book_author"].'<br>';
    echo $row["book_price"].'<br>';
}
}
?>