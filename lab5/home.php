<?php
include("header.php");
if(isset($_GET['submit'])){
    session_destroy();
    header("Location:login.php");exit();
}
if(!$_SESSION['user']){
    header("Location:login.php");exit();
}
?>
    <p> THis is home page a secret one for <?php echo $_SESSION['user'];?></p>
    <form><button name="submit"> LogOut </button></form>

<?php
include("footer.php");
?>