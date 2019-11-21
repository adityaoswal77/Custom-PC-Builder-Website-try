<!DOCTYPE html>
<html>

<head>
    <title> WELCOME  </title>
    <script type="text/javascript">
    //form validation
        function validatefield(this_form) 
        {
            var username = this_form.uname.value;
            //document.write(username);(this_form.uname.value.match(regex_username) && this_form.pass.value.match(regex_password) && 
            var password = this_form.pass.value;
            errors = [];
            var regex_password = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            //var regex_username = /^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/;
            if (username == null || username == "") {
                alert("Please enter the username");
                this_form.uname.focus();
                return false;
            }
            if (password == null || password == "") {
                alert("Please enter the password");
                this_form.pass.focus();
                return false;
            }
            /* 
            if (this_form.pass.value.match(regex_password)) {
                alert("Success");
                return true;
            } else {
                return ("Incorrect Selection");
            }*/

            if (password.length < 8) {
                errors.push("Your password must be at least 8 characters");
            }
            if (password.search(/[a-z]/i) < 0) {
                errors.push("Your password must contain at least one letter.");
            }
            if (password.search(/[0-9]/) < 0) {
                errors.push("Your password must contain at least one digit.");
            }
            if (errors.length > 0) {
                alert(errors.join("\n"));
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <h1 align="center">WELCOME TO THE CUSTOM PC BUILDER</h1>
    <hr>
    <h1 align="center">PLEASE LOGIN </h1>
    <form action="#" onsubmit="return validatefield(this)" method="Post">
        <table align="center">
            <tr>
                <td colspan="2" align="center">
                    Enter the Login Details
                </td>
            </tr>
            <tr>
                <td>
                    Username:
                </td>
                <td>
                    <input type="text" name="uname">
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="password" name="pass">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
            <P>Click here to <a href="login.html">Register</a>
            </P>
                    <input type="submit" name="login" value="Login" onclick="">
                </td>
            </tr>
        </table>
        </form>
</body>
</html>

<? php

$conn = mysqli_connect("localhost","root","","custom");
if($conn == false)
{	echo "no connection";}
else {	echo "successfully connected";}

if (isset($_POST['login']))
{
    $username = $_POST['name'];
    $password = $_POST['password'];

    $query = "SELECT `name`,`password` FROM `user` WHERE `name` = `aditya` AND `password` = `aditya`";
    echo $query;
    $run = mysqli_query($conn,$query);
    $row = mysqli_num_row($run);

    if ($row <1){
        
            ?>
                <script>
                alert("Invalid username or password");
                window.open("login.php",self);
                </script>
            <?php
        }
            
    else{
        $data=mysqli_fetch_assoc($run);
        $id=$data['user_id'];
        $id=$row["user_id"];
        echo "id = ".$id;
//        session_start();
  //      $_SESSION["uid"] = $id;
    //    header("location:index.php")
    } 
}
?>
