<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
   


<style>
    *{
    box-sizing: border-box;
    border-radius: 8px;
    border-color: #A17A69;
}
h1{
    text-align: center;
    font-family:'Times New Roman';
    font-size:70px;
}
.registration-heading {
    color: #A17A69;
}  
body{
    background-image: linear-gradient(to right, #ceaa9a, #dabcb2, #e8d8d5);
    height:100vh;
    font-family:'Lucida sans';
}
form {
    max-width: 770%;
    margin: 20px;
    background: linear-gradient(#825e4a, #b5927f, #be9f8e);
    padding: 65px;
    border-radius: 30px;
    box-shadow: 0 2px 5px rgba(63, 63, 63, 0.1);
    position: center;
}
.container{
    width:70%;
    margin:0 auto;
}
input{
    width: 96%;
    padding: 13px;
    margin:15px;
    border: 1.8px #a17a69;
    font-size: 18px;
    border-radius:5px;
}
::placeholder{
    text-align:left;
    font-style: italic;
}
.genderContainer
{
    display: flex;
  align-items: center;
}

.genderContainer label {
  margin-right: 80px;
}

.genderContainer input[type="radio"] {
  margin-right: 50px;
  margin-left: 0px;
}
label{
    font-weight: bold;
    font-size: 22px;
    color: beige;
    font-family:'Times New Roman';
}
button[type='submit'], button[type='button']{
    margin: 10px;
    padding:10px;
    width:20%;
    border-radius: 10px;
    background-color:#825e4a;
    color: white;
    float:left;
    /*font-weight: bold;*/
    font-size: 22px;
    font-family:'Times New Roman';
}
button[type="submit"]:hover, button[type="button"]:hover{
    background-color: #ceaa9a;
    color: #b5927f;
}
button[type="button"]{
    float: right;
}
</style>





</head>
<body>
    <h1 class="registration-heading">REGISTRATION FORM
</h1>

    <div class="container">
        <form action="connect.php" method="post">
            <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name" >
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div class="genderContainer">
        <label>Gender</label>
        <label for="male">
          <input type="radio" id="male" name="gender" value="male">
          Male
        </label>
    
        <label for="female">
          <input type="radio" id="female" name="gender" value="female">
          Female
        </label>
    
        <label for="other">
          <input type="radio" id="other" name="gender" value="other">
          Other
        </label>
        </div><br>
        <div>
            <label>Mobile</label>
            <input type="text" name="mobile" placeholder="Enter your mobile">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password">
        </div>
        <div class="btn">
            <button type="submit" name="submitbtn" value="submit">SUBMIT</button>
            <button type="button" name="retrieve" onclick="window.location.href = 'formIndex.php';">PREVIEW</button>
            <button type="button" name="retrievebtn" onclick="window.location.href = 'retrieveForm.php';">RETRIEVE</button>
                
        </div>
        </form>
    </div>
</body>
</html>