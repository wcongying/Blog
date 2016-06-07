<?php
	
	
	//编写index.php 文件
	//1. 使用dao 来获取数据
	//2. 引入模板文件
	//3. 显示数据
	require 'lib/init.php';

	//处理用户的查询分类的请求

	$cat_id = isset($_GET['cat_id']) ? $_GET['cat_id'] : '';

	//这里一个开发的技巧，先设置一个条件变量
	$where = " status='publish' ";
	if($cat_id !== ''){
		$where .= " AND category_id = $cat_id ";
	}

	$sql = "SELECT * FROM tn_article WHERE $where";
	$article_list = $dao->fetchAll($sql);

	//取出分类信息
	$sql = "SELECT id, title FROM `tn_category` ORDER BY order_number";
	
	$category_list = $dao->fetchAll($sql);

	//讨论 php 文件的 数据，能不能在引入的模板文件使用?
	
	require  TMP_PATH . 'index.html';