<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>

<body id="nv_member" class="pg_CURMODULE">
<div class="topbg">
	<div class="top">
		<div class="toplink">
			<style>
			.topbg{BACKGROUND-IMAGE: url(<?php echo RES;?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:124px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
			.top {MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 124px;}
			.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
			.top .toplink .welcome{ float:left;}
			.top .toplink .memberinfo{ float:right;}
			.top .toplink .memberinfo a{ color:#999;}
			.top .toplink .memberinfo a:hover{ color:#F90}
			.top .toplink .memberinfo a.green{ background:none; color:#0C0}
			.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
			.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
			.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
			.top .navr ul{ width:850px;}
			.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
			.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none}
			.navr LI A:hover {BACKGROUND: url(<?php echo RES;?>/images/navhover.gif) center no-repeat;color:#009900;}
			.navr LI.menuon {BACKGROUND: url(<?php echo RES;?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
			.navr LI.menuon a{color:#FFF;}
			.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
			.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
			.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
			.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
			.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
			.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
			.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
			</style>
			<div class="welcome">欢迎使用<?php echo C('site_name');?>多用户微信营销服务平台!</div>
			<div class="memberinfo" id="destoon_member">
				<?php if($_SESSION['uid']==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href="<?php echo U('Index/login');?>">注册</a>
				<?php else: ?>你好,<a href="<?php echo U('User/Index/index');?>" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
				<a href="javascript:void(0)" onclick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>
				
			</div>
		</div>
		<div class="logo">
			<div style="float:left"></div>
			<h1><a href="<?php echo C('site');?>" title="<?php echo C('site_title');?>"><img src="<?php echo RES;?>/images/logo-system.png" /></a></h1>
			<div class="navr">
				<ul id="topMenu">         
					<li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/" >首页</a></li>
					<li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
					<li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
					<li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>
					<li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">微信导航</a></li>
					<li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
					<li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="aaa"></div>
<div id="wp" class="wp">
	<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
	<div class="contentmanage">
		<div class="developer">
			<div class="appTitle normalTitle2">
				<div class="vipuser">
					<div class="logo">
						<img src="<?php echo ($wecha["headerpic"]); ?>" width="100" height="100">
					</div>
					<div id="nickname">
						<strong><?php echo ($wecha["wxname"]); ?></strong><a href="#" target="_blank" class="vipimg vip-icon<?php echo $userinfo['id']-1; ?>" title=""></a>
					</div>
					<div id="weixinid">微信号:<?php echo ($wecha["weixin"]); ?></div>
				</div>
				<div class="accountInfo">
					<table class="vipInfo" width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td><strong>VIP有效期：</strong><?php if($_SESSION['viptime'] != 0): echo (date("Y-m-d",$thisUser["viptime"])); else: ?>vip0不限时间<?php endif; ?></td>
							<td><strong>图文自定义：</strong><?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></td>
							<td><strong>活动创建数：</strong><?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></td>
							<td><strong>请求数：</strong><?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></td>
						</tr>
						<tr>
							<td><strong>请求数剩余：</strong><?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></td>
							<td><strong>已使用：</strong><?php echo $_SESSION['diynum']; ?></td>
							<td><strong>当月赠送请求数：</strong><?php echo ($userinfo["connectnum"]); ?></td>
							<td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></td>
						</tr>
					</table>
				</div>
				<div class="clr"></div>
			</div>
			
			<div class="tableContent">
				<!--left-menu-->
			   <div class="sideBar" id="sideBar">
					<div class="catalogList">
						<ul>
							<div class="nav-header">基础设置</div>
							<li <?php if(MODULE_NAME == 'Function'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>">功能管理</a>
							</li>
							<li <?php if(MODULE_NAME == 'Areply'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Areply/index',array('token'=>$token));?>">关注时回复</a>
							</li>
							<li <?php if(MODULE_NAME == 'Text'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Text/index',array('token'=>$token));?>">文本回复</a>
							</li>
							<li <?php if(MODULE_NAME == 'Img'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Img/index',array('token'=>$token));?>">图文回复</a>
							</li>
							<li <?php if(MODULE_NAME == 'Voiceresponse'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>">语音回复</a>
							</li>
							<li <?php if(MODULE_NAME == 'Company'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Company/index',array('token'=>$token));?>">LBS回复</a>
							</li>
							<li <?php if(MODULE_NAME == 'Other'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Other/index',array('token'=>$token));?>">回答不上来的配置</a>
							</li>
							<li <?php if(MODULE_NAME == 'Sms'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Index/editsms',array('id'=>session('wxid')));?>">短信平台配置<span class="new"></span></a>
							</li>
							<li <?php if(MODULE_NAME == 'Email'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Index/editemail',array('token'=>$token));?>">邮件平台配置<span class="new"></span></a>
							</li>
							<li <?php if(MODULE_NAME == 'Yun'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Index/edityun',array('token'=>$token));?>">云相册配置<span class="new"></span></a>
							</li>
							<!--li <?php if(MODULE_NAME == 'lbslist'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="javascript:alert('已经实现智能地理位置回复，无需人工设置')">LBS回复</a><span class="new"></span>
							</li-->
						</ul>
						<ul>
							<div class="nav-header">3G网站设置</div>
							<li <?php if(MODULE_NAME == 'Home'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Home/set',array('token'=>$token));?>">首页回复配置</a>
							</li>
							<li <?php if(MODULE_NAME == 'Classify'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Classify/index',array('token'=>$token));?>">分类管理</a>
							</li>
							<li <?php if(MODULE_NAME == 'Tmpls'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Tmpls/index',array('token'=>$token));?>">模板管理</a>
							</li>
							<li <?php if(MODULE_NAME == 'Flash'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Flash/index',array('token'=>$token));?>">首页幻灯片<span class="new"></span></a>
							</li>
							<li <?php if(MODULE_NAME == 'Yulan'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Yulan/index',array('token'=>$token));?>" target="_blank">微网站预览<span class="new"></span></a>
							</li>
							<li <?php if(MODULE_NAME == 'Diymen'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Diymen/index',array('token'=>$token));?>">自定义菜单<span class="new"></span></a>
							</li>
                         <li <?php if(MODULE_NAME == 'Home'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Home/menuplus',array('token'=>$token));?>">一键导航<span class="new"></span></a>
							</li>
						</ul>
						<ul>
							<div class="nav-header">电商系统</div>
							<li <?php if(MODULE_NAME == 'Taobao'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Taobao/index',array('token'=>$token));?>">淘宝天猫店铺配置</a></li>
<!--							<li <?php if(MODULE_NAME == 'apilist'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Api/index',array('token'=>$token));?>">融合第三方</a></li>-->
							<li <?php if(MODULE_NAME == 'Adma'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Adma/index',array('token'=>$token));?>">DIY宣传页</a></li>
							<li <?php if(MODULE_NAME == 'Photo'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Photo/index',array('token'=>$token));?>">3G图集(相册)</a><span class="new"></span>
							</li>
							 <li <?php if(MODULE_NAME == 'Host'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Host/index',array('token'=>$token));?>">通用订单(酒店,KTV)</a></li> 
							 <li <?php if((MODULE_NAME == 'Product') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Groupon/index',array('token'=>$token));?>">微团购</a>
							 </li>
							 <li <?php if((MODULE_NAME == 'Product') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> >
								<a href="<?php echo U('Product/index',array('token'=>$token));?>">微商城</a>
							</li> 
							<li <?php if(ACTION_NAME == 'orders'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> >
								<a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>1));?>">无线订餐（网络打印）</a>
							</li>
							<li <?php if(MODULE_NAME == 'Selfform'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> >
								<a href="<?php echo U('Selfform/index',array('token'=>$token));?>">万能表单,报名,留言,预约</a>
							</li>
							<!--li <?php if(MODULE_NAME == 'Vote'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Vote/index',array('token'=>$token));?>">3G投票活动</a><span class="new"></span>
							</li>
							<li <?php if(MODULE_NAME == 'Question'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Question/index',array('token'=>$token));?>">一站到底</a><span class="new"></span>
							</li>
							<li <?php if(MODULE_NAME == 'Ordering'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> >
								<a href="<?php echo U('Ordering/index',array('token'=>$token));?>">在线订餐</a><span class="new"></span>
							</li-->
						</ul>
						<ul>
							<div class="nav-header">推广活动</div>
							<li <?php if(MODULE_NAME == 'Lottery'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Lottery/index',array('token'=>$token));?>">幸运大转盘</a><span class="new"></span>
							</li>
							<li <?php if(MODULE_NAME == 'Coupon'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Coupon/index',array('token'=>$token));?>">优惠券</a>
							</li>
							<li <?php if(MODULE_NAME == 'Guajiang'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Guajiang/index',array('token'=>$token));?>">刮刮卡</a>
							</li>
                           <li <?php if(MODULE_NAME == 'Marrycard'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Marrycard/index',array('token'=>$token));?>">微喜帖<span class="new"></span></a>
							</li>
						</ul>
						<ul>
						<div class="nav-header">会员卡<span class="new"></span></div>
							<li <?php if(ACTION_NAME == ''): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Member_card/index',array('token'=>$token));?>">会员卡设计</a>
							</li>
<!--							<li>
								<a href="<?php echo U('Member_card/privilege',array('token'=>$token));?>">最新通知</a>
							</li>-->
							<li <?php if(ACTION_NAME == 'privilege'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Member_card/privilege',array('token'=>$token));?>">会员特权</a>
							</li>
							<li <?php if(ACTION_NAME == 'info'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Member_card/info',array('token'=>$token));?>">会员卡详情</a>
							</li>
							<li <?php if(ACTION_NAME == 'create'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Member_card/create',array('token'=>$token));?>">在线开卡(自定义卡号)</a>
							</li>
							<li <?php if(ACTION_NAME == 'exchange'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Member_card/exchange',array('token'=>$token));?>">积分设置</a>
							</li>
								<li <?php if(MODULE_NAME == 'Member'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="<?php echo U('Member/index',array('token'=>$token));?>">会员资料管理</a><span class="new"></span>
							</li>
						</ul>
						
						
						
						<ul>
							<div class="nav-header">统计分析</div>
							<li <?php if(MODULE_NAME == 'index'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>>
								<a href="javascript:alert('即将发布')">请求数详情</a>
							</li>
						</ul>
					</div>
				</div>  
<style type="text/css">

.userinfoArea th {
width: 100px;
}
.clr{
clear:both;
}
.yulan {
    background: url(<?php echo RES;?>/images/adma/erweimabg.png) repeat scroll 0 0 #4E5359;
    color: #666666;
    font:14px/1.5  Microsoft YaHei,Helvitica,Verdana,Tohoma,Arial,san-serif;
    margin: 0;
    padding: 0;
color: #666666;
}
.yulan .main{ margin:0 auto; }
.yulan h1{ font-size:26px; color:#f5f5f5; font-weight:normal; text-align: center; margin:35px 0 25px 0; text-shadow:0 1px 3px #111111;}
.yulan .erweima{height: 301px;
    margin: 0 auto;
    width: 301px;}
.yulan .erweima img{border: medium none;
-moz-box-shadow: 0 4px 3px 2px #333333;
-webkit-box-shadow: 0 4px 3px 2px #333333;
    box-shadow: 0 4px 3px 2px #333333;
-webkit-border-radius:6px;
-moz-border-radius:6px;
border-radius:6px;
    width: 100%;}
.yulan .beizhu{ margin:15px auto 5px;text-align: center;}
.yulan .beizhu p{ line-height: 48px;}
.yulan .beizhubg{color: #B4B7BC;background: url(<?php echo RES;?>/images/adma/erweima_bg2.png) repeat-x scroll 0 0 transparent;
    font-size: 12px;
    height: 48px;
    margin: 10px auto;
    width: 230px;text-shadow: 0 -1px 0 #111112;
line-height: 48px;display: inline-block;position: relative;}
.yulan .beizhuleft{background: url(<?php echo RES;?>/images/adma/erweima_bg2_left.png) no-repeat scroll 0 0 transparent;
    display: block;
    float: left;
    height: 48px;
    margin-left: -26px;
    width: 26px;}
.yulan .beizhuright{ background: url(<?php echo RES;?>/images/adma/erweima_bg2_right.png) no-repeat scroll 0 0 transparent;
    display: block;
    float: right;
    height: 48px;
    margin-right: -26px;
    width: 26px;}
.yulan .content{color: #B4B7BC; font-size:14px;padding:5px;width:300px; margin:0 auto;text-shadow: 0 -1px 0 #111112;
float:none; background-color:transparent;min-height:40px;border:0;
}
.yulan .footer {
background: url(<?php echo RES;?>/images/adma/erweimabg.png) repeat scroll 0 0  transparent;
    color: #AAAAAA;
    margin:20px auto 0;
    text-shadow: 0 -1px 0 #111111;
text-align:center;
line-height: 48px;
width: 100%;
padding:0;
}
.yulan .footer p{
    background: url(<?php echo RES;?>/images/adma/erweima_footer.png) no-repeat scroll center top transparent;
font-size:12px;line-height: 48px;
}
</style>

<div class="content">

<div class="cLineB">
  <h4>微信公众号二维码推广页设置<span class="FAQ">推广之用，可以发布到QQ群微博博客论坛等等...</span></h4>
 </div>
 
         <form class="form" method="post" action="" target="_top" enctype="multipart/form-data">
         
         <div class="msgWrap bgfc">
  	 
<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
<th width="120">推广页地址：</th>
<td width="430"><a href="<?php echo C('site_url');?>/index.php/show/<?php echo (session('token')); ?>" target="ddd" title="点击查看推广页" class="green" target="_blank"><?php echo C('site_url');?>/index.php/show/<?php echo (session('token')); ?></a></td>
<td rowspan="6" valign="top" class="yulan">
<div class="main">
<h1 id="adtitle"><?php echo ($adma["title"]); ?></h1>
<div class="erweima"><img id="gzhewm" src="<?php echo ($adma["url"]); ?>"></div>
<div class="beizhu">
<div class="beizhubg">
<div class="beizhuleft"></div>
<div class="beizhuright"></div>
<p>请使用微信扫描二维码关注此公众号</p>
</div>
</div>
<div class="content" id="gzhinfo">
        <?php echo ($adma["info"]); ?>
</div>
<div class="clr"></div>
<div class="footer"><p id="gzhcopyright"><?php echo ($adma["copyright"]); ?></p></div>
</div>
</td>
</tr>
 <tr>
<th valign="top">宣传页标题名：</th>
<td><input type="text" name="title" value="<?php echo ($adma["title"]); ?>" class="px" style="width:400px;" id="etitle" onblur="document.getElementById('adtitle').innerHTML=document.getElementById('etitle').value;">
<br>

</td>
</tr>	
 <tr>
<th valign="top">二维码地址：</th>
<td><input type="text" name="url" value="<?php echo ($adma["url"]); ?>" class="px" style="width:400px;" id="ewm" onblur="document.getElementById('gzhewm').src=document.getElementById('ewm').value;">
<br>
<p>到公众平台下载<span class="red">二维码边长为12CM，大小为344×344PX</span>.</p>
<p>传到自己的图床获取外链地址，<span class="red">不要直接使用公众平台的地址。</span><input style="font-size:12px;color:red"type=button onclick="window.open('<?php echo U('Upload/index',array('token'=>$token,'n'=>url));?>')" value="点击上传图片"></p>
</td>
</tr>				
                            <tr>
<th valign="top"><br>
功能介绍：</th>
<td valign="top"><textarea class="px" id="info" name="info" style="width:400px; height:120px" onkeyup="DivFollowingText2()"><?php echo ($adma["info"]); ?></textarea> 
<script type="text/javascript">
function DivFollowingText2()
{
document.getElementById("gzhinfo").innerHTML=document.getElementById("info").value;
}
</script> 
<br>
请简单描述您的微信公众号可以给粉丝带来什么好处，<br>
尽量控制在<span class="red">150文字以内</span>。</td>
</tr>
<tr>
	<th width="120" valign="top">版权信息:</th>
	<td>
	<input type="text" name="copyright" value="<?php echo ($adma["copyright"]); ?>" class="px" style="width:400px;text-align:left;color:rgb(0, 0, 0);float:none"" id="copyright" onclick="document.getElementById('gzhcopyright').innerHTML=this.value;" onkeyup="DivFollowingText3()"/>
	<script type="text/javascript">
	function DivFollowingText3()
	{
	document.getElementById("gzhcopyright").innerHTML=document.getElementById("copyright").value;
	}
	</script> 
		<br/>
		<span>例如：© 2001-2013 <?php echo C('site_name');?>版权所有</span>
		</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><button type="submit" name="button" class="btnGreen">保存</button>
<a href="index.php?ac=erweima-edit&amp;id=9878" class="btnGray vm">取消</a>
<a href="<?php echo C('site_url');?>/index.php/show/<?php echo (session('token')); ?>" class="right btnGray vm" target="ddd" style=" margin-right:20px" target="_blank">查看推广页</a>
</td>
</tr>

</tbody>
</table>
</div> 
  
 </form>
  
        </div>
﻿</div>
</div>
</div>

<style>
.IndexFoot {
	BACKGROUND-COLOR: #333; WIDTH: 100%; HEIGHT: 39px
}
.foot{ width:988px; margin:0px auto; font-size:12px; line-height:39px;}
.foot .foot_page{ float:left; width:600px;color:white;}
.foot .foot_page a{ color:white; text-decoration:none;}
#copyright{ float:right; width:380px; text-align:right; font-size:12px; color:#FFF;}
</style>
<div class="IndexFoot" style="height:120px;clear:both">
<div class="foot">
<div class="foot_page">
<a href="<?php echo C('site_url');?>"><?php echo C('site_name');?> ,微信公众平台营销</a><br/>
帮助您快速搭建属于自己的营销平台,构建自己的客户群体。<br/>
大转盘、刮刮卡，会员卡,优惠卷,订餐,订房等营销模块,客户易用,易懂,易营销（<?php echo C('site_name');?> 易服务理念）。
</div>
<div id="copyright">
	<?php echo C('site_name');?>(c)2013-2018版权所有<br/>
	技术支持：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:51" alt="联系我吧" title="联系我吧"/></a>
	售前咨询：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:51" alt="联系我吧" title="联系我吧"/></a>

</div>
    </div>
</div>
<script src="/images/css/qqserver.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/images/css/qqserver.css"/>
<div id="onlinebox" class="onlinebox onlinebox_1 onlinebox_1_2" style="position: fixed; top: 80px; right:35px; ">
	<div class="onlinebox-showbox" id="onlinebox-showbox" onMouseMove="qq(0)"><span>在<br>线<br>客<br>服<br></span></div>
	<div class="onlinebox-conbox" id="onlinebox-conbox" style="position: absolute; left: -94px; width: 118px; display:none;">
		<div class="onlinebox-top" id="onlinebox-top" title="点击可隐藏" onClick="qq(1)"><span>在线客服</span></div>
		<div class="onlinebox-center">
			<div class="onlinebox-center-box">
				<dl>
					<dt>使用帮助</dt>
						<dd><a href="tencent://message/?uin=<?php echo C('site_qq');?>&amp;Site=&amp;Menu=yes" title="QQ咨询服务">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:42"></a>
						</dd>
					</dl>
				<div class="clear"></div>
				<dl>
					<dt>技术询问</dt>
					<dd>
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes">
							<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:42" alt="咨询服务" title="咨询服务"/>
						</a>
					</dd>
				</dl>
				<div class="clear"></div>
				<dl><dt>合作加盟</dt>
				<dd>
					<a href="tencent://message/?uin=<?php echo C('site_qq');?>&amp;Site=&amp;Menu=yes" title="QQ合作加盟">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:47">
					</a>
				</dd>
				</dl>
				<div class="clear"></div>
			</div>
		</div>
		<div class="onlinebox-bottom">
			<div class="onlinebox-bottom-box">
				<div class="online-tbox">
					<div style="text-align: center; "><strong>在线时间</strong><br>	08:30-17:30<br>
						<span style="color:#999;">—————————</span><br>
						<span style="font-weight: bold; ">服务热线<br>
							<span style="font-weight: normal; "><br></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="onlinebox-bottom-bg"></div>
	</div>
</div>
<div style="display:none">
<?php echo C('counts');?>
</div>
</body>
</html>