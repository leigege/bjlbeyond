<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>会员注册</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script>

function checkSubmit()
{
if(document.form2.username.value=="")
{
 document.form2.username.focus();
 alert("用户名不能为空！");
 return false;
}
if(document.form2.pwd.value=="")
{
 document.form2.pwd.focus();
 alert("登陆密码不能为空！");
 return false;
}
if(document.form2.userpwdok.value!=document.form2.pwd.value)
{
 document.form2.userpwdok.focus();
 alert("两次密码不一致！");
 return false;
}
if(document.form2.age.value=="")
{
 document.form2.age.focus();
 alert("用户年龄不能为空！");
 return false;
}
if(document.form2.email.value=="")
{
 document.form2.email.focus();
 alert("Email 不能为空！");
 return false;
}
}
</script>
</head>

<body>

<div class="clearfix"></div><!-- 清除浮动 -->

<div class="wrap">

       	<div class="login_main_white">
         
                <div class="clearfix"></div>
         </div>


           <dl>
            <form name="form2" action="__URL__/doReg" method="post" onSubmit="return checkSubmit();">
                      

		   <dd>用户名：
		   　<input type="text" name="username"> * </dd>
			
			<dd>登陆密码：
			<input name="pwd" type="password" class="log_input2" /> *</dd>
			
			<dd>重复密码：
			<input name="userpwdok" type="password" class="log_input2" /> *</dd>

			<dd>您的性别：
			<input type="radio" name="sex" value="男" checked>男 <input type="radio" name="sex" value="女">女</dd>

			<dd>你的年龄：
			<input name="age" type="text" class="log_input2" /> *</dd>

			<dd>你的专业：
			<input name="zy" type="text" class="log_input2" /> </dd>
			
			<dd>电子邮箱：
			<input name="email" type="text" class="log_input2" /> *</dd>
	
			<dd><br /><input type="submit" name="Submit2" value="确定注册" class="Btn"  style="cursor:pointer"/>
			&nbsp;&nbsp;
			<input type="reset" name="Submit22" value="重 置" class="Btn" style="cursor:pointer"/>
			<br /><br />
            </dd>
            </form>
</dl>

</div>


</body>
</html>