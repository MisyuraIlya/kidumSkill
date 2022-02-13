<?php
// error_reporting(0);
 ?>
<?php
$username = $_COOKIE['user'];

$str= mysqli_connect('localhost', 'root', 'root', 'kidumskillnew');
$select= mysqli_query($str,  "SELECT * FROM users  WHERE `username` = '".$username."' ");

while ($r= mysqli_fetch_array($select) ) {
 $iduser = $r['id'] ;
  $block = $r['html'] ;

}
?>



<?php
$select2 = mysqli_query($str, "SELECT * FROM `user_subscriptions` WHERE `user_id` = $iduser");
while ($r2= mysqli_fetch_array($select2) ) {
 $idsub = $r2['user_id'];
 $statusp = $r2['payment_status'] ;


}


$select3 = mysqli_query($str,  "SELECT * FROM htmlexmeblock");
while ($r3 = mysqli_fetch_array($select3)) {
  $exme1 = $r3['exme1'];
  $exme2 = $r3['exme2'];
  $exme3 = $r3['exme3'];
}



// if ($iduser == $idsub && !empty($iduser) && !empty($idsub)) {
//   echo "video";
// }else {
//   echo "bye";
// }
//






mysqli_close($str);

?>

<?php

// if( ) {
//   echo "продолжим видео";
// }else {
//   echo "покупай подписку";
// }

 ?>
