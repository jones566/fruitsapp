<?php  
header('location:posts.php');
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'fruits');
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$s = "select * from fruitstable where name = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
	echo "Item already in list";
}
else{
	$ins = "insert into fruitstable(name, quantity, price) values('$name', '$quantity', '$price')";
	mysqli_query($con, $ins);
	echo "Item added successfully";
}
?>