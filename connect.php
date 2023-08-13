<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

$con=new mysqli('localhost','root','','form');

if($con){
    //echo "Connection Successful";

    $sql="insert into `data` (name, email, gender, mobile, password) values('$name','$email','$gender','$mobile','$password')";
    
    $result = mysqli_query($con, $sql);
    if($result){
        header('Location: http://localhost/registrations/index.php', true, $code);
        exit;
    }elseif (isset($_POST["retrieveBtn"])) {
        // Retrieve button was clicked
        $retrieveValue = $_POST["retrieveBtn"];
        // Perform actions for retrieve button
        echo $retrieveValue;
    }else{
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
}

}
?>