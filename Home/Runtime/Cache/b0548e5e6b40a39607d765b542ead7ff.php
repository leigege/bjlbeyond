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
<title>在线测试</title>

  <style type= "text/css"> 
.wen{
font-weight:bold;
}

.tiku{
	margin-left:220px;
	margin-top:50px;
	
}


  </style> 

<!--     
        以下为css样式 
        <style type= "text/css"> 
            .daojishi h2 
            {  
                font-family:Helvetica, Microsoft YaHei, Arial, sans-serif;  
                font-size:14px; 
                margin-bottom:5px;  
                color:#151515; 
            } 
            .daojishi #timer 
            { 
                font-family:Helvetica, Microsoft YaHei, Arial, sans-serif;  
                font-size:14px; 
                color:#151515; 
                font-weight:bold; 
            } 
        </style> 
        <script type = "text/javascript" src = "timer.js"> 
        </script> 
    </head> 
    <body onload = "timer()"> 
        <div class = "daojishi"> 
            <h2>剩余时间为：</h2> 
            <div id = "timer"> 
            </div> 
        </div> 
    </body> 
</html> 
<script>
function timer() 
            { 
                var ts = (new Date(2012, 11, 11, 9, 0, 0)) - (new Date());//计算剩余的毫秒数 
                var dd = parseInt(ts / 1000 / 60 / 60 / 24, 10);//计算剩余的天数 
                var hh = parseInt(ts / 1000 / 60 / 60 % 24, 10);//计算剩余的小时数 
                var mm = parseInt(ts / 1000 / 60 % 60, 10);//计算剩余的分钟数 
                var ss = parseInt(ts / 1000 % 60, 10);//计算剩余的秒数 
                dd = checkTime(dd); 
                hh = checkTime(hh); 
                mm = checkTime(mm); 
                ss = checkTime(ss); 
                document.getElementById("timer").innerHTML = dd + "天" + hh + "时" + mm + "分" + ss + "秒"; 
                setInterval("timer()",1000); 
            } 
            function checkTime(i)   
            {   
               if (i < 10) {   
                   i = "0" + i;   
                }   
               return i;   
            }  

            </script> -->
            <body>
