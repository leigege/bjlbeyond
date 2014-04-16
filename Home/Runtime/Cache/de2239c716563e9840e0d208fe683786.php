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

<li ><a href="__URL__/Index/index" style="width:167px; margin-left:0px">首页</a></li>


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



<li><a href="__APP__/Exam/exam">个人中心</a></li><br/><br/>
</ul> 
</div> 


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<head>
<title>课程大纲</title>
<style type="text/css">
body {
	margin: 0px;
}
</style>
</head>

<body>

<div style="width:1007px; margin-left:auto; margin-right:auto" >
<!--#include file="Head.asp"-->

  <h1 >《数据库原理与应用SQL Server 2000》课程教学大纲 </h1>
  <p >&nbsp;一&nbsp;课程基本概况 </p>
  <p >&nbsp;&nbsp;&nbsp; 课程名称：数据库原理与应用SQL Server 2000 </p>
  <p >&nbsp;&nbsp;&nbsp; 课程名称(英文)：Database Principles and Applications SQL Server 2000 </p>
  <p >&nbsp;&nbsp;&nbsp; 课程编号： </p>
  <p >&nbsp;&nbsp;&nbsp; 课程总学时：32 </p>
  <p >&nbsp;&nbsp;&nbsp; 课程学分：2 </p>
  <p >&nbsp;&nbsp;&nbsp; 课程分类：专选 </p>
  <p >&nbsp;&nbsp;&nbsp; 开设学期：第7学期 </p>
  <p >&nbsp;&nbsp;&nbsp; 适用专业：计算机科学与技术、计算机网络工程 </p>
  <p >&nbsp;&nbsp;&nbsp; 先修课程:计算机硬件,软件工程，数据库原理，C和C++程序设计 </p>
  <p >&nbsp;二&nbsp;课程性质、目的和任务 </p>
  <p >&nbsp;&nbsp; 本课程综合讲述了数据库基本理论、数据库设计过程；SQL SERVER概述、安装、常用工具简介；
