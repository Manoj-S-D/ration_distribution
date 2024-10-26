<?php
    $shop_id =$_POST['shop_id'];
    $password =$_POST['password'];
    
    $conn = new mysqli('localhost','root','','ration');
    if($conn->connect_error)
    {
        die('connection failed : '.$conn->connect_error);
    }
    else
    {

        $stmt=$conn->prepare("select * from admin where shop_id=?");
        $stmt->bind_param("s",$shop_id);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data=$stmt_result->fetch_assoc();
            if($data['password']=== $password) 
            {
                 echo "<h2>Login Successfully</h2>";
                echo '<a href="./work.html"><input type="submit"/></a>';
            } 
            else 
            {
            echo "<h2>Invalid Email or password</h2>";
            }
            
        }
        else 
        {
            echo "<h2>Invalid Email or password</h2>";
        }
    }
        
            

?>