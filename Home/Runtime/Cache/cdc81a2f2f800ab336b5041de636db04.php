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
     <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
     
<title>个人中心</title>


<div style="width:1007px; margin-left:auto; margin-right:auto; margin-top:10px">



<table width="1007px" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" bordercolorlight="#000000" bordercolordark="#FFFFFF">
  <tr>
    <td width="1007px" align="left" valign="top">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr bgcolor="#f0f0f0">
          <td height="25" class="STYLE5 STYLE4">你好：&nbsp<?php echo (session('username')); ?> 欢迎登录</td>
        </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="1005px"><table width="100%" height="332" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999" bordercolorlight="#333333" bordercolordark="#FFFFFF" >
            <tr align="center" valign="middle">
              <td width="23%" height="303" valign="top"><table width="94%" height="237" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top" background="__PUBLIC__/Images/geren.jpg"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">

                    <tr>
                      <td height="35" align="center" class="STYLE4">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="35" align="center" valign="bottom" class="STYLE4"><hr /></td>
                    </tr>
                    <tr>
                      <td height="35" align="center" background="__PUBLIC__/Images/dot_bg.gif" class="STYLE4"><a href="__URL__/modifyp">基本信息修改</a></td>
                    </tr>
                    <tr>
                      <td height="35" align="center" background="__PUBLIC__/Images/dot_bg.gif" class="STYLE4"><a href="__URL__/modifypassword">密码修改</a></td>
                    </tr>
                      <tr>
                      <td height="35" align="center" background="__PUBLIC__/Images/dot_bg.gif" class="STYLE4"><a href="__URL__/modifypassword">上传作业</a></td>
                    </tr>
                        <tr>
                      <td height="35" align="center" background="__PUBLIC__/Images/dot_bg.gif" class="STYLE4"><a href="__URL__/domessage">留言</a></td>
                    </tr>
                  </table></td>
                </tr>
              </table>
                </td>
              <td width="77%" align="center" bgcolor="#effcff"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="27" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  
                  
                  <form enctype="multipart/form-data" method="post" action="__URL__/upload">
                  
                  <input type='file'  name='photo'>
                  <input type="submit" name="Submit"  value="上传" />
                  
                  		
                  	
                  </form>
                      
                    </table>
                      
                     </td>
                </tr>

              </table></td>
            </tr>
          </table></td>
        </tr>
      </table>
  
  </tr>
</table>
<p>&nbsp;</p>
</div>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
<div class="footer" >
<center>
    	设为首页&nbsp;|&nbsp;加入收藏&nbsp;|&nbsp;<a href="/bjl/admin.php/Login/login">管理员登录</a><br>
        版权所有 河北科技师范学院欧美学院信息技术系
  </center>


</div>