<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo "welcome" ?></h3>
      <h3><?php echo  $fetch['name']; ?></h3>
      <a href="update_profile.php" class="btn
      ">update profile</a>
      <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
     
   </div>






<?php
//create connection
$connect=mysqli_connect('localhost','root','','finalll');

//check connection
if(mysqli_connect_errno())
{
 echo '<script>alert("Could not connect ,contact admin")</script>';
}

else{
echo "_                                      _";
}



?>

<div>


   

<h2>Movement Register </h2>
<form id = "myform"  method="post" >
<label for="name_">Name:</label><br>
<input type="text" id="name_" name="name_"><br>
<label for="reason_">Reason:</label> <br>
<input type="text" id="reason_" name="reason_" ><br>
<label for="time_">Time:</label> <br>
<input type="text" id="time_" name="time_" placeholder="Enter in hh:mm format" ><br>
<label for="remarks_">Remarks:</label> <br>
<input type="text" id="remarks_" name="remarks_" ><br>



    <input type="Submit" value="Submit">
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
   
    
} else {
    echo '<script>alert("error in portal try again later")</script>';
}

}

?>




</div>






</body>
</html>
