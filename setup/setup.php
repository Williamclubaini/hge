
<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['action'])){
  if($_GET["action"] == "setup"){

  //Create database
  $sql = "CREATE DATABASE `hge`";
  $conn->query($sql);
  $conn = mysqli_connect("localhost","root","","hge");

  $sql= " CREATE TABLE `contact` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `message` varchar(50) NOT NULL,
    PRIMARY KEY(id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);

  $sql= "CREATE TABLE `products` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `img` varchar(50) NOT NULL,
    `pname` varchar(50) NOT NULL,
    `price` double(10,2) NOT NULL,
    `description` varchar(95) NOT NULL,
    `type` varchar(50) NOT NULL,
    PRIMARY KEY(id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);

  $sql= "INSERT INTO `products` (`id`, `img`, `pname`, `price`, `description`, `type`) VALUES
  (1, '15', 'Crossfit', 50000.00, 'Strong', 'latest'),
  (2, '17', 'Punching Bag', 30000.00, 'Strong', 'latest'),
  (3, '16', 'Mat', 70.00, 'Good', 'latest')";
  $conn->query($sql);


  $sql= "CREATE TABLE `users` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `fname` varchar(50) NOT NULL,
    `lname` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    PRIMARY KEY(id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
  $conn->query($sql);

  $sql= "CREATE TABLE `loginattempts` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `attempt` int(4) NOT NULL,
      PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";


 



if ($conn->query($sql)) {
    header("location:../index.php");
} else {
    echo "Ooops something went wrong...";
}
}
}

?>

<a type="button" href="setup.php?action=setup" class="btn btn-primary btn-lg px-4 me-sm-3">CREATE DATABASE</a>