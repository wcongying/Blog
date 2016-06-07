<?php

	//如何读取sesion数据
	//启用session
	session_start();

	$arr = $_SESSION['myarr'];

	echo '<pre>';
	echo '<br> session 数据是';
	var_dump($arr);