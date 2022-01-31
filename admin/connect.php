<?php
    $hospitalname = $_POST['hospitalname'];
    $contactdetail = $_POST['contactdetail'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode= $_POST['pincode'];
    $address = $_POST['address'];
    $beds = $_POST['beds'];
    $cyclinders = $_POST['cyclinders'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'covihospital_db');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
         }
         else{
             $stmt = $conn->prepare("insert into alumnus_bio( hospitalname, contactdetail, city, state, pincode, address, beds, cyclinders)
             values(?, ?, ?, ?, ?, ?, ?, ?) ");
             $stmt->bind_param("ssssisii", $hospitalname, $contactdetail, $city, $state, $pincode, $address, $beds, $cyclinders);
             $stmt->execute();
             header('location: home.php');
             $stmt->close();
             $conn->close();
         }





?>