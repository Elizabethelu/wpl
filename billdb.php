<?php
$conn = new mysqli("localhost","root","");
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE billdb";
if ($conn->query($sql) === TRUE) 
{
  echo "Database created successfully";
} 
else
{
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
