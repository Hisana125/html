<html>
<head>
<title>Employee Details Entry</title>
<style>
body{
font-family:Arial;
background-color:#f3f4f6;
}
h2{
color:#333;
}
form{
background:#fff;
padding:15px;
border-radius:8px;
width:400px;
box-shadow:0px 0px 10px rgba(0,0,0,0.2);
}
table{
border-collapse:collapse;
width:80%;
margin-top:25px;
}
th,td{
border:1px solid #555;
padding:10px;
text-align:center;
}
th{
background-color:#ddd;
}
</style>
</head>
<body>
<center>
<h2>Enter Employee Details</h2>
<form method="POST" action="">
<label>Name:</label><br>
<input type="text" name="name" required><br><br>
<label>Email:</label><br>
<input type="email" name="email" required><br><br>
<label>Gender:</label><br>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female" required> Female<br><br>
<label>Department:</label><br>
<input type="text" name="department" required><br><br>
<label>Salary:</label><br>
<input type="number" step="0.01" name="salary" required><br><br>
<input type="submit" name="submit" value="Add Employee">
</form>
<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "companydb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("<br>Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$department=$_POST['department'];
$salary=$_POST['salary'];
$sql="INSERT INTO employees (name, email, gender, department, salary)
            VALUES ('$name', '$email', '$gender', '$department', '$salary')";
if($conn->query($sql) === TRUE){
echo "<p style='color:green;'>New Employee Added Successfully!</p>";
}else{
echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
}
}
$result = $conn->query("SELECT * FROM employees");
if ($result->num_rows > 0) {
echo "<h2>Employee Details</h2>";
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Gender</th><th>Department</th><th>Salary</th></tr>";
while($row = $result->fetch_assoc()){
echo "<tr>
<td>{$row['id']}</td>
<td>{$row['name']}</td>
<td>{$row['email']}</td>
<td>{$row['gender']}</td>
<td>{$row['department']}</td>
<td>{$row['salary']}</td>
</tr>";
}
echo "</table>";
}else{
echo "<p>No employee records found.</p>";
}
$conn->close();
?>
</center>
</body>
</html>

