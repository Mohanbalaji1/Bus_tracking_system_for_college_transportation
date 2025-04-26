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
                    <a href="add.php" class="btn btn-primary">Add details</a> <br/>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">s no</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead> 
                        <tbody>
                            <?php
                              $connection = mysqli_connect("localhost", "root", "");
                              $db = mysqli_select_db($connection, "nandhudb");
                              $sql = "SELECT * FROM student";
                              $run = mysqli_query($connection, $sql);

                              $id = 1;
                              while ($row = mysqli_fetch_array($run)) {
                                   $uid = $row['id'];
                                   $name = htmlspecialchars($row['name']); // Sanitize name
                                   $address = htmlspecialchars($row['address']); // Sanitize address
                                   $phone = htmlspecialchars($row['phone']); // Sanitize mobile number
                            ?>
                            <tr>
                                <td><?php echo $id?></td>
                                <td><?php echo $name?></td>
                                <td><?php echo $address?></td>
                                <td><?php echo $phone?></td>
                                <td>
                                <a href="edit.php?edit=<?php echo $uid?>" class="btn btn-success">Edit</a>
                                <a href="delete.php?del=<?php echo $uid?>" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                           
                              <?php $id++;  } ?>





                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>

</html>