<?php
if(isset($_POST['firstname']) && isset($_POST['lastname'])){
  $name = $_POST["firstname"];
  $surname = $_POST["lastname"];
  echo "Ваше имя: <b>". $name . " " . $surname . "</b>";
?>
