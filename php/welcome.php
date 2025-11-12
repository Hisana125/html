<html>
<head>
<title>Welcome</title>
</head>
<body>
<?php
if(isset($_GET['user'])){
$user=htmlspecialchars($_GET['user']);
echo "<h2>Welcome, $user!</h2>";
}else{
echo "<h2>Welcome, Guest!</h2>";
}
?>
</body>
</html>

