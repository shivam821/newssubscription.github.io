<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];;
$email = $_POST['email'];

$sql = "INSERT INTO tbluser (Firstname,Email) VALUES ('$fname','$email')";
$result = mysqli_query($conn, $sql);
if($result)
{
	echo '<script type="text/javascript">'; 
	echo 'alert("You have subscribed");'; 
	echo 'window.location.href = "index.php";';
	echo '</script>';
}
else
{
	echo "<script>alert('Failed to subscribed')</script>";
}
?>