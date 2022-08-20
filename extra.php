
<div>

<h2>Leave Form </h2>
<form id = "myform"  method="post" >
<label for="name_">Name:</label><br>
<input type="text" id="name_" name="name_"><br>
<label for="reason_">Reason:</label> <br>
<input type="text" id="reason_" name="reason_" ><br>
<label for="time_">Time:</label> <br>
<input type="text" id="time_" name="time_" ><br>
<label for="remarks_">Remarks:</label> <br>
<input type="text" id="remarks_" name="remarks_" ><br>


    <input type="submit" value="Submit">
</form>
</div>

<?php

if (isset($_POST['name_']) and isset($_POST['reason_']) and isset($_POST['time_']) and isset($_POST['remarks_'])
) {
$name = $_POST["name_"];
$reason_ = $_POST["reason_"];
$time_ = $_POST["time_"];
$remarks_ = $_POST["remarks_"];



$sql = "INSERT INTO leave_ VALUES ('" . $name. "','". $reason_ . "','" . $time_ . "','" . $remarks_ . "')";

if ($connect->query($sql) === TRUE) {
    echo '<script>alert("Movement registered Successfully")</script>';
    $to      = 'hod.ise@nmamit.in';
    $subject = '';
    $message = $name . $reason_ . $time_ . $remarks_;
    $headers = 'From: noreply@nmamit.in'       . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
} else {
    echo '<script>alert("error in portal try again later")</script>';
}
}

?>



</div

























if(isset($_POST['submit']))
{

   $name_ = mysqli_real_escape_string($conn, $_POST['name_']);
   $reason_ = mysqli_real_escape_string($conn, $_POST['reason_']);
   $time_ = mysqli_real_escape_string($conn, ($_POST['time_']));
   $remarks_ = mysqli_real_escape_string($conn, ($_POST['remarks_']));
  

   
  
         $sql = mysqli_query($conn, "INSERT INTO `leave_`(name_, reason_, time_, remarks_) VALUES('$name_', '$reason_', '$time_', '$remarks_')") or die('query failed');


}

      
   

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Movement Register</h3>
     
      <input type="text" name="name_" placeholder="Name" class="box" required>
      <input type="text" name="reason_" placeholder="Reason" class="box" required>
      <input type="number" name="time_" placeholder="Time" class="box" required>
      <input type="text" name="remarks_" placeholder="Remarks" class="box" required>
         <input type="submit" name="submit" value="Confirm" class="btn">
     
      <p>Want To convey a issue <a href="login.php">Click here</a></p>
   </form>

</div>