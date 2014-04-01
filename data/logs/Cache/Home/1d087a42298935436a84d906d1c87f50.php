<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员登陆与注册<?php echo C('site_title');?> <?php echo C('site_name');?></title>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/scrolltopcontrol.js"></script>
<!--[if IE 6]>
<script src="<?php echo RES;?>/js/PNG.js"></script>
<script>
DD_belatedPNG.fix('.banner,.pic1,.pic2');
</script>
<![endif]-->
</head>

<body>
<!--header-->
<div class="topHeader">
    <div id="header">
    	<div id="logo"><a href="/"><img src="/themes/Static/logo.png" width="225" height="84" /></a></div>
        <div class="nav">
        	<a href="javascript:void(0)" onclick="Javascript:window.open('<?php echo C('site_url');?>','_self');">首页</a>
            <a href="/#Features">功能特色</a>
            <a href="/#Profiles">关于我们</a>
            <a href="/#Comment">客户评价</a>
            <a href="/#Help">帮助指南</a>
			<a href="javascript:void(0)" onclick="Javascript:window.open('<?php echo U('User/Index/index');?>','_self');" >管理</a>
            <?php if($_SESSION[uid]==false): ?><a href="javascript:void(0)" onclick="Javascript:window.open('<?php echo U('Index/login');?>' ,'_self')" >登录</a>
			<a href="javascript:void(0)" onclick="Javascript:window.open('<?php echo U('Index/login');?>','_self')"  >注册</a>
			<?php else: ?>
			你好,<a href="<?php echo U('User/Index/index');?>" hidefocus="true"><?php echo (session('uname')); ?></a>
			<a href="javascript:void(0)" onclick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_self')" >退出</a><?php endif; ?>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="bibox">
	<div class="commontitle">
		<span style="font-weight:bold;float:left">在这里可以直接登陆啦！</span>
		<span style="float:right"><a href="<?php echo U('Index/reg');?>">同一个页面也可以注册了哦</a></span>
	</div>
	<div class="clear" style="margin-top:10px;"></div>
	
	<div class="logleft">
		
		<ul>
			<div style="font-weight:bold;border-bottom:1px dashed #ccc;font-size:25px;padding:5px;margin-bottom:10px">会员登录</div>
			<form action="<?php echo U('Users/checklogin');?>" enctype="multipart/form-data" id="registerform" name="register" autocomplete="off" method="post">
			<li>用户名：<input type="text" name="username" value="请输入用户名" style="width:180px;height:30px;" onclick="if(this.value=='请输入用户名'){this.value=''}" onblur="if(this.value==''){this.value='请输入用户名'}"></li>
			<li>密　码：<input type="password" name="password" style="width:180px;height:30px;"></li>
			<li><button type="submit" class="buttongreen" name="regsubmit">登陆</button>&nbsp;&nbsp;<a href="<?php echo U('Index/regpwd');?>">忘记密码</a>　</li>
			</form>
			<li></li>
		</ul>
	
	</div>
	<div class="logcoonter">&nbsp;</div>
	<div class="logright">
		<ul>
			<div style="font-weight:bold;border-bottom:1px dashed #ccc;font-size:25px;padding:5px;margin-bottom:10px">会员注册</div>
			<form action="<?php echo U('Users/checkreg');?>" enctype="multipart/form-data"  name="register" autocomplete="off" method="post">
				<li>会员帐号：<input type="text" required="" value="请输入用户名" style="width:180px;height:30px;" maxlength="15" size="25" autocomplete="off" tabindex="1" name="username" onclick="if(this.value=='请输入用户名'){this.value=''}" onblur="if(this.value==''){this.value='请输入用户名'}"></li>
				<li>用户密码：<input type="password" required="" style="width:180px;height:30px;" class="px" tabindex="1" size="25" name="password"></td>
				<li>确认密码：<input type="password" required="" style="width:180px;height:30px;" class="px" value="" tabindex="1" size="25" name="repassword" ></li>
				<li>电子邮箱：<input type="text" required="" value="请输入E-Mail" style="width:180px;height:30px;" class="px" tabindex="1" size="25" autocomplete="off" name="email" onclick="if(this.value=='请输入E-Mail'){this.value=''}" style="width:180px;height:30px;" onblur="if(this.value==''){this.value='请输入E-Mail'}"><br><em id="emailmore">&nbsp;</em></li>
				<li><button type="submit" class="buttongreen" name="regsubmit">注册</button>&nbsp;&nbsp;<a href="<?php echo U('Index/regpwd');?>">忘记密码</a>　</li>
			</form>
			<li></li>
		</ul>
	</div>
</div>

<div class="clear"></div>
<!--contact begin-->
<div id="Contact"></div>
<div id="Contact_Copy">
	<div class="ContactBox">
    	<h2>联系我们<span><br />Contact Us</span></h2>
        <div class="ContactContent">新浪网客户服务电话<br/>
			新浪网产品用户服务，产品咨询，购买，技术支持<br/>
			客户服务热线:4006900000(免长途费)<br/>
			各产品详情请联系客服。<br/>

			新浪网广告销售<br/>

			广告销售部<br/>
			新浪广告官方服务微博：@新浪广告 http://weibo.com/sinaemarketing<br/>
			企业微博服务官方微博：@企业微服务 http://weibo.com/weifuwu<br/>
			电商企业客户服务官方微博：@电商微客服 http://weibo.com/ecservice<br/>
			广告产品介绍请查看：http://emarketing.sina.com.cn <br/>
			广告产品，请致电新浪广告产品服务热线：4008812813<br/>
			企业微博功能使用、商务应用咨询，请致电新浪企业微博服务热线：4000860860<br/></div>
    </div>
   <div id="CopyRight">Copyright &copy; 2013 <?php echo C('site_url');?>. All Rights Reserved.<br /><?php echo C('site_name');?>版权所有</div>
</div><p style="display:none;"></p>
<!--cotact end-->
<script type="text/javascript" src="<?php echo RES;?>/js/index.js"></script>

</body>
</html>