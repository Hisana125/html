<html>
<head>
<title>Factorial of a Number</title>
</head>
<body>
<h2>Find Factorial of a Number</h2>
<form method="post" action="">
<label>Enter a number:</label>
<input type="text" name="num" min="0" required>
<input type="submit" value="Find Factorial">
</form>
<?php
if (isset($_POST['num'])){
$num=$_POST['num'];
$fact=1;
for($i=1;$i<=$num;$i++){
$fact=$fact*$i;
}
echo "<h3>Factorial of $num is: <span style='color:green;'>$fact</span></h3>";
}
?>
</body>
</html>

