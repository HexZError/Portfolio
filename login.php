<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = $_REQUEST['fname'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['Message'];
		$myfile = fopen("info.txt", "a") or die("unable to open file");
		fwrite($myfile,",Name= ");
		fwrite($myfile,$name);
		fwrite($myfile,",Email= ");
		fwrite($myfile,$email);
		fwrite($myfile,",Message= ");
		fwrite($myfile,$message);
		fclose($myfile);
	}	
?>