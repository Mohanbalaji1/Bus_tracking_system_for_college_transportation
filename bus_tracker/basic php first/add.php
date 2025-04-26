<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "nandhudb");
if (isset($_POST['submit'])){
   $name = $_POST['name'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   if ( $phone) { // Validate mobile number (10 digits)
    $sql = "INSERT INTO student(name, address,phone) VALUES('$name', '$address', '$phone')";
       if (mysqli_query($connection, $sql)) {
             echo '<script>location.replace("index.php")</script>';
       } else {
             echo "Data not inserted: " . $connection->error;
       }
   } else {
       echo "Invalid mobile number. Please enter a valid 10-digit number.";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student crud application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h1>Student crud application</h1>
                </div>
                <div class="card-body">
                    <form class="add.php" method="post">
                        <div class="mb-3">
                            <label >Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                        </div>
                        <div class="mb-3">
                            <label >Address</label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="address">
                        </div>
                        <div class="mb-3">
                            <label >Mobile</label>
                            <input type="number" class="form-control" placeholder="Enter Mobile" name="phone">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                    </form>
                </div>
            </div>

        </div>
</body>

</html>