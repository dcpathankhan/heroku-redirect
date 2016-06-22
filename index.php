<?php
	$request_token = $_GET['request_token'];
	echo $request_token;
	$page = file_get_contents("http://ec2-52-220-19-181.ap-southeast-1.compute.amazonaws.com?request_token=".$request_token);
	$myfile = fopen("logfile.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $request_token);
	fclose($myfile);
?>