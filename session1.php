<?php

	$arr = array('no1'=>'红楼梦', 'writer'=>'曹雪芹');

	//放入到session
	//1. 启用session
	session_start();
	//2. 把数据放入session
	$_SESSION['myarr'] = $arr;
	echo 'save ok';