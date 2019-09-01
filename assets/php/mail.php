<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mail = "Lowongan Pekerjaan dari".$_POST['email'];
$msgForm = $_POST['message'];
$msg = wordwrap($msgForm,70);
mail('aditya.augusta5@gmail.com','$mail','$msg');
}
?>  