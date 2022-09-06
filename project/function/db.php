<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "medical_serves";   

$conn = mysqli_connect($server,$username,$password,$db); /// connection way

if(!$conn)
{
    die ( "Error In Connection : " . mysqli_connect_error());
    
}
function db_insert($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql); // function to use to send query to database
    if($result)
    {
        return "Added Success";
    }
    return false;
}