<!--             
   <div class="tiku"> 
   <form name="input"  action="__URL__/check" method="post">  
  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="wen"><?php echo ($vo["id"]); ?>:<?php echo ($vo["content"]); ?></div><br/>
	A: <?php echo ($vo["optionA"]); ?><input type="radio" name="question" value="A" ><br/>
	B: <?php echo ($vo["optionB"]); ?><input type="radio"  name="question" value="B" ><br/>
	C: <?php echo ($vo["optionC"]); ?><input type="radio"  name="question" value="C" ><br/>
	D: <?php echo ($vo["optionD"]); ?><input type="radio"  name="question" value="D" ><br/><br/><?php endforeach; endif; else: echo "" ;endif; ?>
   
    <input type ="submit" value ="提交">
   	</form>  	
   

 </div> -->
   <div class="tiku"> 
    <form name="input"  action="__URL__/check" method="post">  
    	<div class="wen">1：如何在已经创建好的表上添加一个外键</div><br/>
	A: Alter table 表名add foreign key（键名）reference 关联表（关联键名）<input type="radio" name="question1" value="A" ><br/>
	B: Alter table 表名add Primary key（键名）reference 关联表（关联键名）<input type="radio"  name="question1" value="B" ><br/>
	C: Alter 表名add foreign key（键名）reference 关联键名）<input type="radio"  name="question1" value="C" ><br/>
	D: Alter 表名add Primary key（键名）reference 关联表（关联键名）<input type="radio"  name="question1" value="D" ><br/><br/>
	<div class="wen">2：要修改表名为Table1的字段Field1长度，原为Char（10）要求用SQL增加长度为char（20），以下语句那个正确</div><br/>
	A: Alter table Table1 Alter Field1 char<input type="radio" name="question2" value="A" ><br/>
	B: Alter Table1 Alter column Field1 char（20）<input type="radio"  name="question2" value="B" ><br/>
	C: Alter table Table1 Alter column Field1 char（20）<input type="radio"  name="question2" value="C" ><br/>
	D: Alter column Field1 char（20）<input type="radio"  name="question2" value="D" ><br/><br/>
	<div class="wen">3：下面聚集函数中哪个只能用于计算数值类型的数据</div><br/>
	A:  COUNT( )  <input type="radio" name="question3" value="A" ><br/>
	B:  MIN( )  <input type="radio"  name="question3" value="B" ><br/>
	C: MAX( )  <input type="radio"  name="question3" value="C" ><br/>
	D: SUM( )<input type="radio"  name="question3" value="D" ><br/><br/>
	<div class="wen">4： 在创建表的过程中，哪个关键字用来定义默认值</div><br/>
	A:  DISTINCT  <input type="radio" name="question4" value="A" ><br/>
	B:   UNIQUE    <input type="radio"  name="question4" value="B" ><br/>
	C: CHECK <input type="radio"  name="question4" value="C" ><br/>
	D: DEFAULT<input type="radio"  name="question4" value="D" ><br/><br/>
	<div class="wen">5：  以下哪一个不是逻辑运算符</div><br/>
	A:  NOT   <input type="radio" name="question5" value="A" ><br/>
	B:  AND     <input type="radio"  name="question5" value="B" ><br/>
	C:  OR <input type="radio"  name="question5" value="C" ><br/>
	D:  IN<input type="radio"  name="question5" value="D" ><br/><br/>
	<div class="wen">6： 以下哪个关键字用来定义记录在某属性上的约束条件</div><br/>
	A:   DEFAULT     <input type="radio" name="question6" value="A" ><br/>
	B:    DISTINCT     <input type="radio"  name="question6" value="B" ><br/>
	C:  UNIQUE <input type="radio"  name="question6" value="C" ><br/>
	D: CHECK<input type="radio"  name="question6" value="D" ><br/><br/>
	<div class="wen">7： 下面对 union 的描述正确的是</div><br/>
	A:  任何查询语句都可以用 union 来连接  <input type="radio" name="question7" value="A" ><br/>
	B:   union 只连接结果集完全一样的查询语句    <input type="radio"  name="question7" value="B" ><br/>
	C: union 是筛选关键词，对结果集再进行操作<input type="radio"  name="question7" value="C" ><br/>
	D: union 可以连接结果集中数据类型个数相同的多个结果集<input type="radio"  name="question7" value="D" ><br/><br/>
	<div class="wen">8： 下面是合法的 smallint 数据类型数据的是：</div><br/>
	A:   223.5 <input type="radio" name="question8" value="A" ><br/>
	B:   32768   <input type="radio"  name="question8" value="B" ><br/>
	C: -32767 <input type="radio"  name="question8" value="C" ><br/>
	D: 58345<input type="radio"  name="question8" value="D" ><br/><br/>
	<div class="wen">9： 下面描述错误的是</div><br/>
	A:  每个数据文件中有且只有一个主数据文件  <input type="radio" name="question9" value="A" ><br/>
	B:   日志文件可以存在于任意文件组中    <input type="radio"  name="question9" value="B" ><br/>
	C: 主数据文件默认为 primary 文件组<input type="radio"  name="question9" value="C" ><br/>
	D:文件组是为了更好的实现数据库文件组织<input type="radio"  name="question9" value="D" ><br/><br/>
	<div class="wen">10： 下面标志符不合法的是</div><br/>
	A:  [my delete] <input type="radio" name="question10" value="A" ><br/>
	B:    _mybase   <input type="radio"  name="question10" value="B" ><br/>
	C:  $money <input type="radio"  name="question10" value="C" ><br/>
	D:  trigger1<input type="radio"  name="question10" value="D" ><br/><br/>
      <input type ="submit" value ="提交">
   	</form>  
   
    </div>

            
            </body>
            </html>