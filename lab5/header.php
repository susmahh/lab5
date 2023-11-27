<?php session_start();
include('db-connection.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <style type="text/css">
        body{
            font-family:sans-serif;
            padding:0px;
        }
        *{
            text-decoration:none;
        }
        .navbar{
            background:yellow; padding-right:15px;padding-left:15px;border:0.5px solid #999;
        }
        .navdiv{
            display:flex;align-items:center;justify-content:space-between;
        }
        .logo a{
            font-size:45px;font-weight:600;color:purple;
        }
        li{
            list-style:none;display:inline-block;
        }
        li a{
            color:purple;margin-right:25px;font-weight:bold;font-size:22px;
        }
        button{
            background-color:pink; margin-left:10px; border-radius:10px; padding:10px;width:90px;
        }
        button a{
            color:black;font-weight:bold;font-size:16px;
        }
        .sign{
            width:300px;box-shadow:0 0 3px 0;background:#fff;padding:20px;text-align:center;margin:0.5% auto 0;
        }
        .input-type{
             border-radius:15px;padding:4px;border:1px solid#999;outline:none;
        }
        </style>
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
        <div class="logo"><a href="#">LOgO</a></div>
        <ul>
        <li><a href="#"><button>Home</a></button></li>
        <li><a href="#"><button>AboutUs</a></button></li>
        <li><a href="#"><button>Contact</a></button></li>
        <a href="#"></a>
        </ul>
    </div>
    </nav>