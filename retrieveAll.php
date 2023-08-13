<?php

$con = mysqli_connect("localhost","root","","form");

if(!$con){
    die("Connection Error");
}


$query = "select * from data";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Information from Index</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div style="text-align:center;">
                        <h2 style="color:#825e4a;">Retrieved Information</h2>
                    </div>
                    <h3><a href="retrieveForm.php" class="back-button">Back</a></h3>
                    <div class="card-body">
                        <table class="table">
                            <tr class="table-header">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Mobile</th>
                                <th>Password</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['password'];?></td>
                                <td><a href="http://localhost/phpmyadmin/index.php?route=/sql&db=form&table=data&pos=0" class="btn btn-primary">Edit</a></td>
                                <td><a href="http://localhost/phpmyadmin/index.php" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    body {
        background-image: linear-gradient(to right, #ceaa9a, #dabcb2, #e8d8d5);
        height: 100vh;
    }

    .container {
        width: 80%;
        margin: 40px auto;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f8f8f8;
    }

    .table th,
    .table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ceaa9a;
    }

    .table-header th {
        background-color: #be9f8e;
        color: #fff;
        font-weight: bold;
        font-size: 18px;
    }

    .table tr:hover {
        background-color: #e8d8d5;
    }

    .btn {
        padding: 6px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        color: #fff;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #825e4a;
    }

    .btn-danger {
        background-color: #ceaa9a;
    }

    .btn:hover {
        opacity: 0.8;
    }
    
    .back-button-container {
        margin: 20px;
    }

    .back-button {
        display: inline-block;
        padding: 6px 15px;
        font-size: 18px;
        background-color: #825e4a;
        color: #ceaa9a;
        border-radius: 6px;
        text-decoration: none;
        font-weight:bold;
    }

    .back-button:hover {
        color: #be9f8e;
    }
</style>
