<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $FirstName = $_POST['FirstName'];

    $LastName= $_POST['LastName'];

    $Username = $_POST['Username'];

    
    $Course = $_POST['Course'];

    $password = $_POST['password'];

    $ConformPassword = $_POST['ConformPassword'];


    $sql = "INSERT INTO `USER1`(`FirstName`, ` LastName`, `Username`,`Course`, `password`,`ConformPassword`) 

           VALUES ('$FirstName',' $LastName ',` $Username`,` $Course`, ` $password`,` $ConformPassword)";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();

  } 

?> 
<html lang="en">
    <style>
        body {
          background-image: url('16.webp');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100%;
          font-size: 150%;
          color: rgb(244, 5, 212);
          text-align: center;
        }
.Signup-box {
  width: 350px;
  height: 700px;
  margin:auto;
  background-color: transparent;
  border:1px dotted grey;
  border-radius: 20px;
}
h1{
  text-emphasis: center;
  padding-top: 15px;
}
form{
  width: 300px;
  margin-left: 20px;
}
form label {
  display: flex;
  margin-top: 20px;
  font-size: 18px;
}
form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid black;
  border-radius: 6px;
  outline: none;
}
.button {
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: rgb(222, 219, 15);
  color: rgb(244, 5, 212);
  font-size: 18px;
  border-radius: 6px;
}
input[type="reset"] {
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: rgb(222, 219, 15);
  color: rgb(244, 5, 212);
  font-size: 18px;
}
p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
}
.para {
  text-align: center;
  color: rgb(244, 5, 212);
  font-size: 15px;
  margin-top: -10px;
}
.para a {
  color: #49c1a2;
}
</style>  
<head>
<title>student friendly</title>
</head>
<body>
  <div class="Signup-box">
    <h1>Sign Up</h1>
<form>
<label >First Name:</label>
<input type="text" placeholder="Enter your first name "required>

<label >Last Name:</label>
<input type="text" placeholder="Enter your last name">

<label>Username:</label>
<input type="password" placeholder="Enter your roll number"required> 

<label >Course:</label>
<input type="text" placeholder="Enter your course"required > 

<label >Password:</label>
<input type="password" placeholder="Enter your password " required>

<label >Conform Password:</label>
<input type="password" placeholder="Reenter password to confirm" required>

<button class="button">submit</button>
<input type="reset" value="Reset">

</form>
</div>
<p class="para">Already have an account?<a href="login.html">Login here</a></p>

</body>
</html>