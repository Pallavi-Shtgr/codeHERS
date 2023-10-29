<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .navbars{
            color: rgb(160, 51, 51);
            margin: 20px;
        }
        .container{
            background-color: rgba(158, 46, 46, 0.925);
            padding :2rem;
            color: white;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .btn1{
            background-color: rgb(255, 255, 255);
            color: rgb(150, 47, 47);
        }
        .btn1:hover{
            background-color: rgb(136, 21, 21);
            color: white;
        }
        .footer {
            background-color:rgba(158, 46, 46, 0.925);
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<?php
    include 'conn.php';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $blood=$_POST['blood'];
        $city=$_POST['city'];
        $sql = "SELECT * FROM `donars` WHERE blood = '$blood' AND city='$city'";
    }
    else{
        $sql = "SELECT * FROM `donars` ";
    }
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    ?>
<body>
<nav class="navbars bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1>RedDropConnect</h1></a>
  </div>
</nav>

    <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Blood group:</label>
    <input name="blood" type="text" class="form-control" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Location</label>
    <input name="city" type="text" class="form-control" >
  </div>
  
  <button type="submit" class="btn1 btn-primary">Submit</button>
</form>
    </div>
    
   
    <div class="container">
        <table class="table">
            <thead>
                <tr class="heading">
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>Place</th>
                    <th>Phone No</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["blood"] . "</td>";
                        echo "<td>" . $row["place"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["city"] . "</td>";
                        // echo "<td>".'<button type="button" class="btn btn-info">Know More</button>'."</td>";                       
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <p>&copy; 2023 CodeHERS. All rights reserved.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
