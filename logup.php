
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Management System</title>
</head>
	 <link rel="stylesheet" type="text/css" href="./Lcss.css">
<link rel="stylesheet" type="text/css" href="./../css/Lcss.css">
<!-- <meta http-equiv="refresh" content="1; url =" ?> -->

<body style="text-decoration-color: white;color:black;text-align: center; text-align: justify-all; ">

<body onLoad="javascrip:move()" action="done">

    <div class="container">
<br><br><br>
        <div class="progress" id="myProgress">
            <div id="myBar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">

            </div>
        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html>
<style>
    #myProgress {
        width: 100%;
        background-color: #ddd;
    }
    
    #myBar {
        width: 1%;
        height: 30px;
        background-color: #4CAF50;
    }
</style>




<script>
    var i = 0;

    function move() {
        if (i == 0) {
            i = 1;
            var elem = document.getElementById("myBar");
            var width = 1;
            var id = setInterval(frame, 10);

            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    i = 0;
                } else {
                    width++;
                    elem.style.width = width + "%";
                }
            }
        }
    }
</script>

</body>
<style type="text/css">
 label{
 	color: white;

 	display:inline-block;width:200px;margin-bottom:20px;
 }
body{
  background-image: url('');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

table{
border: 10px solid;
opacity: 70%;
background: black;
text-decoration-color: black;
color: black;
}
footer {
  height: 2px;

  background-color: green; 
}
footer.ins {
  height: 2px;

  background-color: green; 
}


</style><h2>

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

// echo $_REQUEST['name'];
$user=$_REQUEST['name'];

$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$password=$_REQUEST['psw'];

$_SESSION['name']=$user;

$sql = "CREATE TABLE IF NOT EXISTS client(
	name varchar(50) ,
	email varchar(50),
	phone varchar(13) ,
	password varchar(50),
  balance int not null default 100,
	primary key(phone)
	);"; 

$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
if ($errorr){
	echo $errorr;
	$conn.die();
	}

$sql = "insert into client(name,phone,email,password) values('$user','$phone','$email','$password');";  
$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
$conn->close();

echo '<br>YOUR REGISTRATION IS COMPLETED...<meta http-equiv="refresh" content="2; url = index.php" ?>';

?>


</html>