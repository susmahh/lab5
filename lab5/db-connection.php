<?php
function dbconnect($host="localhost",$user="root",$pass="",$db="wtlab")
{
    $con=@mysqli_connect($host,$user,$pass,$db)or die("could not connect to MySQL");
    return $con;
}
function signup($name,$username,$password,$email){
    $con=dbconnect();
    $sql="INSERT INTO login (username,password,email,name) values ('$username','$password','$email','$name')";
    return mysqli_query($con,$sql);
}
function validate_login($username,$password){
    $con=dbconnect();
    $sql="SELECT name,username FROM login WHERE username='$username' and password='$password'";
   // print_r($sql); exit();
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        return $result;
    }
    else{
        return false;
    }

    }//silwalprabin@gmail.com
?>