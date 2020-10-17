
<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$text = $_POST['text'];

	$mailTo = "presekplus@outlook.com";
	$headers = "From: ".$email;
	$txt = "You have received an e-mail from ".$name."\n\n".$text;
	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html");

}
?>
