<?php
$server='localhost';
$username='root';
$password='';
$database='users';
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    //echo "connection successful";
//}
//else{
    echo "connection failed";
}

?>