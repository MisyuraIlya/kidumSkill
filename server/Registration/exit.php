<?php
setcookie('user', $user['username'], time() - 3600, "/");
setcookie('firstname', $row['firstname'], time() - 3600, "/");
header('Location: /kidumskill')

 ?>
