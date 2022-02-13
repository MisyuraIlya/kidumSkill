<?php
include("config.php");

if(!isset($_GET["code"])){
  exit("לא נמצה עמוד");
}

$code = $_GET["code"];

$getEmailQuery = mysqli_query($con, "SELECT email FROM resetpassword WHERE code='$code'");
if(mysqli_num_rows($getEmailQuery) == 0 ){
  exit("לא נמצה עמוד");
}

if(isset($_POST["password"])) {
  $pw = $_POST["password"];
  $pw = md5($pw);

  $row = mysqli_fetch_array($getEmailQuery);
  $email = $row["email"];

  $query = mysqli_query($con, "UPDATE users SET password = '$pw' WHERE email = '$email'");

  if($query) {
    $query = mysqli_query($con, "DELETE FROM resetpassword WHERE code='$code'");
    exit("סיסמה שלך השתנתה בהצלחה");
  }else {
    exit("תקלה בשינוי סיסמה נסה שוב פעם");
  }
}




 ?>

 <form method="post">
   <input type="password" name="password" placeholder="new password">
   <br>
   <input type="submit" name="submit" value="update password">
 </form>
