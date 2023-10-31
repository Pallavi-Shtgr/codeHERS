 <?php

$servername="localhost";
$username="root";
$password="";
$database="codehers";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){

echo '<div class="alert alert-warning" role="alert">
A simple success alert—check it out!
</div>';
    die("sorry failed to connect".mysqli_connect_error());
}
?>
  
  
