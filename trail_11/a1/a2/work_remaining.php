<?php



    $conn = new mysqli('localhost','root','','ration');
    if($conn->connect_error)
    {
        die('connection failed : '.$conn->connect_error);
    }
        
    
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>User Data</h2>
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>shop_id</th>
            <th>q_rice</th>
            <th>q_ragi</th>
            <th>q_sugar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $user_qry="SELECT shop_id,q_rice,q_ragi,q_sugar from admin";
          $user_res=mysqli_query($con,$user_qry);
          ?>
          <tr>
            <td><?php echo $user_data['shop_id'];  ?></td>
            <td><?php echo $user_data['q_rice'];  ?></td>
            <td><?php echo $user_data['q_ragi'];  ?></td>
            <td><?php echo $user_data['q_sugar'];  ?></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
</div>
</body>
</html>