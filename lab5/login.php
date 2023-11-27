<?php
include("header.php");
if(isset($_SESSION['user'])){
    header("Location:home.php");
}
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $user=validate_login($username,$password);
    // if($username=="ram" && $password=="123")
    if($user != false)
    {
        $_SESSION['user']=$username;
        header("Location:home.php");
        exit();
    }
    else{
        session_destroy();
    }
}
?>
    <div class="sign">
    <h2>Login</h2></br>
    <form action="login.php" method="post">
        <label for="username" >Username:</label>
        <input type="text" class="input-type"id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" class="input-type"id="password" name="password" required><br><br>

        <button name="submit"><"><a href="#">Login </a></button>
        <hr>
        <h5>Don't have an account?</br>SIgnup here</h5>
        <button name="submit"><"><a href="signup.php">Signup</a></button>
    </form>
    </div>
<?php
include("footer.php");
?>

