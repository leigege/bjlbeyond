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
<title>首页</title> 
		<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
		<load href="__PUBLIC__/Js/jquery.min.js">

		<script>
			$(function(){
				$('img[title="login"]').click(function(){
					window.location='__APP__/Login/login';
				});
				
				$('img[class="register"]').click(function(){
					window.location='__APP__/Register/register';
				});
			}); 
		</script>

	<style type="text/css">
/* 	.footer{
	
			margin-top:100px;
		    margin-left:100px;

		    height:500px;
			
		} */
		
		
		.message{
			width:400px;
			height:196px;
			margin-left:610px;
			margin-top:30px;
		}
    </style>
    
    
    <style>
	body,ul,ol,li,p,h1,h2,h3,h4,h5,h6,form,fieldset,table,td,img,div,dl,dt,dd,input{margin:0;padding:0;}
	
	img{border:none;}
	li{list-style:none;}
	input,select,textarea{outline:none;}
	textarea{resize:none;}
	a{text-decoration:none;}
	
	/*清浮动*/
	.clearfix:after{content:"";display:block;clear:both;}
	.clearfix{zoom:1;}
	.banner{width:400px; height:200px; position:relative; overflow:hidden;}
	.banner-btn{ display:none;}
	.banner-btn a{ display:block; line-height:40px; position:absolute;top:120px; width:40px; height:40px;background-color: #000; opacity:0.3; filter:alpha(opacity=30) color: rgb(255, 255, 255);overflow: hidden; z-index:4;}
	.prevBtn{left:5px;}
	.nextBtn{right:5px;}
	.banner-img{ font-size:0; *word-spacing:-1px;/* IE6、7 */ letter-spacing: -3px; position:relative;}
	.banner-img li{ display:inline-block;*display:inline;*zoom:1;/* IE6、7 */ vertical-align: top; letter-spacing: normal;word-spacing: normal; font-size:12px;}
	.banner i{ background:url(http://gtms01.alicdn.com/tps/i1/T1szNBFzlmXXX8QSDI-400-340.png)  no-repeat; width: 15px;height: 23px; cursor:pointer;margin: 8px 0 0 12px; display:block;}
	.banner .nextBtn i{ background-position:-200px -24px;}
	.banner .prevBtn i{ background-position:-200px 0px;}
	
	.banner-circle{ position:absolute; left:50%; bottom: 15px;height: 13px;text-align: center;font-size: 0;border-radius: 10px; background:rgba(255,255,255,0.3); filter:alpha(opacity:30); }
	.banner-circle li{ border-radius: 10px; margin:2px; display: inline-block; display: -moz-inline-stack; vertical-align: middle;zoom: 1; }
	.banner-circle li a{ display: block;padding-top: 9px;width: 9px;height: 0;border-radius: 50%; background: #B7B7B7;overflow: hidden;}
	.banner-circle .selected a{ background:#F40; }
	</style>



<script>
$(function(){
        var $banner=$('.banner');
        var $banner_ul=$('.banner-img');
        var $btn=$('.banner-btn');
        var $btn_a=$btn.find('a')
        var v_width=$banner.width();
        
        var page=1;
        
        var timer=null;
        var btnClass=null;

        var page_count=$banner_ul.find('li').length;//把这个值赋给小圆点的个数
        
        var banner_cir="<li class='selected' href='#'><a></a></li>";
        for(var i=1;i<page_count;i++){
                //动态添加小圆点
                banner_cir+="<li><a href='#'></a></li>";
                }
        $('.banner-circle').append(banner_cir);
        
        var cirLeft=$('.banner-circle').width()*(-0.5);
        $('.banner-circle').css({'marginLeft':cirLeft});
        
        $banner_ul.width(page_count*v_width);
        
        function move(obj,classname){
                //手动及自动播放
        if(!$banner_ul.is(':animated')){
                if(classname=='prevBtn'){
                        if(page==1){
                                        $banner_ul.animate({left:-v_width*(page_count-1)});
                                        page=page_count; 
                                        cirMove();
                        }
                        else{
                                        $banner_ul.animate({left:'+='+v_width},"slow");
                                        page--;
                                        cirMove();
                        }        
                }
                else{
                        if(page==page_count){
                                        $banner_ul.animate({left:0});
                                        page=1;
                                        cirMove();
                                }
                        else{
                                        $banner_ul.animate({left:'-='+v_width},"slow");
                                        page++;
                                        cirMove();
                                }
                        }
                }
        }
        
        function cirMove(){
                //检测page的值，使当前的page与selected的小圆点一致
                $('.banner-circle li').eq(page-1).addClass('selected')
                                                                                                .siblings().removeClass('selected');
        }
        
        $banner.mouseover(function(){
                $btn.css({'display':'block'});
                clearInterval(timer);
                                }).mouseout(function(){
                $btn.css({'display':'none'});                
                clearInterval(timer);
                timer=setInterval(move,3000);
                                }).trigger("mouseout");//激活自动播放

        $btn_a.mouseover(function(){
                //实现透明渐变，阻止冒泡
                        $(this).animate({opacity:0.6},'fast');
                        $btn.css({'display':'block'});
                         return false;
                }).mouseleave(function(){
                        $(this).animate({opacity:0.3},'fast');
                        $btn.css({'display':'none'});
                         return false;
                }).click(function(){
                        //手动点击清除计时器
                        btnClass=this.className;
                        clearInterval(timer);
                        timer=setInterval(move,3000);
                        move($(this),this.className);
                });
                
        $('.banner-circle li').live('click',function(){
                        var index=$('.banner-circle li').index(this);
                        $banner_ul.animate({left:-v_width*index},'slow');
                        page=index+1;
                        cirMove();
                });
});
</script>
<div class='login'>
      <!--   <form action='__APP__/Login/doLogin' method='post' name='myForm'> -->
	<!-- 		用户名：<input type='text' name='username'/><br/><br/>
			密　码：<input type='password' name='password'/><br/><br/> -->
			<img src='__PUBLIC__/Images/login.gif' title='login' class='submit' style="cursor:pointer"/>
			<img src='__PUBLIC__/Images/register.gif' class='register' style="cursor:pointer"/>
<!-- 		</form> -->
<P>欢迎你&nbsp<?php echo (session('username')); ?>&nbsp&nbsp<a href='__APP__/Login/doLogout'>退出</a></P>



        	<div class="jiagou">
        	<div class="intro1" style="width:344px; height:198px; background-image:url(__PUBLIC__/Images/jiaoxuezhinan.jpg)">
            		<div style="width:65px; margin-top:70px; margin-left:70px; text-align:left; font-family:'宋体'; font-size:16px; text-decoration:none"><a href="__APP__/Course/introduce" target="_blank">课程介绍</a></div>
                    <div style="width:65px;margin-top:9px; margin-left:70px; text-align:left; font-family:'宋体'; font-size:16px;text-decoration:none"><a href="jiaoxuefangfa.html" target="_blank">学习方法</a></div>
                    <div style="width:65px;margin-top:9px; margin-left:70px; text-align:left; font-family:'宋体'; font-size:16px;text-decoration:none"><a href="jiaoxuedagang.asp" target="_blank">教学大纲</a></div>
                    <div style="width:65px;margin-top:9px; margin-left:70px; text-align:left; font-family:'宋体'; font-size:16px;text-decoration:none"><a href="shoukejihua.html" target="_blank">授课计划</a></div>
                    
           
            </div>
            
            <div class="intro2" style=" width:344px; height:198px; background-image:url(__PUBLIC__/Images/jiaoxueziyuan.jpg) ">
            	<div style="width:65px;margin-top:70px; margin-left:70px; text-align:left; font-family:'宋体'; font-size:16px; text-decoration:none"><a href="nav.asp?m=ruanjian">软件下载</a></div>
                    <div style="width:65px;margin-top:9px; margin-left:70px; text-align:left; font-family:'宋体'; font-size:16px;text-decoration:none"><a href="nav.asp?m=shiti">例题习题</a></div>
                    <div style="width:65px;margin-top:9px; margin-left:70px; text-align:left; font-family:'宋体'; font-size:16px;text-decoration:none"><a href="nav.asp?m=shijuan">拓展资源</a></div>
                    <div style="width:65px;margin-top:9px; margin-left:70px; text-align:left; font-family:'宋体'; font-size:16px;text-decoration:none"><a href="nav.asp?m=shiyan">教学视频</a></div>
                    
           
            </div>
            
            </div>
            
            
<div style="width:416px; margin-left:600px;margin-top:-430px">
<div class="banner">
	<div class="banner-btn">
		<a href="javascript:;" class="prevBtn"><i></i></a>
		<a href="javascript:;" class="nextBtn"><i></i></a>
	</div>
	<ul class="banner-img">
		<li><a href="#"><img src="__PUBLIC__/Images/T1B1JYFCpdXXazuKP7-520-280.jpg"></a></li>
		<li><a href="#"><img src="__PUBLIC__/Images/T16YtiFE4aXXb1upjX.jpg"></a></li>
		<li><a href="#"><img src="__PUBLIC__/Images/T1Oi0oFrFkXXb1upjX.jpg"></a></li>
		<li><a href="#"><img src="__PUBLIC__/Images/T1LtlPFppjXXb1upjX.jpg"></a></li>
		<li><a href="#"><img src="__PUBLIC__/Images/T1GGJWFvpgXXazuKP7-520-280.jpg"></a></li>
		<li><a href="#"><img src="__PUBLIC__/Images/T104hZFBVdXXazuKP7-520-280.jpg"></a></li>
	</ul>
	<ul class="banner-circle"></ul>
</div>
</div>


 <div class="message">
            <table width="99%" border="0" align="center"  bordercolor="#CCCCCC" bordercolorlight="#999999" bordercolordark="#FFFFFF" cellpadding="1" cellspacing="1">
            <tr background="images1/dl2.jpg" >
              <td height="31" align="center" class=""  background="__PUBLIC__/Images/dl2.jpg"><table width="100%" height="21" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="79%" align="center" class="">&nbsp;&nbsp;&nbsp;&nbsp;留言</td>
                  <td width="21%"><a href="__URL__/message"><img src="__PUBLIC__/Images/more.gif" width="34" height="11" border="0" /></a></td>
                </tr>
              </table></td>
            </tr>
           
          </table>
     
      
      <?php if(is_array($list)): foreach($list as $key=>$vo): ?>留言题目：<?php echo ($vo["title"]); ?> <br/><br/>
      留言内容： <?php echo ($vo["content"]); ?><br/><br/>
               留言人：<?php echo ($vo["username"]); ?> <br/><br/>
	   留言时间：<?php echo ($vo["addtime"]); ?> <br/><br/>
               回复：     <?php echo ($vo["reply"]); ?>   <br/><br/><?php endforeach; endif; ?>
          </div>
          
          
          <div   style="margin-left:-200px">
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
<div class="footer" >
<center>
    	设为首页&nbsp;|&nbsp;加入收藏&nbsp;|&nbsp;<a href="/bjl/admin.php/Login/login">管理员登录</a><br>
        版权所有 河北科技师范学院欧美学院信息技术系
  </center>


</div>


             </div>




<div class="sql_jieshao">

 <MARQUEE class= "gundong"style="WIDTH: 230; HEIGHT: 310" scrollAmount=5 scrollDelay=77 direction=up width=230 height=310 onmouseout="this.start()" onmouseover="this.stop()">
<div>
	 &nbsp&nbsp&nbsp&nbsp&nbsp&nbspSQL是英文Structured Query Language的缩写，意思为结构化查询语言。SQL语言的主要功能就是同各种数据库建立联系，进行沟通。按照ANSI(美国国家标准协会)的规定，SQL被作为关系型数据库管理系统的标准语言。SQL语句可以用来执行各种各样的操作，例如更新数据库中的数据，从数据库中提取数据等。目前，绝大多数流行的关系型数据库管理系统，如Oracle, Sybase, Microsoft SQL Server, Access等都采用了SQL语言标准。 <br>&nbsp&nbsp&nbsp&nbsp
　　      SQL Server 是一个关系数据库管理系统。它最初是由Microsoft、Sybase 和Ashton-Tate三家公司共同开发的，于1988 年推出了第一个OS/2版本。在Windows NT 推出后，Microsoft与Sybase 在SQL Server 的开发上就分道扬镳了，Microsoft 将SQL Server移植到Windows NT系统上，专注于开发推广SQL Server 的Windows NT 版本。Sybase 则较专注于SQL Server在UNⅨ操作系统上的应用。<br>&nbsp&nbsp&nbsp&nbsp 
　　SQL Server 2000 是Microsoft 公司推出的SQL Server数据库管理系统，该版本继承了SQL Server 7.0 版本的优点，同时又比它增加了许多更先进的功能。具有使用方便可伸缩性好与相关软件集成程度高等优点，可跨越从运行Microsoft Windows 98 的膝上型电脑到运行Microsoft Windows 2000 的大型多处理器的服务器等多种平台使用。<br>&nbsp&nbsp&nbsp&nbsp     
　　SQL Server7.0已比原来的计划几乎晚两年发行。在这段时间内，有关哪个厂商具有Windows NT上最好的数据库解决方案的战斗已经打响，并最终由Oracle获胜。自从1996年以来，Oracle一直是Windows NT上的市场领导者。在过去的四年里，Oracle已在NT上享有令人震惊的2000%的收入增长。在这期间，Microsoft的收入占NT市场的份额实际上已经减少了27.8%。Oracle的伙伴的巨大成功补充了Oracle的客户的成功。一份最近的ARM研究（1998）表明，在1997年的EPT市场中，数据库营业收入的52%进入Oracle，相比之下，Microsoft SQL Server只占5%。事实上，在ASP的3200个NT安装中，70%是在Oracle上。只有20%是在SQL Server上。随着它们最新的数据库升级，Microsoft达到了Oracle在通过Oracle 6达到的水平。SQL Server7.0仍然比Oracle8i落后几年，并且在可伸缩性、体系结构、功能、安全性、扩展性等方面存在严重问题，这将阻碍它在关键任务应用中的使用。客户对选择SQL Server7.0将持严重的保留态度，特别是在Oracle 8i这样高可靠和先进的产品已经存在的时候。从SQL server 2005起，SQL server和Oracle的性能差距和总体CTO不断缩小，根据CRN Magazine杂志2007年的统计，SQL server的销量在关系型数据库(Relational Databases)软件销量排名第一.<br>&nbsp&nbsp&nbsp&nbsp
</div>

</div>