<?php
session_start();
include 'connect.php';
$id=$_SESSION['id'];
$query=mysqli_query($conn,"SELECT * FROM user where id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $query = "UPDATE user SET fullname = '$fullname', gender = '$gender', age = $age, address = '$address' WHERE id = '$id'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header("location:index.php");
}
?>