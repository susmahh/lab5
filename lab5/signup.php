<?php
include("header.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $user=signup($name,$username,$password,$email);
    if($user){
       header("Location:login.php");exit();
    }
    else{
        echo "unable to signup";
    }
   
}
?>
<div class="sign">
    <h2>Signup Form</h2>
    <h5>Enter Your Details:</h5>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" class="input-type"name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password"class="input-type" name="password" required><br><br>
        <label for="name">Name:</label>
        <input type="text"class="input-type" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email"class="input-type" name="email" required><br><br>
        <button name="submit"><a href="#"> SignUp </a></button>
        <hr>
        <p class="or">OR</p>
        <p>Already have an account?</p>
        <button name="submit"><a href="login.php"> Login </a></button>
    </form>
</div>
<?php
include("footer.php");
?>
