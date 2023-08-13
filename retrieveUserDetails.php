<!DOCTYPE html>
<html>
<head>
    <title>Retrieve User Details</title>
</head>
<body>
 
</body>
</html>

<style>
    table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 2px solid #A17A69;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #A17A69;
    color: white;
}
body{
    background-image: linear-gradient(to right, #ceaa9a, #dabcb2, #e8d8d5);
    height:100vh;
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
        
        echo '<tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Mobile</th>
        <th>Password</th>
        </tr>';

        echo 
        '<tr>
        <td>' . $id . '</td>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $gender . '</td>
        <td>' . $mobile . '</td>
        <td>' . $password . '</td>
        </tr>';

        echo '</table>';

    } else {
        echo "No user found for the given ID.";
    }

    $stmt->close();
    $conn->close();
}
?>
