<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/login.css" />
		<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
		<script>
			$(function(){
				$('img[title="login"]').click(function(){
					$('form[name="myForm"]').submit();
				});
				

			}); 
		</script>
	</head>
	<body>
		<form action='__URL__/doLogin' method='post' name='myForm'>
			用户名：<input type='text' name='adminname'/><br/>
			密　码：<input type='password' name='password'/><br/>
			<img src='__PUBLIC__/Images/login.gif' title='login' class='submit'/>

		</form>
	</body>
</html>