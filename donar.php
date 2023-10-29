<?php
include 'conn.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $blood=$_POST['blood'];
    $place=$_POST['place'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    

$sql="INSERT INTO `donars` ( `name`, `age`, `blood`, `place`, `city`, `phone`) 
VALUES ('$name', '$age', '$blood', '$place', '$city', '$phone')";
 $result=mysqli_query($conn,$sql);
}
 else
 {
 echo($result);
 echo  mysqli_error($conn);
 }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blood Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
   body{
    background-image: url(first/images/blood2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
   }
    .nav {
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    display: flex;
    justify-content: space-between;
    padding: 10px;
    }

    .nav .head {
      color: rgb(206, 53, 53);
        font-size: 24px;
        font-weight: bold;
    }

    .nav .content {
        display: flex;
        gap: 20px;
        margin-right: 20px;
    }

    .nav .content a {
    text-decoration: none;
    color: #000;
    font-size: larger;
   }
    .container{
       position:absolute;
       width: 40%;
        padding: 20px;
        color: #000;
    }
    input{
        width: 50%;
    }
    label{
      color: rgba(148, 38, 38, 0.966);
    }
    .btn{
        background-color: rgb(155, 46, 46);
    }
    .content:hover{
      color:red;
    }
  </style>
  <body>

<div class="nav">
    <div class="head"><h1>RedDropConnect</h1></div>
    <div class="content">
        <a href="/Hackfest/group.html">Blood Info</a>
    </div>
</div>
<div class ="container">
<?php
if($result){ 
  echo '<div class="container1" >
  <div class="alert alert-success" role="alert">
A simple success alert—check it out!
</div>';
 }
 ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input name="age" type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Blood group</label>
    <input name="blood" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Place</label>
    <input name="place" type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">City</label>
    <input name="city" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contact</label>
    <input name="phone" type="text" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>