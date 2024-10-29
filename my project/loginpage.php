<?php
session_start();

if(isset($_POST['login'])){
    include_once("db.php");   
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $username = stripslashes($username);
    $password = stripslashes($password);

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $password = md5($password);

    $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $id = $row['id'];
    $db_password = $row['password'];

    if($password == $db_password){
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $id;
        header("Location: index.php");
    } else{ 
        echo "<font color='red'>Your username and password did not match our system, please try again...</font>";
    }

}
else
    echo "Please enter username and password!";
?>
<!DOCTYPE html>

<html lang="en">

<head>
<link rel="stylesheet" href="Google Sheet.css">
<title>student friendly</title>

<style>

body{

    background-color: rgb(109, 170, 194);

    font-size: medium;

}
</style>

</head>

<body>
    <form method="post" action="https://script.google.com/macros/s/AKfycbzPR7jXIk2GFw9gE1DZ0d8J5g90lzfqtKhDeT84GSD1khCp30eOtIy6jyRG0_BWce8/exec" name="login form">
        
    
<div class="container">
<div style="text-align: center;">
<label for="Uname">Username</label>
<input type="text" id="Uname"  name="Uname"> <br><br>

<label for="pass">Password</label>&nbsp;

<input type="password" id="pass"  name="pass"><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button>login</button>


<input type="reset" value="Reset"><br><br>
</form>
<label for="forgot"><a href="forgotpassword.html">forgot password</a></label><div>


<p>Not registered?

    <a href="#"

     style="text-decoration: none;">

         </a>
         <a href="signup.html">signup</a>

</p>

  
</div>
</div>

<script src="Google Sheet.js"></script>
</body>

</html>





