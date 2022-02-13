


<?php
include 'inc/head.php';
?>

  <body>



<?php
	include 'inc/header.php';
  ?>

<?php include('processForm.php') ?>

  <div class="container ">
    <div class="row">
      <div class="profile profile_inputs">

        <h1>פרופיל</h1>
        <div class="profile_images">
          <?php if (!empty($msg)): ?>
            <div class="alert <?php echo $msg_class ?>" role="alert">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
          <form action="profile.php" method="post" enctype="multipart/form-data">
            <?php if(empty($image_profile)) { ?>
              <span class="img-div">
                <div class="text-center img-placeholder"  onClick="triggerClick()">
                  <h4>שנה תמונה</h4>
                </div>
                <div class="profile_images">
                    <img src="images/deafult.png" onClick="triggerClick()" id="profileDisplay" width="150px" height="150px" style="border-radius:50%;">
                </div>
              </span>
                <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control"  style="display:none;">
                <!-- <input type="hidden" name="max_file_size" value="1111111"> -->

              <?php } else { ?>
                <span class="img-div">
                  <div class="text-center img-placeholder"  onClick="triggerClick()">
                    <h4>שנה תמונה</h4>
                  </div>
                  <div class="profile_images">
                      <img src="images/<?php echo $row[9]; ?>" onClick="triggerClick()" id="profileDisplay" width="150px" height="150px" style="border-radius:50%;" >
                  </div>
                </span>
                  <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control"  style="display:none;">
              <?php } ?>
              <div class="changebtn">
                      <button type="submit" name="save_profile" class="btn btn-primary btn-block" >תשמור תמונה</button>
                </div>
                <div class="changebtn">
                        <button type="submit" name="delete" class="btn btn-primary btn-block">למחוק תמונה</button>
                  </div>
          </form>
        </div>
        <div class="change_name">
          <h3>שינוי שם</h3>
          <?php
          if(isset($_POST['firstname']) && isset($_POST['lastname']) ){


              $firstname = htmlentities(mysqli_real_escape_string($link, $_POST['firstname']));
              $lastname = htmlentities(mysqli_real_escape_string($link, $_POST['lastname']));



              $query ="UPDATE users SET firstname='$firstname', lastname='$lastname' WHERE username = '$filecookie'";
              $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

              if($result){
                  echo "<span style='color:green;'>הנתונים נשמרו</span>";
                }else {
                    echo "<span style='color:green;'>קיימת תקלה</span>";
                }
          }
           ?>
          <form class="change_names" action="" method="post" dir="rtl">
            <label>שם משתמש:</label>
            <input type="text" name="username" value="<?=$_COOKIE['user']  ?>" placeholder="">
            <br>
            <label id="margin_name">שם:</label>
            <input type="text" name="firstname" value="<?php echo "$firstname" ?>" placeholder="" >
            <br>
            <label id="margin_lastname">שם משפחה:</label>
            <input type="text" name="lastname" value="<?php echo "$lastname" ?>" placeholder="">
            <div class="changebtn">
                  <button type="submit" name="profile-button" class="btn btn-success">שנה נתונים</button>
              </div>
          </form>
        </div>
        <div class="change_email">
          <form class="change_names" action="" method="post" dir="rtl">
            <h3>שינוי דואר אלקטרוני</h3>
            <?php
            if(isset($_POST['changeemail'])) {
                $changeEmail = htmlentities(mysqli_real_escape_string($link, $_POST["changeemail"]));
                $query ="UPDATE users SET email='$changeEmail' WHERE username = '$filecookie'";
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                  if($result){
                      echo "<span style='color:green;'>הנתונים נשמרו תרענן את העמוד</span>";
                    }else {
                        echo "<span style='color:red;'>קיימת תקלה</span>";
                    }
            }

             ?>
            <p>דואר נוכחי: <?php echo "$currentemail" ?></p>
            <input type="text" name="changeemail" value="" placeholder="דואר אלקטרוני חדש">
            <div class="changebtn">
                  <button type="submit" name="email-button" class="btn btn-success">שנה דואר</button>
              </div>
          </form>
        </div>
        <div class="change_password">
          <h3>שינוי סיסמה</h3>
<?php
if(isset($_POST['changePasswordNew1']) && isset($_POST['CchangePasswordNew2'])) {

  $passnew = $_POST["changePasswordNew1"];
  $passnew2 = $_POST["CchangePasswordNew2"];

  $passnew = md5($passnew);
  $passnew2 = md5($passnew2);
  if($passnew == $passnew2 ) {
    $query = mysqli_query($link, "UPDATE users SET password = '$passnew' WHERE  username = '$filecookie'");
    echo "<p style='color:green;'>הסיסמה השתנתה בהצלחה</p>";
  }else {
    echo "<p style='color:red;'>הסיסמה לא דומה</p>";
  }


} else {
  // echo "<p style='color:red;'>error in changiing password</p>";
}
 ?>
          <form class="change_names" action="" method="post">
            <input type="text" name="changePasswordNew1" value="" placeholder="סיסמה חדשה">
            <input type="text" name="CchangePasswordNew2" value="" placeholder="תחזור על הסיסמה">
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="changebtn">
                  <button type="submit" name="password-button" class="btn btn-success" >שינוי סיסמה</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="js/profileImage.js">

  </script>
  </body>

</html>
