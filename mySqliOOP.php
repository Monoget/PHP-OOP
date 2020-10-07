<?php

$serverName="localhost";
$userName="root";
$password="";
$dbName="Student";


$conn=new mysqli($serverName, $userName, $password, $dbName);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

$sql="SELECT * FROM students";
$result= $conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "Id: {$row["students_id"]} - Student No: {$row["student_no"]} -First name: {$row["surname"]} - Last name: {$row["forename"]}<br>";
    }
}else{
    echo "No data found";
}

$conn->close();

?>