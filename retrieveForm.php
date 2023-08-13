<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="reStyle.css">-->
    <title>Retrieve Form</title>



<style>
    
*{
    box-sizing: border-box;
    border-radius: 8%;
    border-color:#A17A69;
}
h2{
    text-align: center;
    font-family:'Times New Roman';
    color: beige;
}
body{
    background-image: linear-gradient(to right, #ceaa9a, #dabcb2, #e8d8d5);
    height:100vh;
    font-family:'Lucida sans';
}
form {
    margin: 15px;
    background: linear-gradient(to right,  #b5927f, #825e4a, #be9f8e);
    padding-left: 20px;
    padding-top:20px;
    width: 1100px; /* Set the width to your desired size */
    height: 300px; /* Set the height to your desired size */

    border-radius: 20px;
    box-shadow: 0 2px 5px rgba(63, 63, 63, 0.1);
}
.container{
    width:70%;
    margin:40px;
}

button[type='button'], button[type='button']{
    margin: 20px;
    padding:8px;
    width: 300px;
    height: 100px;
    border-radius: 10px;
    background-color: #ceaa9a;
    color: #825e4a;
    /*font-weight: bold;*/
    font-size: 22px;
    font-family:'Times New Roman';
}
button[type="button"]:hover, button[type="button"]:hover{
  background-color:#825e4a;
  color: white;
}
button[type="button"]{
    float: left;
}

</style>



</head>
<body>

<div class="container">
    <form action="connect.php" method="post">
    <div style="align:left;">  
    <h2> What information do you want to retrieve?</h2>
    <div class="btn">
        <button type="button" name="retrieveAll" onclick="window.location.href = 'index.php';">BACK</button>  
    </div>
    <div class="rbtn">
        <button type="button" name="personal" onclick="window.location.href = 'retrieveIndex.php';">PERSONAL RECORD</button>
        <button type="button" name="retrieveAll" onclick="window.location.href = 'retrieveAll.php';">SEE ALL RECORDS</button>
    </div>
    </form>
<div id="output"></div>

  <script src="script.js"></script>
</div>    
</body>
</html>