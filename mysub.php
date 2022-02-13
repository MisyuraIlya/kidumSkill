<?php 	include 'inc/head.php'; ?>

  <body>




<?php
 	include 'inc/header.php';
  ?>


<?php
 $username = $_COOKIE['user'];

$str= mysqli_connect('localhost', 'root', 'root', 'kidumskillnew');
$selectSub= mysqli_query($str,  "SELECT * FROM users  WHERE `username` = '".$username."' ");

while ($r= mysqli_fetch_array($selectSub) ) {
 $iduser = $r['id'] ;

}

$selectSub2= mysqli_query($str,  "SELECT * FROM user_subscriptions  WHERE `user_id` = '".$iduser."' ");
while ($r2= mysqli_fetch_array($selectSub2) ) {
 $paymethod= $r2['payment_method'] ;
 $validfrom = $r2['valid_from'];
 $validto = $r2['valid_to'];
 $paymentgross = $r2['payment_gross'];
}

// echo "$paymethod";
// echo "$validfrom";
// echo "$validto";
// echo "$paymentgross";
?>


<div class="container">
  <div class="row">
    <div class="subscription">
      <h2>היסטוריה מניות</h2>
      <h5>עדיין לא רכשתם מנוי?</h5>
      <div class="all_subs">
        <p>כל היסטוריית המניום</p>
        <ul class="sub_menu">
          <!-- <li>מספר מנוי</li> -->
          <li>תאריך המנוי </li>
          <li>שיטת התשלום</li>
          <li>עלות</li>
          <li>סיום תאריך המנוי</li>
        </ul>
        <?php foreach ($selectSub2 as $key => $subs): ?>
          <ul class="sub_menu_num">
            <li><?php echo $subs['valid_from']; ?></li>
            <li><?php echo $subs['payment_method']; ?></li>
            <li><?php echo $subs['payment_gross']; ?>$</li>
            <li><?php echo $subs['valid_to']; ?></li>

          </ul>
        <?php endforeach; ?>

      </div>

    </div>
  </div>
</div>
