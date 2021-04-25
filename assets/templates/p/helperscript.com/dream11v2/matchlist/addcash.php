<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS dream";
if ($conn->query($sql) === TRUE) {
  echo 'Loading';
} else {
  echo 'Error' . $conn->error;
  echo '<meta http-equiv="refresh" content="1; url =" index.php?>';

  }

$conn->close();

session_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dream"; // Database name 
$tbl_name="clients"; // Table name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect"); 

$phone=$_SESSION['phone'];

$email=$_SESSION['email'];
$name=$_SESSION['name'];
$password=$_SESSION['password'];
$am=$_REQUEST['add_balance'];

$balance=$_SESSION['balance']+$am;

// echo $balance,$phone,$password,$name;


$sql = "DELETE FROM client 
		where phone=$phone and name=$name;"; 

$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
echo $errorr;
$sql = "INSERT INTO client(phone,name,email,balance,password) VALUES ('$phone','$name','$email','$balance','$password'); ";  

$result = mysqli_query($conn, $sql);

$errorr=mysqli_error($conn);
if ($errorr )
{
	if ($errorr) 
    {
		# code...
		echo $errorr;
        echo 'Something Went Wrong!!';
        echo '</Processing><meta http-equiv="refresh" content="2; url = ./wallet.php" ?>'; 
	}

}
else
 {
    $_SESSION['balance']=$balance;
 echo '<br><h1 style="color:green">SUCCESS</h1><meta http-equiv="refresh" content="2; url = ./wallet.php" ?>';

}

  






?>