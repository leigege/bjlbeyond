<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<HTML>
<HEAD>
<TITLE>SQL SERVER 教学管理系统登录</TITLE>

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
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<STYLE>
TD {
	FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serIf; TEXT-DECORATION: none
}
.input_1 {
	BORDER-RIGHT: #999999 1px solid; PADDING-RIGHT: 2px; BORDER-TOP: #999999 1px solid; PADDING-LEFT: 2px; LIST-STYLE-POSITION: inside; FONT-SIZE: 12px; PADDING-BOTTOM: 2px; MARGIN-LEFT: 10px; BORDER-LEFT: #999999 1px solid; COLOR: #333333; PADDING-TOP: 2px; BORDER-BOTTOM: #999999 1px solid; FONT-FAMILY: Arial, Helvetica, sans-serIf; LIST-STYLE-TYPE: none; HEIGHT: 18px; BACKGROUND-COLOR: #dadedf
}


</STYLE>
<META content="MSHTML 6.00.6000.16705" name=GENERATOR>
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width=651 align=center border=0>
  <TBODY>
  
  <TR>
    <TD height=50></TD>
  </TR>
  <TR>
    <TD height=351><TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        
        <TR>
          <TD width=15 background=__PUBLIC__/Image/ileft.gif height=43></TD>
          <TD width=620 background=__PUBLIC__/Image/i_topbg2.gif><IMG 
            height=43 src="__PUBLIC__/Image/i_top1.gif" width=43></TD>
          <TD width=16><IMG height=43 src="__PUBLIC__/Image/iright.gif" 
            width=16></TD>
        </TR>
        <TR>
          <TD background=__PUBLIC__/Image/ileftbg.gif></TD>
          <TD vAlign=center background=__PUBLIC__/Image/bg.gif height=279><TABLE height=109 cellSpacing=0 cellPadding=0 width=369 align=center 
            border=0>
              <TBODY>
              
              <TR>
                <TD width=155><IMG height=140 
                  src="__PUBLIC__/Image/logo.jpg" width=155 useMap=#Map 
                  border=0></TD>
                <TD vAlign=top align=left width=214><TABLE cellSpacing=0 cellPadding=0 width=167 border=0>
                    <TBODY>

                    <TR>
                      <TD height=123><TABLE height=109 cellSpacing=0 cellPadding=0 
                        align=center border=0>
                          <FORM action='__URL__/doLogin' method='post' name='myForm'>
                            
                              <TR>
                                <TD vAlign=bottom align=left width=44 height=28><DIV align=right><IMG height=14 
                              src="__PUBLIC__/Image/id.gif" width=43></DIV></TD>
                                <TD vAlign=bottom align=left width=114 
                              height=28><INPUT class=input_1 id=username size=15 
                              name=username>
                                </TD>
                              </TR>
                              <TR>
                                <TD align=left height=20><DIV align=right><IMG height=14 
                              src="__PUBLIC__/Image/pass.gif" 
                            width=43></DIV></TD>
                                <TD height=20><INPUT class=input_1 id=password 
                              type=password size=15 name=pwd></TD>
                              </TR>

                              <img src='__PUBLIC__/Images/login.gif' title='login' class='submit' style="cursor:pointer"/>
						      <img src='__PUBLIC__/Images/register.gif' class='register' style="cursor:pointer"/>
						      
						
                          </FORM>
                          
                        </TABLE></TD>
                    </TR>
                    </TBODY>
                  </TABLE></TD>
              </TR>
              </TBODY>
            </TABLE></TD>
          <TD background=__PUBLIC__/Image/irightbg.gif></TD>
        </TR>
        <TR>
          <TD><IMG height=29 src="__PUBLIC__/Image/i_bottom_left.gif" 
            width=15></TD>
          <TD background=__PUBLIC__/Image/i_bottom_bg.gif></TD>
          <TD width=16><IMG height=29 
            src="__PUBLIC__/Image/i_bottom_right.gif" 
      width=16></TD>
        </TR>
        </TBODY>
      </TABLE></TD>
  </TR>
  <TR>
    <TD height=1></TD>
  </TR>
  <TR>
    <TD>&nbsp;</TD>
  </TR>
  </TBODY>
</TABLE>
</BODY>
</HTML>