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
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
<div class="content">
  <div class="cLineB">
        <h4>模板管理 <span class="FAQ">选择适合您的模版风格，手机输入"首页"测试效果。(部分模版如无法选择请提升等级后方可选择)</span></h4><a href="<?php echo U('User/Yulan/index',array('token'=>$_SESSION['token']));?>" target="_blank" class="right btnGrayS vm" style="margin-top:-27px">微网站预览</a>    </div>
    <div class="msgWrap form">
        <ul id="tags">
            <li class="selectTag"><a onclick="selectTag('tagContent0',this)" href="javascript:void(0)">1. 栏目首页模板风格</a> </li>
            <li><a onclick="selectTag('tagContent1',this)" href="javascript:void(0)">2.图文列表模板风格</a> </li>
            <li><a onclick="selectTag('tagContent2',this)" href="javascript:void(0)">3.图文详细页模板风格</a> </li>
            <div class="clr"></div>
        </ul>

        <div id="tagContent">
            <div class="tagContent selectTag" id="tagContent0">
                <fieldset>
                    <ul class="cateradio">
                        <li <?php if(($info["tpltypeid"]) == "1"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate1.png">
                                <input class="radio" type="radio" name="optype" value="1" <?php if(($info["tpltypeid"]) == "1"): ?>checked<?php endif; ?> /> 模板1 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "2"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate2.png">
                                <input class="radio" type="radio" name="optype" value="2" <?php if(($info["tpltypeid"]) == "2"): ?>checked<?php endif; ?> /> 模板2 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "3"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate3.png">
                                <input class="radio" type="radio" name="optype" value="3" <?php if(($info["tpltypeid"]) == "3"): ?>checked<?php endif; ?> /> 模板3 
                            </label>
                        </li>
                          <li <?php if(($info["tpltypeid"]) == "4"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate4.png">
                                <input class="radio" type="radio" name="optype" value="4" <?php if(($info["tpltypeid"]) == "4"): ?>checked<?php endif; ?> /> 模板4 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "5"): ?>class="active"<?php endif; ?>><label>
                                <img src="<?php echo RES;?>/images/cate9.png">
                                <input class="radio" type="radio" name="optype" value="5" <?php if(($info["tpltypeid"]) == "5"): ?>checked<?php endif; ?> /> 模板5 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "6"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate106.png">
                                <input class="radio" type="radio" name="optype" value="6" <?php if(($info["tpltypeid"]) == "6"): ?>checked<?php endif; ?> /> 模板6 
                            </label>
                        </li> 
                        <li <?php if(($info["tpltypeid"]) == "7"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate107.png">
                                <input class="radio" type="radio" name="optype" value="7" <?php if(($info["tpltypeid"]) == "7"): ?>checked<?php endif; ?> /> 模板7 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "8"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate108.png">
                                <input class="radio" type="radio" name="optype" value="8" <?php if(($info["tpltypeid"]) == "8"): ?>checked<?php endif; ?> /> 模板8
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "9"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate109.png">
                                <input class="radio" type="radio" name="optype" value="9" <?php if(($info["tpltypeid"]) == "9"): ?>checked<?php endif; ?> /> 模板9 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "10"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate110.png">
                                <input class="radio" type="radio" name="optype" value="10" <?php if(($info["tpltypeid"]) == "10"): ?>checked<?php endif; ?> /> 模板10 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "11"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate111.png">
                                <input class="radio" type="radio" name="optype" value="11" <?php if(($info["tpltypeid"]) == "11"): ?>checked<?php endif; ?> /> 模板11
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "12"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate112.png">
                                <input class="radio" type="radio" name="optype" value="12" <?php if(($info["tpltypeid"]) == "12"): ?>checked<?php endif; ?> /> 模板12
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "13"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate113.png">
                                <input class="radio" type="radio" name="optype" value="13" <?php if(($info["tpltypeid"]) == "13"): ?>checked<?php endif; ?> /> 模板13
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "14"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate114.png">
                                <input class="radio" type="radio" name="optype" value="14" <?php if(($info["tpltypeid"]) == "14"): ?>checked<?php endif; ?> /> 模板14
                            </label>
                        </li> 
                         <li <?php if(($info["tpltypeid"]) == "15"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate5.png">
                                <input class="radio" type="radio" name="optype" value="15" <?php if(($info["tpltypeid"]) == "15"): ?>checked<?php endif; ?> /> 模板15
                            </label>
                        </li>
                       <li <?php if(($info["tpltypeid"]) == "16"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate116.png">
                                <input class="radio" type="radio" name="optype" value="16" <?php if(($info["tpltypeid"]) == "16"): ?>checked<?php endif; ?> /> 模板16 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "17"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate117.png">
                                <input class="radio" type="radio" name="optype" value="17" <?php if(($info["tpltypeid"]) == "17"): ?>checked<?php endif; ?> /> 模板17
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "18"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate118.png">
                                <input class="radio" type="radio" name="optype" value="18" <?php if(($info["tpltypeid"]) == "18"): ?>checked<?php endif; ?> /> 模板18
                            </label>
                        </li>
                          <li <?php if(($info["tpltypeid"]) == "19"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate119.png">
                                <input class="radio" type="radio" name="optype" value="19" <?php if(($info["tpltypeid"]) == "19"): ?>checked<?php endif; ?> /> 模板19 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "20"): ?>class="active"<?php endif; ?>><label>
                                <img src="<?php echo RES;?>/images/cate120.png">
                                <input class="radio" type="radio" name="optype" value="20" <?php if(($info["tpltypeid"]) == "20"): ?>checked<?php endif; ?> /> 模板20
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "21"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate121.png">
                                <input class="radio" type="radio" name="optype" value="21" <?php if(($info["tpltypeid"]) == "21"): ?>checked<?php endif; ?> /> 模板21 
                            </label>
                        </li> 
                        <li <?php if(($info["tpltypeid"]) == "22"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate122.png">
                                <input class="radio" type="radio" name="optype" value="22" <?php if(($info["tpltypeid"]) == "22"): ?>checked<?php endif; ?> /> 模板22 
                            </label>
                        </li> 
                        <li <?php if(($info["tpltypeid"]) == "23"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate123.png">
                                <input class="radio" type="radio" name="optype" value="23" <?php if(($info["tpltypeid"]) == "23"): ?>checked<?php endif; ?> /> 模板23
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "24"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate124.png">
                                <input class="radio" type="radio" name="optype" value="24" <?php if(($info["tpltypeid"]) == "24"): ?>checked<?php endif; ?> /> 模板24
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "25"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate125.png">
                                <input class="radio" type="radio" name="optype" value="25" <?php if(($info["tpltypeid"]) == "25"): ?>checked<?php endif; ?> /> 模板25 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "26"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate126.png">
                                <input class="radio" type="radio" name="optype" value="26" <?php if(($info["tpltypeid"]) == "26"): ?>checked<?php endif; ?> /> 模板26 
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "27"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate127.png">
                                <input class="radio" type="radio" name="optype" value="27" <?php if(($info["tpltypeid"]) == "27"): ?>checked<?php endif; ?> /> 模板27
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "28"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate128.png">
                                <input class="radio" type="radio" name="optype" value="28" <?php if(($info["tpltypeid"]) == "28"): ?>checked<?php endif; ?> /> 模板28
                            </label>
                        </li>
                        <li <?php if(($info["tpltypeid"]) == "29"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate129.png">
                                <input class="radio" type="radio" name="optype" value="29" <?php if(($info["tpltypeid"]) == "29"): ?>checked<?php endif; ?> /> 模板29
                            </label>
                        </li>
<!--                        <li <?php if(($info["tpltypeid"]) == "30"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate130.png">
                                <input class="radio" type="radio" name="optype" value="30" <?php if(($info["tpltypeid"]) == "30"): ?>checked<?php endif; ?> /> 模板30
                            </label>
                        </li> 
                         <li <?php if(($info["tpltypeid"]) == "31"): ?>class="active"<?php endif; ?>>
                            <label>
                                <img src="<?php echo RES;?>/images/cate131.png">
                                <input class="radio" type="radio" name="optype" value="31" <?php if(($info["tpltypeid"]) == "31"): ?>checked<?php endif; ?> /> 模板31
                            </label>
                        </li> -->
                    </ul>
                </fieldset>
            </div>
            <div class="tagContent" id="tagContent1">
                <fieldset>
                    <ul class="cateradio2">
                        <li <?php if(($info["tpllistid"]) == "4"): ?>class="active"<?php endif; ?> >
                            <label><img src="<?php echo RES;?>/images/list4.png">
                                <input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="4" <?php if(($info["tpllistid"]) == "4"): ?>checked<?php endif; ?> /> 模板2(省流量)
                            </label>
                        </li>
                        <li <?php if(($info["tpllistid"]) == "1"): ?>class="active"<?php endif; ?>>
                            <label><img src="<?php echo RES;?>/images/list1.png">
                                <input class="radio2" type="radio" name="optype2" value="1" <?php if(($info["tpllistid"]) == "1"): ?>checked<?php endif; ?> /> 模板1(美观)
                            </label>
                        </li>
                    </ul>
                </fieldset>
            </div>
            <div class="tagContent" id="tagContent2">
                <fieldset>
                    <ul class="cateradio3">
                        <li <?php if(($info["tplcontentid"]) == "1"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/news1.png"><input class="radio3" type="radio" name="optype3" value="1" <?php if(($info["tplcontentid"]) == "1"): ?>checked<?php endif; ?>/>模板1(有头像) </label></li>
                        <li <?php if(($info["tplcontentid"]) == "3"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/news3.png"><input class="radio3" type="radio" name="optype3" value="3" <?php if(($info["tplcontentid"]) == "3"): ?>checked<?php endif; ?>/>模板3(无头像)</label></li>
                    </ul>
                </fieldset>
            </div>
            <div class="tagContent" id="tagContent3">
                <fieldset>
                    <div class="cateradio4">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="400" rowspan="2" valign="top">
                                        <div class="samsung-render">
                                            <iframe src="/index.php?g=Wap&m=Index&token={pigcms:$info.token}&show=1" id="myiframe" width="320" height="406" frameborder="0" style="overflow-x:hidden;"></iframe>
                                        </div>
                                    </td>
                                    <td valign="top"><h3>请选择你喜欢的颜色风格，实时预览 (<span style="color:#c30">注意：只有在手机上才能获得最佳浏览效果，电脑浏览并不一定是最终显示效果，并且仅部分模板支持更换颜色风格</span>)</h3>
                                        <ul>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="0" <?php if(($info["color_id"]) == "0"): ?>checked="checked"<?php endif; ?>> 默认风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="1" <?php if(($info["color_id"]) == "1"): ?>checked="checked"<?php endif; ?>> 黑色风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="2" <?php if(($info["color_id"]) == "2"): ?>checked="checked"<?php endif; ?>> 蓝色风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="3" <?php if(($info["color_id"]) == "3"): ?>checked="checked"<?php endif; ?>> 木纹风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="4" <?php if(($info["color_id"]) == "4"): ?>checked="checked"<?php endif; ?>> 橙色风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="5" <?php if(($info["color_id"]) == "5"): ?>checked="checked"<?php endif; ?>> 紫色风格</label></li>
                                            <li><label><input class="radio4" type="radio" name="optype4" value="6" <?php if(($info["color_id"]) == "6"): ?>checked="checked"<?php endif; ?>> 绿色风格</label></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="clr"></div>
                    </div>
                </fieldset>
            </div>
        </div>

        <script type="text/javascript">
            function selectTag(showContent,selfObj){
                // 操作标签
                var tag = document.getElementById("tags").getElementsByTagName("li");
                var taglength = tag.length;
                for(i=0; i<taglength; i++){
                    tag[i].className = "";
                }
                selfObj.parentNode.className = "selectTag";
                // 操作内容
                for(i=0; j=document.getElementById("tagContent"+i); i++){
                    j.style.display = "none";
                }
                document.getElementById(showContent).style.display = "block";


            }
        </script>


        <script>

            $(".radio").click(function(){
                $(".cateradio li").each(function(){
                    $(this).removeClass("active");
                });
                $(this).parents("li").addClass("active");
                var myurl='index.php?g=User&m=Tmpls&a=add&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});
                $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());


            });
            $(".radio2").click(function(){
                $(".cateradio2 li").each(function(){
                    $(this).removeClass("active");
                });
                $(this).parents("li").addClass("active");
  
                var myurl ='index.php?g=User&m=Tmpls&a=lists&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});


            });
            $(".radio3").click(function(){
                $(".cateradio3 li").each(function(){
                    $(this).removeClass("active");
                });
                $(this).parents("li").addClass("active");
  
                var myurl='index.php?g=User&m=Tmpls&a=content&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});

            });
            $(".radio4").click(function(){
                var myurl='index.php?g=User&m=Tmpls&a=background&style='+$(this).val()+'&r='+Math.random(); 
                $.ajax({url:myurl,async:false});
                $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());
            });
            function changeapp(obj,gid){
                if(obj.checked==true){ 
                    var myurl='index.php?ac=app&op=open&value=1&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 
                    $.ajax({url:myurl,async:false});

                }else{
 
                    var myurl='index.php?ac=app&op=open&value=0&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 
                    $.ajax({url:myurl,async:false});

                }
            }

        </script>


        <div class="clr"></div>
    </div>

</div>

<div class="clr"></div>
</div>
</div>
</div> 
<!--底部-->
</div><script>
    KindEditor.ready(function(K) {
        var editor = K.editor({
            allowFileManager : true
        });

        K('#image').click(function() {
            editor.loadPlugin('image', function() {
                editor.plugin.imageDialog({
                    showRemote : false,
                    imageUrl : K('#img').val(),
                    clickFn : function(url, title, width, height, border, align) {
                        K('#img').val(url);
                        var show_img = '<img src = "' + url + '" width="80" height="80" />';
                        $('#show_img').html(show_img);
                        editor.hideDialog();
                    }
                });
            });
        });
    });
</script>
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