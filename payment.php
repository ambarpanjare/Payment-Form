<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $card= $_POST['card'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];
   //$id= $_POST['id'];
   // $gender = $_POST['gender'];
   // $address = $_POST['address'];
   // $pincode = $_POST['pincode'];
   // $card_type = $_POST['card_type'];
    //$pay = $_POST['pay'];

    
    //Database connection

    $conn = new mysqli('localhost', 'root', '','project');
    if($conn->connect_error){
        die('connection failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into payment(name,email,amount,card,expiry,cvv) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssissi", $name,$email,$amount,$card,$expiry,$cvv);
        $stmt->execute();
        echo "registration successful...";
        $stmt->close();
        $conn->close();
    }
?>