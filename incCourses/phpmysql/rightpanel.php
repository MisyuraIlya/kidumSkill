<div class="panel-right">
  <div class="lessons scroll">

      <!-- выделет какой курс сейчас надо красиво вписать -->



        <div class="container">
          <div class="row">
            <div class="todo">
              <div class="lesson_todo">
                <p>שיעור:<?php echo $item["title_desc"]; ?></p>
              </div>
              <div class="title">
                <p> לעשות: <?php echo $item["description"]; ?></p>
              </div>
            </div>
          </div>
        </div>

      <!--  -->
      <?php
  $itemList = $rating->getPhpMySqlList();


  if ($item["id"] > $exme1 && $block == 0 && $username = $_COOKIE['user']){
    echo "<script type='text/javascript'>alert('צריך לעשות מבחן כדי להתקדם'); history.back(-1)</script>   ";
 }elseif ($item["id"] > $exme2 && $block == 1 && $username = $_COOKIE['user']) {
   echo "<script type='text/javascript'>alert('צריך לעשות מבחן כדי להתקדם'); history.back(-1)</script>   ";
 }elseif ($item["id"] > $exme3 && $block == 2 && $username = $_COOKIE['user']) {
   echo "<script type='text/javascript'>alert('צריך לעשות מבחן כדי להתקדם'); history.back(-1)</script>   ";
 }

?>


<?php
// снимает не нужные символы для метода active
$current_page = substr($_SERVER['REQUEST_URI'], 1);  // trim off the leading slash
$current_page = str_replace('kidumskill/incCourses/phpmysql/phpmysql.php?item_id=', '', $current_page);

 ?>

<?php  foreach($itemList as $key => $item){
  ?>

  <!-- инкрементировать чтобы началось с 1 а не 0  -->

  <?php $key++; ?>
<?php if ($current_page == $key) { ?>
  <div class="container-fluid ">
    <div class="row">
      <div class="lesson active">
        <div class="time">
          <p>  <?php echo $item["clock"]; ?></p>
        </div>
        <a href="phpmysql.php?item_id=<?php echo $item["id"]; ?>" style="text-decoration: none;" >
        <div class="lesson_images">
          <img src="../../images/<?php echo $item["image"];?>" alt="video" width="40" height="40" class="lesson_image">
        </div>
        <div class="lesson_number <?php if($key > 9){echo "bigthen10";} ?>">
          <p>  <?php echo $item["lesson_number"]; ?></p>
        </div>
        <div class="lesson_title">
          <p>  <?php echo $item["name"]; ?></p>
        </div></a>
      </div>
    </div>
  </div>
<?php }else { ?>
            <div class="container-fluid ">
              <div class="row">
                <div class="lesson ">
                  <div class="time">
                    <p>  <?php echo $item["clock"]; ?></p>
                  </div>
                  <a href="phpmysql.php?item_id=<?php echo $item["id"]; ?>" style="text-decoration: none;" >
                  <div class="lesson_images">
                    <img src="../../images/<?php echo $item["image"];?>" alt="video" width="40" height="40" class="lesson_image">
                  </div>
                  <!-- выравнивает в кружке номер задания  -->
                  <div class="lesson_number <?php if($key > 9){echo "bigthen10";} ?>">
                    <p>  <?php echo $item["lesson_number"]; ?></p>
                  </div>
                  <div class="lesson_title">
                    <p>  <?php echo $item["name"]; ?></p>
                  </div></a>
                </div>
              </div>
            </div>
          <?php  } ?>
            <?php } ?>

              <div style="text-align: center; color: rgb(83, 100, 93);"> כל הקורסים בתהליך בניה .
                <br> שיעורים בסייבר בתהלילך בנייה
              </div>


      <!--пустая для большего места -->

  </div>
</div>
