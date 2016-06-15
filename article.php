<?php
	
	require 'lib/init.php';
	
	$id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : '';

	if($id == ''){
	$info = <<<INFO
	<script>window.alert('Wrong ID'); history.back();</script>
INFO;
	echo $info;
	}

	$sql = "SELECT * FROM `tn_article` WHERE id={$id}";


	$article = $dao->fetchRow($sql);
	
	require TMP_PATH . 'article.html';
