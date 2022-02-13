<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/courses/courses.css">
      <link rel="stylesheet" href="css/header.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>




<?php
	include 'inc/header.php';
   ?>


   <?php if (isset($_POST['html']))  {
      header('Location: /kidumskill/incCourses/html/html.php?item_id=1');
   }elseif (isset($_POST['css'])) {
       header('Location: /kidumskill/incCourses/css/css.php?item_id=1');
   }elseif (isset($_POST['jsjq'])) {
       header('Location: /kidumskill/incCourses/jsjq/jsjq.php?item_id=1');
   }elseif (isset($_POST['phpmysql'])) {
       header('Location: /kidumskill/incCourses/phpmysql/phpmysql.php?item_id=1');
     }?>





<div class="container-fluid backround_image">
  <div class="background_color">
  <div class="logo_course">
    <h2> WEB תוכנה</h2>
  </div>
    <div class="row">

      <?php
      include 'class/Rating.php';
      $rating = new Rating();
      $courseList = $rating->getCourseList();
      foreach($courseList as $course){

      ?>
      <div class="col Course_card">
        <div class="card_html">
            <div class="course_image column">

                <a href="gogi.com"><figure><img src="<?php echo $course["image"]; ?>" alt="Italian Trulli" class="course_img" href="<?php echo $course["type"];?>"></figure></a>
            </div>
            <div class="desc">
                <div class="style_image">
                  <ul >
                    <li><img src="images/laptopC.png" alt="Italian Trulli"></li>
                    <li><img src="images/coursesC.png" alt="Italian Trulli"></li>
                    <li><img src="images/clockC.png" alt="Italian Trulli"></li>
                  </ul>
                </div>
                <div class="desc_desc">
                  <ul dir="rtl">
                    <li>שיעורים:<?php echo $course["lessons"]; ?></li>
                    <li>מבחנים:<?php echo $course["homework"]; ?></li>
                    <li>זמן:<?php echo $course["total_time"]; ?></li>
                  </ul>
                </div>
                <div class="start">
                  <button type="button" class="btn btn-success" onclick="window.location.href = '<?php echo $course["type"];?>';" >להתחיל</button>
                </div>
            </div>
        </div>
      </div>
<?php } ?>

      </div>
    </div>
</div>




<?php
	// include 'inc/footer.php';
   ?>

  </body>

</html>
