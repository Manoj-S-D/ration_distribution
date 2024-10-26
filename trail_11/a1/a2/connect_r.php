<?php
    $shop_id=$_POST['shop_id'];
    $password=$_POST['password'];
    $shop_name=$_POST['shop_name'];
    $distributer_name=$_POST['distributer_name'];
    $pincode=$_POST['pincode'];
    $address=$_POST['address'];

    $conn = new mysqli('localhost','root','','ration');
    if($conn->connect_error)
    {
        die('connection failed : '.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into admin (shop_id,password,shop_name,distributer_name,pincode,address) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssis",$shop_id,$password,$shop_name,$distributer_name,$pincode,$address);
        $stmt->execute();
        echo "Registration Successful...";
        $stmt->close();
        $conn->close();
    }
?>