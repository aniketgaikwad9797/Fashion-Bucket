<?php

$conn=mysqli_connect("127.0.0.1:3308","root","","e-commerce") or die(mysqli_error($conn));
echo "Connection !!";
session_start();
?>