数据库创建与管理，表的结构、数据类型；SQL查询、查询分析器；视图、索引；T-SQL程序设计；触发器和存储过程；安全管理、数据备份与恢复
<br />本课程由教学和实验两部分组成。通过课堂学习掌握数据库管理与开发的基本知识，以及SQL Server2000的使用；通过课程实验建立对有关学习内容的感性认识，并培养实际动手能力。对实验具有比较高的要求。必须认真完成实验并填写实验报告。这是通过本课程考核的必要条件。
  <p >&nbsp;三&nbsp;主要内容、重点及难点 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; 第一章&nbsp;数据库系统概论&#9; </p>
  <p >&nbsp;&nbsp;&nbsp; [目的要求]&#9;掌握与了解数据库系统的一些基本概念和发展方向。 </p>
  <p >&nbsp;&nbsp;&nbsp; [教学内容] </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1．&nbsp;数据库基本概念</p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2．&nbsp;数据库管理系统（DBMS）的功能  </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3．&nbsp;概念模型（E-R图） </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4．&nbsp;数据库管理系统（DBMS）的功能 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; [重点难点]&#9;数据库管理系统（DBMS）的功能、概念模型（E-R图） </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; 第二章&nbsp;&nbsp;关系数据库 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; [目的要求]&nbsp;了解关系型数据库 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; [教学内容]&#9; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1．关系数据库概述 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2．关系数据库标准语言SQL </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; [重点难点]&#9; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.&nbsp;关系数据库标准语言SQL </p>

  <p >&nbsp;&nbsp; 第三章　SQL Server数据管理 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; [目的要求]&nbsp;创建表包括选择字段名称、数据类型、定义是否为空、设置默认值、主键和关系、检查约束等</p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; [教学内容]&#9; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1．&nbsp;DML（数据操作语言）　 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2．&nbsp;DCL（数据控制语言） </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3．&nbsp;DDL（数据定义语言） </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4．&nbsp;变量说明、流程控制、功能函数 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; [重点难点]&nbsp;变量说明、流程控制、功能函数 </p>
  <p >&nbsp; 第四章&nbsp;&nbsp;数据查询 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp; [目的要求]&nbsp;学会使用数据操作语言、数据控制语言和数据定义语言； </p>
  <p >&nbsp;&nbsp;&nbsp; [教学内容]&#9; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1．&nbsp;理解查询的机制 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2．&nbsp;使用SELECT语句进行条件查询 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3．&nbsp;在查询中返回限制行、进行查询排序 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4．&nbsp;在查询中使用表达式、运算符和函数 </p>
  <p >&nbsp;&nbsp;&nbsp; &nbsp;[重点难点]&#9; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.&nbsp;在查询中使用表达式、运算符和函数 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.&nbsp;在查询中返回限制行、进行查询排序 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.&nbsp;使用SELECT语句进行条件查询 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4.&nbsp;理解查询的机制 </p>
  <p >&nbsp;&nbsp; 第五章　数据库的设计</p>
  <p >&nbsp;&nbsp;&nbsp; [目的要求]&nbsp;了解设计数据库的步骤、掌握如何绘制数据库的E-R图、理解数据库的规范化－三大范式 </p>
  <p >&nbsp;&nbsp;&nbsp; [教学内容] </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1．为什么需要设计数据库  </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2．数据库设计的步骤&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3．绘制E-R图  </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4．数据规范化 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5．SQL Server的安全模型 </p>
  <p >&nbsp;&nbsp;&nbsp; [重点难点]&nbsp;SQL Server的安全模型 </p>
  <p >&nbsp;&nbsp; 第六章&nbsp;T-SQL编程 </p>
  <p >&nbsp;&nbsp;&nbsp; [目的要求]&nbsp;掌握如何定义变量并赋值、掌握如何输出显示数据、掌握IF、WHILE、CASE逻辑控制语句、理解SQL中批处理的概念 </p>
  <p >&nbsp;&nbsp;&nbsp; [教学内容]&nbsp; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1．&nbsp;变量 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2．&nbsp;控制语句 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3．&nbsp;批处理</p>
  <p >&nbsp;&nbsp;&nbsp; &nbsp;[重点难点]&nbsp;控制语句 </p>
  <p >&nbsp;&nbsp; 第七章&nbsp;高级查询</p>
  <p >&nbsp;&nbsp;&nbsp; [目的要求]&nbsp;掌握简单子查询的用法、掌握IN子查询的用法、掌握EXISTS子查询的用法、应用T-SQL进行综合查询。 </p>
  <p >&nbsp;&nbsp;&nbsp; [教学内容]&nbsp; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.&nbsp;子查询IN的用法 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.&nbsp;子查询EXISTS的用法 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3.&nbsp;应用T-SQL综合查询 </p>
  <p >&nbsp;&nbsp;&nbsp; &nbsp;[重点难点]&nbsp;应用T-SQL进行综合查询</p>
  <p >&nbsp;&nbsp; 第八章&nbsp;事务、索引和视图</p>
  <p >&nbsp;&nbsp;&nbsp; [目的要求]&nbsp;理解事务的概念、掌握如何创建事务、掌握如何创建索引、掌握如何创建并使用视图</p>
  <p >&nbsp;&nbsp;&nbsp; [教学内容]&nbsp; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1．&nbsp;事务</p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2．&nbsp;索引</p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3．&nbsp;视图 </p>
  <p >&nbsp;&nbsp;&nbsp; [重点难点]&nbsp;事务、索引视图 </p>
  <p >&nbsp;&nbsp; 第九章&nbsp;存储过程和触发器&nbsp; </p>
  <p >&nbsp;&nbsp;&nbsp; [目的要求]&nbsp;了解存储过程的优点、掌握常用的系统存储过程、掌握如何创建存储过程、掌握如何调用存储过程</p>
  <p >&nbsp;&nbsp;&nbsp; [教学内容]&nbsp; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1.&nbsp;存储过程 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.&nbsp;触发器 </p>
  <p >&nbsp;&nbsp;&nbsp; [重点难点]&nbsp;存储过程和触发器 </p>
  <p > 四&nbsp;学时分配表 </p>
  <table >
    <tr >
      <td width="84" rowspan="2" valign="center" bgcolor="#66CCFF" ><p >章节 </p></td>
      <td width="225" rowspan="2" valign="center" bgcolor="#66CCFF" ><p >主&nbsp;要内&nbsp;容 </p></td>
      <td width="199" colspan="7" valign="center" bgcolor="#66CCFF" ><p >各教学环节学时分配 </p></td>
      <td width="53" valign="center" bgcolor="#66CCFF" ><p >作业题&nbsp;量 </p></td>
      <td width="42" valign="center" bgcolor="#66CCFF" ><p >备注 </p></td>
    </tr>
    <tr >
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >讲 </p>
        <p >授 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >实 </p>
        <p >验 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >讨 </p>
        <p >论 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >习 </p>
        <p >题 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >课 </p>
        <p >外&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >其 </p>
        <p >它 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >小 </p>
        <p >计 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >第一章 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p >数据库系统概论 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >&#160; </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >第二章 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p >关系数据库 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >2 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >2 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >第三章 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p >SQL Server数据管理 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >第四章 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p >数据查询  </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >第五章 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p >数据库的设计 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >第六章 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p >T-SQL编程 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >第七章 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p >高级查询 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >第八章 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p >事务、索引和视图 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >2 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >2 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >第九章 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p >存储过程和触发器 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >4 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
    <tr>
      <td width="84" valign="center" bgcolor="#66CCFF" ><p >合计 </p></td>
      <td width="225" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >32 </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="28" valign="center" bgcolor="#66CCFF" ><p >32 </p></td>
      <td width="53" valign="top" bgcolor="#66CCFF" ><p > </p></td>
      <td width="42" valign="top" bgcolor="#66CCFF" ><p > </p></td>
    </tr>
  </table>
  <p > </p>
  <p >五&nbsp;课程教学的基本要求和主要环节 </p>
  <p >&nbsp;&nbsp; (一)、课程的教学要求 </p>
  <p >&#160;&nbsp;&nbsp;&nbsp; 1.基本概念和基本知识： </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (1)SQL SERVER概述、安装、常用工具简介 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (2)数据库创建与管理，表的结构、数据类型 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (3)可以对数据库进行增删改查操作 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (4)SQL查询、查询分析器 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (5)视图、索引、T-SQL程序设计。 </p>
  <p >&nbsp;&nbsp;&nbsp; 2.教学环节 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (1)课堂讲授：&nbsp; </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (2)作业：分章节写明布置作业数量 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (3)考试、考查：考查 </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (4)自学指南：与本课程相关的自学类参考资料 </p>
 
  <p >&nbsp;六、建议教材及参考资料 </p>
  <p >&nbsp; 建议教材：《数据库系统概论》第三版
    萨师煊 王珊   编著   高等教育出版社</p>
  <p >&nbsp; 参考资料： </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;1.《Database System Concepts(fourth edition)》 Abraham Silberschatz, Henry F.Korth  </p>
  <p >&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;微软MSDN网址： www.msdn.microsoft.com </p>
  <p >&#9;&nbsp; &nbsp; 3.&nbsp;微软SQL SERVER Web页面网址： www.microsoft.com/SQL </p>
  <p > 七、责任人 </p>
  <p >&nbsp;&nbsp; 撰稿人：崔维&nbsp; </p>
  <p >&nbsp;&nbsp; 审稿人：齐玉斌 </p>
  <p >&nbsp;&nbsp; 系(院)领导：董洪平 </p>
  <!--#include file="footer.html"-->

</div>

</body>
</html>