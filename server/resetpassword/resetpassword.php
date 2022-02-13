<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'config.php';
    // Instantiation and passing `true` enables exceptions

    if(isset($_POST["email"])) {

      $emailTo =  $_POST["email"];

      $code = uniqid(true);
      $query = mysqli_query($con, "INSERT INTO resetpassword(code,email) VALUES('$code','$emailTo')");
      if (!$query) {
        exit("ERROR");
      }



      $mail = new PHPMailer(true);

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
          $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetpass.php?code=$code";
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = 'KidumSkill Reset password';
          $mail->Body    = "לחץ כדי לאפס את הסיסמה שלך <a href='$url'>לחץ כאן</a>";
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

          $mail->send();
          ?>
          <!DOCTYPE html>
          <html lang="en" dir="ltr">
            <head>
              <meta charset="utf-8">
              <link rel="stylesheet" href="../../css/header.css">
              <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
              <link rel="stylesheet" href="../../css/style.css">
              <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700&display=swap" rel="stylesheet">
              <script src="https://kit.fontawesome.com/a076d05399.js"></script>

              <link rel="stylesheet" href="../../css/resetpassword.css">

              <title></title>
            </head>

            <body>

          <?php 	include '../../inc/loader.php'; ?>


          <?php 	include '../../inc/header.php'; ?>



         <div class="login-box">
           <h2>איפוס סיסמה</h2>
           <div class="resetpass_succses">
              <?php echo'נשלח קישור למייל שלך לאיפוס סיסמה'; ?>
           </div>

           <form  method="post">
             <div class="user-box">
               <input type="text" name="email" required="" placeholder="" autocomplete="off">
               <label>EMAIL</label>
             </div>
             <div class="input">
                 <input type="submit" name="submit" value="רסט סיסמה">
             </div>


           </form>
         </div>

           </body>

         </html>
         <?php
      } catch (Exception $e) {
        ?>
        <!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="../../css/header.css">
            <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../css/style.css">
            <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>

            <link rel="stylesheet" href="../../css/resetpassword.css">

            <title></title>
          </head>

          <body>

        <?php 	include '../../inc/loader.php'; ?>


        <?php 	include '../../inc/header.php'; ?>



       <div class="login-box">
         <h2>איפוס סיסמה</h2>
         <div class="resetpass_error">
            <?php echo "לא נשלך למייל  {$mail->ErrorInfo}"; ?>
         </div>

         <form  method="post">
           <div class="user-box">
             <input type="text" name="email" required="" placeholder="" autocomplete="off">
             <label>EMAIL</label>
           </div>
           <div class="input">
               <input type="submit" name="submit" value="רסט סיסמה">
           </div>


         </form>
       </div>

         </body>

       </html>
        <?php

      }

      exit();

    }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="../../css/header.css">
     <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="../../css/style.css">
     <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>

     <link rel="stylesheet" href="../../css/resetpassword.css">

     <title></title>
   </head>

   <body>

 <?php 	include '../../inc/loader.php'; ?>


 <?php 	include '../../inc/header.php'; ?>



<div class="login-box">
  <h2>איפוס סיסמה</h2>

  <form  method="post">
    <div class="user-box">
      <input type="text" name="email" required="" placeholder="" autocomplete="off">
      <label>EMAIL</label>
    </div>
    <div class="input">
        <input type="submit" name="submit" value="רסט סיסמה">
    </div>


  </form>
</div>

  </body>

</html>
