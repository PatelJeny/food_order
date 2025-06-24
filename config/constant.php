<?php
session_start();

$SITEURL="http://localhost/food_order/";
$host="localhost";
$username="root";
$password="";
$dbname="food_order";

    $conn=new mysqli($host,$username,$password,$dbname);
        if($conn->connect_error){
            die("connection failed:".$conn->connect_error);
                }
?>