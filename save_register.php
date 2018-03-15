<?php
    $name =$_POST['name'];
    $email =$_POST['email'];
    $website=$_POST['website'];
    $comment=$_POST['comment'];
    $gender=$_POST['gender'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="labtest";

    $conn = new mysqli($servername,  $username, $password,$dbname); 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql ="INSERT INTO student (name,email,website,comment,gender) VALUE('$name', '$email', '$website','$comment','$gender')";
    
    if($conn->query($sql)==TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error".$sql. "<br>" .$conn->error;
    }

    
?>