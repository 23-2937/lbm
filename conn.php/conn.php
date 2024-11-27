<?php
$Servername ="locale_get_region";
$username="root";
$password="";
$dbnname="my_db";
$Conn=new mysqli($Servername,$username,$password,$dbnname);
if ($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}else{
    echo"Connection successful!";
}
$sql ="CREATE TABLE students"(
 ID INT NOT NULL,
 Lastname VARCHAR(255) NOT NULL,
 Firstname VARCHAR(255),
 Age INT CHECK(Age>=18),
 Primary key(ID) 
)";
if($conn->query($sql===TRUE){
ECHO"Table created successfully!";
}else{
echo "Error in creating table".$conn->error;
}




