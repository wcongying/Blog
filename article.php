<?php
	
	require 'lib/init.php';
	
	$id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : '';

	if($id == ''){
	$info = <<<INFO
	<script>window.alert('获取的id不正确'); history.back();</script>
INFO;
	echo $info;
	}

	$sql = "SELECT * FROM `tn_article` WHERE id={$id}";

	//对dao工具类，添加一个方法，只返回一条记录.
	$article = $dao->fetchRow($sql);
	
	//引入模板
	require TMP_PATH . 'article.html';