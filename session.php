<?php
	session_start();
	if(isset($_SESSION['view'])){
		$_SESSION['view']+=1;
	}
	else{
		$_SESSION['view']=1;
	}
	$msg = "you have visited this page ". $_SESSION['view'];
	$msg .=" in this session";
	echo $msg;
?>