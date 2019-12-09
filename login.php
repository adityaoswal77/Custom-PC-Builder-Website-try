<?php
session_start();
if(isset($_SESSION["uid"]))
{
    header("location:index.php");
}

include("./connect.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<center>
<div class="box">
    <h1>Login</h1>
        <form name="Login"  action="login.php" onsubmit="return validate(this) " method="Post">
    <div class="textbox">
        <input type="Email" class="txt" placeholder="Email" name="mail" value="" required>
    </div>
    <div class="textbox">
        <input type="Password" class= "txt" placeholder="Password" name="pass" value="" required>
    </div>
    <input class= "login" type="submit" name="login" id="popup" value="Sign In">
    <br>
    <a href="./register.php"><h4>Not have an Account?</h4> Register</a>
    </div>
</form>

<style>

.container{
    background-color : white;
    box-shadow : 1px 1px 1px 1px grey;
    padding : 10px 8px 20px 30px;
    width : 40% ;
    height : 85% ;
    margin-left: 35%;

}
.txt{
    width : 20%;
    height : 3%;
    border: 1px solid black;
    border-radius : 5px;
    padding: 20px 15px 20px 15px;
    margin: 5px 0px 15px 0px;
}

.login{
    width : 20%;
    height : 3%;
    border: 1px solid blue;
    border-radius : 5px;
    padding: 20px 15px 20px 15px;
    margin: 5px 0px 15px 0px;
}

#popup{
    width : 20%;
    height : 3%;
    border: 1px solid brown;
    border-radius : 5px;
    padding: 20px 15px 20px 15px;
    margin: 5px 0px 15px 0px;
}

#popup:hover{
    background-color: green;
}

</style>



<script>
function validate(this_form)
{
var password = this_form.pass.value;
var regex_password = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
errors = [];
if (password.length < 8) 
{
errors.push("Your password must be at least 8 characters");
}
if (password.search(/[a-z]/i) < 0) 
{
errors.push("Your password must contain at least one letter.");
}
if (password.search(/[0-9]/) < 0) {
errors.push("Your password must contain at least one digit.");
}
if (password.search(/[!@#$%^&*]/) < 0) {
errors.push("Your password must contain at least one charactor.");
}
if (errors.length > 0) {
alert(errors.join("\n"));
return false;
}
return true;
}

</script>
</center>
</body>
</html>
<?php
include("connect.php");
if (isset($_POST["login"]))
{
    $username=$_POST["mail"];
    echo $username;
    $password =$_POST["pass"];
    echo $password;
    $query="SELECT * FROM `user` WHERE `email`= '$username' AND `password`= '$password'";
    echo $query;
    $run = mysqli_query($conn,$query);

    
    //$data= mysqli_fetch_assoc($run);
    $row = mysqli_num_rows($run);

    if($row<1)
    {
        ?>
        <script>
        alert("Wrong email or Password. <br> please try again");
        </script>
        <?php
    }
    else
        {
            $data= mysqli_fetch_assoc($run);
            $id=$data["user_id"];
            echo "id=".$id;
            session_start();
            $_SESSION["uid"]=$id;
            header("location:index.php");
        }
}
else {
    //header("location:register.php");
}
?>
