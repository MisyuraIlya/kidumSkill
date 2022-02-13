

<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'server/Registration/PHPMailer/src/Exception.php';
require 'server/Registration/PHPMailer/src/PHPMailer.php';
require 'server/Registration/PHPMailer/src/SMTP.php';
require 'server/Registration/config.php';
// Instantiation and passing `true` enables exceptions


  if(isset($_POST['submit1'])) {

    $u = $_POST['u'];
    $p = $_POST['p'];
    $p2 = $_POST['p2'];
    $e = $_POST['e'];
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];

    if(strlen($u) < 5) {
      $error1 = "<p>your user name must be at leat 5 characteres</p>";
    }elseif($p2 != $p) {
      $error1 ="<p>yout password do not match</p>";
    }else {
      $mysqli = NEW MYSQLi ('localhost', 'root', 'root', 'kidumskillnew');
      if ($mysqli) {
        echo "connect";
      }
      $u = $mysqli->real_escape_string($u);
      $p = $mysqli->real_escape_string($p);
      $p2 = $mysqli->real_escape_string($p2);
      $e = $mysqli->real_escape_string($e);
      $fn = $mysqli->real_escape_string($fn);
      $ln = $mysqli->real_escape_string($ln);

      $vkey = md5(time().$u);




      $p = md5($p);

      $insert = $mysqli->query("INSERT INTO users (username,email,password,vkey,firstname,lastname)
      VALUES('$u','$e','$p','$vkey','$fn','$ln')");
      if ($insert) {
        echo "ok";
      }else {
        echo "not send";

      }
      if($insert){
        $emailTo = $e;
        $mail = new PHPMailer(true);
        echo "ok";
        try {
            //Server settings

            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'spetsar97ilya@gmail.com';                     // SMTP username
            $mail->Password   = '890542015345Ss!';                               // SMTP password
            $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('spetsar97ilya@gmail.com', 'KidumSkill');
            $mail->addAddress($emailTo);                 // Name is optional
            $mail->addReplyTo('no-reply@example.com', 'no-reply');



            // Content
            $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/server/Registration/verify.php?vkey=$vkey";
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'KidumSkill Verefication';
            $mail->Body    = "לחץ כאן כדאי לאשר את המייל הזה <a href='$url'>לחץ פה</a>";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'send';?>

            <?php
            	include 'inc/head.php';
              ?>

              <body>

            <?php 	include 'inc/loader.php'; ?>


            <?php
              include 'inc/header.php';
              ?>

            <div class="container__reg <?php if(isset($_POST['submit1'])) { echo "right-panel-active"; }?>" id="container">
              <div class="form-container sign-up-container">
                <form action="reglogin.php" method="post">
                  <h1>ליצור משתמש</h1>

                  <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                  <div class="reg_succses" style="color:green;">
                      <?php echo "נרשמת בהצלחה, תאשר במייל את המשתמש"; ?>
                  </div>
                    <div class="error_red" style="color:red">

                  <?php
                    if(!empty($error1)) {
                      echo "$error1";
                      ?>

                      <?php
                       }
                   ?>
                   <!-- when error in mail -->
                 </div>
                  <span>תשתמש בדואר האלקטרוני שלך</span>
                  <input type="text" placeholder="שם משתמש" name="u" />
                  <input type="email" placeholder="דואר אלקטרוני" name="e"/>
                  <input type="text" placeholder="שם" name="fn"/>
                  <input type="text" placeholder="שם משפחה" name="ln"/>
                  <input type="password" placeholder="סיסמה" name="p"/>
                  <input type="password" placeholder="תחזור על הסיסמה" name="p2"/>
                  <button name="submit1">כניסה למשתמש</button>
                </form>
              </div>
              <div class="form-container sign-in-container">
                <form action="reglogin.php" method="post">
                  <h1>כניסה</h1>
                  <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                  <span>תכניס את המשתמש</span>
                  <div class="error_red" style="color:red">
                    <?php
                      if(!empty($error)) {
                        echo "$error";
                        ?>

                        <?php
                         }
                     ?>
                   </div>

                  <input  type="email" placeholder="דואר אלקטרוני" name="e"  />
                  <input  type="password" placeholder="סיסמה" name="p"/>
                  <a href="server/resetpassword/resetpassword.php">שככתה את הסיסמה?</a>
                  <button name="submit">כניסה</button>
                </form>
              </div>
              <div class="overlay-container">
                <div class="overlay">
                  <div class="overlay-panel overlay-left">
                    <h1>ברוכים הבאים!</h1>
                    <p>בשביל להיכנס תרשום את הפרטים האישיים שלך</p>
                    <button class="ghost" id="signIn">כניסה</button>
                  </div>
                  <div class="overlay-panel overlay-right">
                    <h1>שלום!</h1>
                    <p>תכניס את הפרטים שלך ותתכיל ללמוד ולקדם את עמצך!</p>
                    <button class="ghost" id="signUp">הרשמה</button>
                  </div>
                </div>
              </div>
            </div>



              <script src="js/reglogin.js"></script>


            <?php 	include 'inc/footer.php'; ?>

              </body>

            </html>


            <?php
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        exit();

      }else {
        echo "no";
      }
    }
echo "ok";  }else {
    echo "error";
  }

   ?>

   <?php
   $error = NULL;

   if (isset($_POST['submit'])) {
     $mysqli = NEW MYSQLi ('localhost', 'root', 'root', 'kidumskillnew');

     $e = $mysqli->real_escape_string($_POST['e']);
     $p = $mysqli->real_escape_string($_POST['p']);
     $p = md5($p);

     $resultSet = $mysqli -> query("SELECT * FROM users WHERE email = '$e' AND password = '$p' LIMIT 1 ");


     if ($resultSet->num_rows !=0) {
       $row = $resultSet->fetch_assoc();
       $verified = $row['verified'];
       $email = $row['email'];
       $date = $row['createdate'];
       $date = strtotime($date);
       $date = date('M d Y',$date);

       if ($verified == 1) {
         //continue
         setcookie('user', $row['username'], time() + 3600, "/");
         setcookie('firstname', $row['firstname'], time() + 3600, "/");

         header('Location: /kidumskill');
       }else {
         $error = "המשתמש הזה עדיין לא אושר דרך המייל, הקישור נשלח  $email ב $date";
       }
     }else {

       $error = "שם משתמש או סיסמה שגויים";

     }

   }
    ?>



<?php 	include 'inc/head.php'; ?>

  <body>

<?php 	include 'inc/loader.php'; ?>


<?php
	include 'inc/header.php';
  ?>
<div class="container">
  <div class="row">
    <div class="container__reg <?php if(isset($_POST['submit1'])) { echo "right-panel-active"; }?>" id="container">
    	<div class="form-container sign-up-container">
    		<form action="reglogin.php" method="post">
    			<h1>ליצור משתמש</h1>
    			<div class="social-container">
    				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
    				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
    				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
    			</div>
            <div class="error_red" style="color:red">
          <?php
            if(!empty($error1)) {
              echo "$error1";
              ?>

              <?php
               }
           ?>
         </div>
    			<span>תשתמש בדואר האלקטרוני שלך</span>
          <input type="text" placeholder="שם משתמש" name="u" />
    			<input type="email" placeholder="דואר אלקטרוני" name="e"/>
          <input type="text" placeholder="שם" name="fn"/>
          <input type="text" placeholder="שם משפחה" name="ln"/>
    			<input type="password" placeholder="סיסמה" name="p"/>
          <input type="password" placeholder="תחזור על הסיסמה" name="p2"/>
    			<button name="submit1">כניסה למשתמש</button>
    		</form>
    	</div>
    	<div class="form-container sign-in-container">
    		<form action="reglogin.php" method="post">
    			<h1>כניסה</h1>
    			<div class="social-container">
    				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
    				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
    				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
    			</div>
    			<span>תכניס את המשתמש</span>

          <div class="error_red" style="color:red">
            <?php
              if(!empty($error)) {
                echo "$error";
                ?>

                <?php
                 }
             ?>
           </div>

    			<input  type="email" placeholder="דואר אלקטרוני" name="e"  />
    			<input  type="password" placeholder="סיסמה" name="p"/>
    			<a href="server/resetpassword/resetpassword.php">שככתה את הסיסמה?</a>
    			<button name="submit">כניסה</button>
    		</form>
    	</div>
    	<div class="overlay-container">
    		<div class="overlay">
    			<div class="overlay-panel overlay-left">
    				<h1>ברוכים הבאים!</h1>
    				<p>בשביל להיכנס תרשום את הפרטים האישיים שלך</p>
    				<button class="ghost" id="signIn">כניסה</button>
    			</div>
    			<div class="overlay-panel overlay-right">
    				<h1>שלום!</h1>
    				<p>תכניס את הפרטים שלך ותתכיל ללמוד ולקדם את עמצך!</p>
    				<button class="ghost" id="signUp">הרשמה</button>
    			</div>
    		</div>
    	</div>
    </div>
  </div>
</div>



<?php if(isset($_POST['submit1'])) {
  echo "ok";
}else {
  echo "error";
} ?>
  <script src="js/reglogin.js"></script>


<?php
	// include 'inc/footer.php';
  ?>

  </body>

</html>
