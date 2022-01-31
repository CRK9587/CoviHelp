<?php
    $id = $_POST['id'];
    $beds = $_POST['beds'];
    $cyclinders = $_POST['cyclinders'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'covihospital_db');
    if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }
    
    $sql = "update alumnus_bio set beds='$beds', cyclinders='$cyclinders' where id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        header('location: alumni.php');
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
    
    $conn->close();





?>