<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<load href="__PUBLIC__/Image/image.jpg">
		<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
		<script>
			$(function(){
				$('img[title="login"]').click(function(){
					$('form[name="myForm"]').submit();
				});
				
				$('img[class="register"]').click(function(){
					window.location='__APP__/Register/register';
				});
			}); 
		</script>
</head> 

<body> 

<div style=" width:1007px; height:150px; margin-left:auto; margin-right:auto">
	<img src="__PUBLIC__/Images/bg_header.jpg" />
</div>


<div class="menu"> 
<ul> 

<li ><a href="__APP__/Index/index" style="width:167px; margin-left:0px">首页</a></li>


<li ><a>学习指南 
<ul> 
<li><a href="__APP__/Course/introduce" target="_blank">课程介绍</a></li> 
<li><a href="__APP__/Course/method" target="_blank">教学方法</a></li> 
<li><a href="__APP__/Course/dagang" target="_blank">教学大纲</a></li> 
</ul> 
</li> 


<li><a>理论教学
<ul> 
<li><a href="__APP__/Course/method" target="_blank">学习方法</a></li> 
<li><a href="__APP__/Course/kejian">中文课件</a></li> 

</ul> 
</li> 





<li><a>课程资源
<ul> 
<li><a href="__APP__/Course/downloadruanjian">软件下载</a></li> 
<li><a href="__APP__/Course/practice">例题习题</a></li> 
<li><a href="__APP__/Course/tuozhan">拓展资源</a></li>
<li><a href="__APP__/Course/shipin">教学视频</a></li>
</ul> 
</li> 



<li><a href="__APP__/Exam/exam">在线测试</a></li>



<li><a href="__APP__/Personal/personal">个人中心</a></li><br/><br/>
</ul> 
</div> 


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<head>
<title>软件下载</title>
<style type="text/css">
.list{
	border:1px solid #333333;
	width:1007px;
	margin-left:auto; 
	margin-right:auto;
	text-align:left;

}
.list th{
	background:#effcff;
	height:40px;
}

</style> 
</head>
<body>

<!-- <table class="list">
<tr style=" bgcolor: #EFFCFF ">
  <th>姓名</th>
  <td>Bill Gates</td>
</tr>
<tr>
  <th>电话</th>
  <td>555 77 854</td>
</tr>
<tr>
  <th>电话</th>
  <td>555 77 855</td>
</tr>
</table>  -->

<table  class='list'>
<tr>
<th>软件ID</th>
<th>软件名称</th>
<th>软件大小</th>
<th>下载次数</th>
<th>下载</th>
</tr>

<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	<td><?php echo ($vo["id"]); ?></td>
	<td><?php echo ($vo["name"]); ?></td>
	<td><?php echo ($vo["size"]); ?>M</td>
	<td><?php echo ($vo["count"]); ?></td>
	<td><a href="/bjl/index.php/Course/download/id/<?php echo ($vo["id"]); ?>">下载</a></td>

	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>



</body>