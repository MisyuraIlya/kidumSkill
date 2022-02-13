<?php

$username = $_COOKIE['user'];
//How to Generate Bulk Certificate
$con=mysqli_connect('localhost','root','','kidumskillnew');//connecting to database
$query="select * from users WHERE `username` = '".$username."' " ;//To retrieve students into from database

$fire=mysqli_query($con,$query);
while($row=mysqli_fetch_array($fire))
{
$idUser = $row['id'];
}
$select12= mysqli_query($con,  "SELECT * FROM cert  WHERE `user_id` = '".$idUser."' ");

while ($cert12= mysqli_fetch_array($select12) ) {

  $idcert = $cert12['user_id'] ;
  $namecert = $cert12['name'];
}
echo "$idcert";
echo "$namecert";
$fire=mysqli_query($con,$query);
while($row=mysqli_fetch_array($fire))
{


header('content-type:image/jpeg');
$font= realpath('arial.ttf');
$image=imagecreatefromjpeg("formathtml.jpg");
$color=imagecolorallocate($image, 51, 51, 102);
$date=date('d F, Y');//Current Date
imagettftext($image, 18, 0, 880, 188, $color,$font, $date);
$idUser = $row['id'];
$vkey_cert = md5(time());

$name=$_COOKIE['firstname'];
$lastname = $row['lastname'];
$result = $name . " " . $lastname;

if ($idcert == $idUser && $namecert == 'html') {
  header('Location: /kidumskill');
}
else {
  imagettftext($image, 48, 0, 120, 520, $color,$font, $result);
  imagejpeg($image,"certificate/$vkey_cert.png");//Storing certificate here
  imagedestroy($image);
  $insert1 = $con->query("INSERT INTO cert (user_id,name,vkey) VALUES ('$idUser','html','$vkey_cert')");

}
header('Location: /kidumskill');
}

?>
