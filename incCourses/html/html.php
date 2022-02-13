<?php
 // error_reporting(0);
 ?>
 <?php $mysqli = NEW MYSQLi ('localhost', 'root', 'root', 'kidumskillnew'); ?>
<?php include('../../inc/headerCourse.php'); ?>
<title>
</title>
</head>
<?php
 include('../../inc/containerCourse.php');
  ?>
<?php include('../../pay.php'); ?>
<div class="container-fluid page-container">
  <div class="panel-container">
          <?php
      include '../../class/Rating.php';
      $rating = new Rating();
      $itemDetails = $rating->getHtml($_GET['item_id']);
      $limit = $rating->getHtml($_GET['item_id']);
      foreach($itemDetails as $item){
      ?>
  <?php include('leftpanel.php') ?>
    <div class="splitter">
    </div>
    <?php include('rightpanel.php') ?>
      <?php } ?>
  </div>
</div>
<?php
include('../../inc/footerCourse.php');
?>
