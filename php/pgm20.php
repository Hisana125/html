<html>
<head>
<title>Login Page</title>
</head>
<body>
<h2>Login Form</h2>
<form method="post" action="">
<label>Username:</label>
<input type="text" name="username" required><br><br>
<label>Password:</label>
<input type="password" name="password" required><br><br>
<input type="submit" name="login" value="Login">
</form>
<?php
$conn = new mysqli("localhost", "root", "", "userdb");
if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$result=$conn->query("SELECT * FROM users");
$userFound=false;
$passFound=false;
$matchFound=false;
while($row=$result->fetch_assoc()){
if($row['username']==$username && $row['password']==$password){
$matchFound=true;
break;
}elseif($row['username']==$username){
$userFound=true;
}elseif($row['password']==$password){
$passFound=true;
}
}
if($matchFound){
header("Location: welcome.php?user=$username");
exit();
}elseif($userFound){
echo "<p style='color:red;'>Incorrect password!</p>";
}elseif($passFound){
echo "<p style='color:red;'>Incorrect username!</p>";
}else{
echo "<p style='color:red;'>Invalid credentials!</p>";
}
}
$conn->close();
?>
</body>
</html>

