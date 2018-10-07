<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['mailFrom'];
  $tel= $_POST['tel'];
  $message = $_POST['message'];

  $mailTo = "deepak.chaitime.epizy.com"
  $headers ="From: ".mailFroml;
  $txt = "You have reciemed email from".$name.".\n\n".$message;


mail($mailTo,$tel,$txt,$headers)
header("Location: index.html?mailsend");
  


}



 ?>
