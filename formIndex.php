<!DOCTYPE html>
<html>
<head>
    <title>User Details Form</title>
</head>
<body>
    <?php

    function connectToDatabase()
    {
        // Implement your own database connection here
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "form";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    // Handle form submission and retrieval
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $conn = connectToDatabase();

        // Retrieve user details from the database based on the submitted ID
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $query = "SELECT * FROM data WHERE id = " . $id;
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                // Fetch the user details as an associative array
                $userDetails = $result->fetch_assoc();
                $name = $userDetails['name'];
                $email = $userDetails['email'];
                $gender = $userDetails['gender'];
                $mobile = $userDetails['mobile'];
                $password = $userDetails['password'];
            } else {
                echo "No user found for the given ID.";
            }
        }
        $conn->close();
    }
    ?>

    <form action="" method="post">
        <label>Enter User ID:</label>
        <input type="text" name="id" required>
        <button type="submit">Retrieve Details</button>
    </form>

    <?php
    // Check if user details are retrieved and populate the form fields
    if (isset($name) && isset($email)) {
    ?>
    <form action="" method="post">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" readonly>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" readonly>

        <label>Gender:</label>
        <input type="gender" name="gender" value="<?php echo $gender; ?>" readonly>

        <label>Mobile:</label>
        <input type="mobile" name="mobile" value="<?php echo $mobile; ?>" readonly>

        <label>Password:</label>
        <input type="password" name="password" value="<?php echo $password; ?>" readonly>
        
        <button type="submit" name="submit" style="display:none;">Submit</button>
        <!-- The "readonly" attribute ensures the fields are not editable -->
    </form>
    <?php
    }
    ?>

</body>
</html>
