<!DOCTYPE html>
<html>
<head>
    <title>Retrieve User Details</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <!-- Your existing HTML content here -->

    <!-- PHP code here -->

    <!-- Your other HTML content here -->

</body>
</html>



<style>
    table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #A17A69;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #A17A69;
    color: white;
}
</style>


<?php
// Retrieve the user details based on the submitted ID
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Replace with your actual database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use a prepared statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM data WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    // Check if a user with the given ID exists
    if ($result->num_rows > 0) {
        
        $userDetails = $result->fetch_assoc();
        $name = $userDetails['name'];
        $email = $userDetails['email'];
        $gender = $userDetails['gender'];
        $mobile = $userDetails['mobile'];
        $password = $userDetails['password'];

        // Create an HTML table to display the user details
        echo '<table>';
        echo '<tr><td>User ID:</td><td>' . $id . '</td></tr>';
        echo '<tr><td>Name:</td><td>' . $name . '</td></tr>';
        echo '<tr><td>Email:</td><td>' . $email . '</td></tr>';
        echo '<tr><td>Gender:</td><td>' . $gender . '</td></tr>';
        echo '<tr><td>Mobile:</td><td>' . $mobile . '</td></tr>';
        echo '<tr><td>Password:</td><td>' . $password . '</td></tr>';
        echo '</table>';

    } else {
        echo "No user found for the given ID.";
    }

    $stmt->close();
    $conn->close();
}
?>
