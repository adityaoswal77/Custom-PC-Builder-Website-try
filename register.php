
<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","custom");
if ($conn == false)
{	echo "no connection";}
else {	echo "successfully connected";}
?>
<html>
<body>
<div class="container"> 
    <form name="login" action="login.php" onsubmit="return Register()"> 
                <h1 id="">CREATE AN ACCOUNT</h1>
                <p>Please fill in this form.</p>
                <br>
                <label for="name"><b>Name</b></label>
                <br>
                <input type="text" class="txt" placeholder="Enter your Name" name="name" required>
                <br>
                <label for="email"><b>Email</b></label>
                <br>
                <input type="email" class="txt" placeholder="Enter Email" name="email" required>
                <br>
                <label for="phone"><b>Phone number</b></label>
                <br>
                <input type="number" class="txt" placeholder="Enter phone number" name="phone"required >
                <br>
                <label for="pass"><b>Password</b></label>
                <br>
                <input type="password" class="txt" placeholder="Enter Password" name="pass" required>
                
            <div>
                <input type="submit" value="Submit" name="submit"></a>
            </div>
    </form>
    </div>
    </body>

<style>

.container{
    background-color : white;
    box-shadow : 1px 1px 1px 1px grey;
    padding : 10px 8px 20px 30px;
    width : 40% ;
    height : 70% ;
    margin-left: 35%;

}
.txt{
    width : 90%;
    height : 5%;
    border: 1px solid black;
    border-radius : 50px;
    padding: 20px 15px 20px 15px;
    margin: 5px 0px 15px 0px;
}

</style>
</html>

<?php

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pass = $_GET['pass'];

$query="INSERT INTO `user`(`name`, `email`, `phone`, `password`) VALUES ('$name',$email','$phone','$pass')";
echo $query;
$run = mysqli_query($conn,$query);
if ($run==TRUE)
{
    echo " Welcome" ;
    echo "You have been successfully Registered";
}
else{
    echo "not submitted";
}
?>
    <script type="text/javascript">
    //form validation
        function validatefield(this_form) 
        {
            var username = this_form.name.value;
            //document.write(username);(this_form.name.value.match(regex_username) && this_form.pass.value.match(regex_password) && 
            var password = this_form.pass.value;
            errors = [];
            var regex_password = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            //var regex_username = /^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/;
            if (username == null || username == "") {
                alert("Please enter the username");
                this_form.name.focus();
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



