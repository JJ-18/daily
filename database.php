<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age= $_POST['age'];
    $address =$_POST['address'];
    $Email = $_POST['Email'];

    //Database Connection
 $conn= new mysqli('localhost','root','jahanvi','test1');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("Insert into registration(name, gender, age, address, Email)
    values(?,?,?,?,?)");
    $stmt->bind_param("ssiss", $name, $gender, $age, $address, $Email);
    $stmt->execute();
    echo "Registration Succssfully...";

    $stmt->close();
   $conn->close();
}
}
?>
