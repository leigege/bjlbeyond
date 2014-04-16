<?php if (!defined('THINK_PATH')) exit();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<script language="javascript" src="jquery.js"></script>
<style type="text/css">
<!--
* { 
	margin:0px; 
	padding:0px;
}
html, body{	
	height:100%;
	overflow: hidden;

}
html>body{		/*-- for !IE6.0 --*/
	width: auto;
	height: auto;
	position: absolute;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	
}
body {
	border:8px solid #ffffff;
	background-color: #ffffff;min-width:230px;
}
#mainDiv {
	width: 100%;
	height: 100%;
    padding:60px 0px 25px 0px;;
	
	
}
#centerDiv{
	width: 100%;
	height: 100%;
	background-color:#00CCFF;
	padding-left:158px;
}
#mainDiv>#centerDiv{		/*-- for !IE6.0 --*/	
	width: auto;
	height: auto;
	position: absolute;
	top: 56px;
	left: 0px;
	right: 0px;
	bottom: 20px;
	
}
#left{
width:158px;
height:100%;
background:url(__PUBLIC__/Image/slide.jpg) repeat-y;
position:absolute;
left:0px;
}
#lhead{
background:url(__PUBLIC__/Image/left-head.jpg) left top no-repeat;
height:25px;
	font-size:14px;
	color:#FF9933;
    text-align:center;
	line-height:25px;
}
#right{
width:100%;
height:100%;
background:#ffffff;
position:absolute;
overflow-y:auto;
border:1px #003366 solid;
padding:20px 0 0 10px;
font-size:12px;
font-family:"宋体";
}
#centerDiv>#right{
width:auto;
height:auto;
position:absolute;
top:0px;
right:0px;
left:158px;
bottom:0px;
}
#topDiv{
	width:100%;
	height:56px;

	background:url(__PUBLIC__/Image/head-bg.jpg) repeat-x;
	position:absolute;
	top:0px;
	overflow:hidden;
}
#topDiv ul{
list-style:none;
font-size:12px;

width:100%;
margin:0;
padding:0;
}
#topDiv ul li{
float:left;
width:15%
}
#topDiv ul li a {
display:block;
width:100%;
height:25px;
line-height:25px;
background:url(__PUBLIC__/Image/menu-bg.jpg) repeat-x;
color:#FFFFFF;
direction:none;
text-align:center;
border-bottom:1px #000066 solid;
border:1px #06597D solid;
}
#tmenu{
width:100%;
position:absolute;
left:12%;
bottom:0;
padding-left:15%;
margin-left:-15%;
}
#current{
background:#ccc;
height:25px;
line-height:25px;
margin:-20px 0 0 -10;
overflow:hidden;
}
#bottomDiv{
	width:100%;
	height:20px;
	background:url(__PUBLIC__/Image/bottom.jpg) repeat-x;
	position:absolute;
	bottom:0px;
	bottom:-1px;		 /*-- for IE6.0 --*/
}
#left ul{
list-style:none;
font-size:12px;
margin:50px 0 0 8px;
}
#left ul li a{
display:block;
width:140px;
height:40px;
line-height:25px;
background:url(__PUBLIC__/Image/menu-bg.jpg) repeat-x;
color:#FFFFFF;
direction:none;
text-align:center;
border-bottom:1px #000066 solid;
border:1px #06597D solid;
}
#left ul li a:hover{

background:url(__PUBLIC__/Image/menu-bg.jpg) 0px 25px;
color:#99FFCC;
direction:none;
text-align:center;
border-bottom:1px #000066 solid;
}
#form{
width:80%;
height:99%;
margin:0 auto;
_margin-left:20%;

}
fieldset{
width:100%;
margin:20 auto;
line-height:35px;
padding-left:20PX;
}

.watch{
	margin-left:450px;

}


.user{
	margin-left:auto;
	margin-right:auto;
}

.result_page{
	margin-left:300px;
	margin-top:30px;
}
-->
</style>
</head>
<body>
<div id="mainDiv">
	<div id="topDiv">
	<div id="tmenu"><ul>
	<li ><a href="__URL__/index">后台首页</a></li>
	<li ><a href="/bjl/index.php/Index/index">前台首页</a></li>
	 <li ><a href="__URL__/dologout">退出</a></li>

	</ul></div></div>
	<div id="centerDiv">
	
	<div id="left">
	<div id="lhead">管理菜单</div>
	<ul>
	<li ><a href="__APP__/Resourse/resourse">资源管理</a></li>
	<li ><a href="__URL__/message">信息管理</a></li>
	<li ><a href="__URL__/user">用户管理</a></li>
	<li ><a href="__URL__/dayi">在线答疑</a></li>
	<li ><a href="__URL__/liuyan">管理员留言</a></li>
	</ul>
	</div>
	<div id="right"> 

        <?php if(is_array($list)): foreach($list as $key=>$vo): ?>留言题目：<?php echo ($vo["title"]); ?><br/>
                      			留言内容：<?php echo ($vo["content"]); ?><br/>
                      			留言时间：<?php echo ($vo["addtime"]); ?><br/>
                      			留言人：<?php echo ($vo["username"]); ?><br/>
                      			留言回复：<?php echo ($vo["reply"]); ?><br/>
                      			
                      			<hr/><?php endforeach; endif; ?>
                      	<?php echo ($page); ?>







 	
 	 <div  class="result_page"><?php echo ($page); ?></div>

</div></div>
	<div id="bottomDiv"></div>
</div>
<script language="javascript">
$("#test1").toggle(function(){$("#test").slideDown()},function(){$("#test").slideUp()})
</script>
</body>
</html>