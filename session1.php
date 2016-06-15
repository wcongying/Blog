<?php

	$arr = array('no1'=>'Dream', 'writer'=>'CaoXue');

	//放入到session
	//1. 启用session
	session_start();
	//2. 把数据放入session
	$_SESSION['myarr'] = $arr;
	echo 'save ok';
