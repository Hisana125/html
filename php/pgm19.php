<html>
<head>
<title>Book Details Entry</title>
</head>
<body>
<h2>Enter Book Information</h2>
<form method="post" action="">
<label>Book Number:</label>
<input type="number" name="bookno" required><br><br>
<label>Title:</label>
<input type="text" name="title" required><br><br>
<label>Edition:</label>
<input type="text" name="edition" required><br><br>
<label>Publisher:</label>
<input type="text" name="publisher" required><br><br>
<input type="submit" name="submit" value="Add Book">
</form>
<hr>
<?php
$conn = new mysqli("localhost", "root", "", "library");
if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
$bookno=$_POST['bookno'];
$title=$_POST['title'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];
$sql="INSERT INTO bookdetails (bookno, title, edition, publisher)
VALUES ('$bookno', '$title', '$edition', '$publisher')";
if($conn->query($sql) === TRUE){
echo "<p style='color:green;'>Book added successfully!</p>";
}else{
echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
}
}
$result = $conn->query("SELECT * FROM bookdetails");
if ($result->num_rows > 0){
echo "<h2>Book Details</h2>";
echo "<table border='1' cellpadding='8'>
<tr style='background-color:#f2f2f2;'>
<th>Book Number</th>
<th>Title</th>
<th>Edition</th>
<th>Publisher</th>
</tr>";
while($row=$result->fetch_assoc()){
echo "<tr>
<td>{$row['bookno']}</td>
<td>{$row['title']}</td>
<td>{$row['edition']}</td>
<td>{$row['publisher']}</td>
</tr>";
}
echo "</table>";
}else{
echo "<p>No books found in the database.</p>";
}
$conn->close();
?>
</body>
</html>

