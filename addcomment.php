<?php

	$link = mysqli_connect("localhost","root","root","api");
    if(!$link){
       echo mysqli_errno($link);	     
    }
    mysqli_select_db($link,"fruit_crush");
    mysqli_set_charset($link,"utf8");



	$comment = $_POST['comment'];
	$time = date('m').'月'.date('d').'日';
	
	
	$addsql = "insert into comment(comment,date) values ('$comment','$time')";
	$ret = mysqli_query($link, $addsql);
	
?>