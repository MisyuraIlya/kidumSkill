<?php
$username = $_COOKIE['user'];
$str= mysqli_connect('localhost', 'root', 'root', 'kidumskillnew');
$select= mysqli_query($str,  "SELECT * FROM users  WHERE `username` = '".$username."' ");

while ($cert= mysqli_fetch_array($select) ) {

  $certificat = $cert['certphp'] ;

$idUser = $cert['id'];
}

$select2 = mysqli_query($str, "SELECT * FROM cert  WHERE `user_id` = '".$idUser."'");


 ?>

<?php 	include 'inc/head.php'; ?>

  <body>

<?php
include 'inc/header.php';
 ?>
 <div class="mycert">
      <h3>התעודות שלי</h3>
 </div>

<?php foreach ($select2 as $key => $certification): ?>

<div class="container" >
  <div class="row">
    <div class="certifications background-color-cert" dir="rtl">

      <div class="back-cert-item">

      <div class="col-md-3  image-cert">
        <img class="zoom-dark" src="cert/certificate/<?php echo $certification['vkey']; ?>.png" alt="" width="300px" height="150px">
        <div class="name_course_cert">
        <h2><?php echo $certification['name']; ?></h2>
        </div>


        <a href="cert/certificate/<?php echo $certification['vkey']; ?>.png" download  id="button">הורד</a>
      </div>
    </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php if (empty($certification)) {
  echo "
 <div class='mycert'>
<h3>אין כרגע תעודות</h3>
 </div>
  ";
} ?>
<script src="js/medium-zoom.min.js"></script>
<script src="js/zoom.js"></script>
  </body>

</html>
