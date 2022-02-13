<?php
  $filecookie = $_COOKIE['user'];
  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "", "kidumskillnew");

  if (isset($_POST['save_profile'])) {
    // for the database

    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    // if($_FILES['profileImage']['size'] > 2000) {
    //   $msg = "תמונה שוקלת יותר מדי";
    //   $msg_class = "alert-danger";
    // }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
  $sql = "UPDATE users SET profile_image='$profileImageName' WHERE username = '$filecookie' ";
        if(mysqli_query($conn, $sql)){
          // $msg = "שיניתם את התמונה";
          $msg_class = "alert-success";
          echo "<meta http-equiv='refresh' content='0'>";

        } else {
          // $msg = "יש תקלה עם מערכת הנתונים";
          $msg_class = "לא בחרתם תמונה";
        }
      } else {
        $error = "קרתה תקלה נסו שוב";
        $msg = "לא בחרתם תמונה";
      }
    }
  }
  if (isset($_POST['delete'])) {
    $sqld = mysqli_query($conn ,  "SELECT * FROM users WHERE username = '$filecookie' ");
    
    while ($r= mysqli_fetch_array($sqld)) {
      
      $block = $r['profile_image'] ;
     }

     unlink("images/$block");
     

      $sqld = "UPDATE users SET profile_image='' WHERE username = '$filecookie' ";

      if(mysqli_query($conn, $sqld)){
        // $msg = "התמונה נמחקה";
        $msg_class = "alert-success";
        echo "<meta http-equiv='refresh' content='0'>";

      } else {
        // $msg = "התמונה לא נמחקה";
        $msg_class = "alert-danger";
      }
  }
?>
