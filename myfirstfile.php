<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];

    $conn = new mysqli('localhost','root','','lab10program');
    if($conn->connect_error){
        die('connection failed  :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(firstname, lastname, password, email, phonenumber) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi",$firstname, $lastname, $password, $email, $phonenumber);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
        
    }

?>