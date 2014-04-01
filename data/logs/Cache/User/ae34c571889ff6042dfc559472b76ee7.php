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
.cLine {
    display: block;
    width: 100%;
}
.photo li{ float:left; margin:10px 10px 10px 0; position:relative;}
.photoimg{border: 1px solid #DDDDDD;
box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.15);
-moz-box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.15);
-webkit-box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.15);
-webkit-border-radius:5px 5px 5px 5pxx;
-moz-border-radius:5px 5px 10px 10px;
border-radius:5px 5px 10px 10px;
width:235px;padding: 0 0 10px;
background: url(<?php echo RES;?>/images/photo/bottom.png) repeat-x scroll left bottom #FFFFFF;
background-size:2px auto;
 *background:none;
}
.photoimg .cover{ width:100%;height:131px; overflow:hidden;display:block; background:url(<?php echo RES;?>/images/photo/noneimg.jpg) no-repeat 0 0 #f5f5f5;
-webkit-border-radius:5px 5px 0 0;
-moz-border-radius:5px 5px 0 0;
border-radius:5px 5px 0 0;
}
.photoimg img{ width:100%;
-webkit-border-radius:5px 5px 0 0;
-moz-border-radius:5px 5px 0 0;
border-radius:5px 5px 0 0;
}
.bd h6{ font-size:14px;margin:5px 10px; font-weight:normal;overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap !important;}
.bd p{ margin:5px 10px;}
.sn{ color:#999}
.fr{ position:absolute; bottom:15px;right:10px; display:none;* display: block}
.photoimg:hover .fr{ display:block}
.userinfoArea th {
width: 200px;
}
</style>

<div class="content">
<div class="cLineB">
<h4 class="left">相册 (1) 个</h4>
<div class="searchbar right">
 
</div>
<div class="clr"></div>
</div>
<div class="msgWrap bgfc">
                 <form method="post" action="" enctype="multipart/form-data">
                   <input type="hidden" name="formhash" value="7566c850">
<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
<th>回复：相册,3g相册，等等关键词触发此功能：</th>
<td><strong><a href="" class="green">在回复中，系统默认第一个相册（封面，标题，筒介）为图文回复信息</a></strong></td>
</tr>
<tr>
<th>相册头部图片外链地址:</th>
<td><input type="text" name="picurl" value="" class="px" style="width:400px;"><button type="submit" name="homesubmit" value="true" class="btnGreen vm"><strong>修改</strong></button></td>
</tr></tbody></table>
                            </form>
</div>
<div class="cLine">
<div class="pageNavigator left"> <a href="<?php echo U('Photo/add',array('token'=>$_SESSION['token']));?>" title="创建相册" class="btnGrayS vm bigbtn"><img src="<?php echo RES;?>/images/pic.png" class="vm">创建相册</a> </div>
<div class="clr"></div>
</div>
<div class="msgWrap">
<ul class="photo">
<?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photo): $mod = ($i % 2 );++$i;?><li>
<div class="photoimg">
 <a title="<?php echo ($photo["title"]); ?>" class="cover" href="<?php echo U('Photo/list_add',array('id'=>$photo['id']));?>">
  <img src="<?php echo ($photo["picurl"]); ?>" alt="<?php echo ($photo["title"]); ?>">
 </a>
<div class="bd">
<h6><?php echo ($photo["title"]); ?></h6>
<p class="sn">有<?php echo ($photo["num"]); ?>张照片</p>
</div>
<div class="fr">
<a href="<?php echo U('Photo/list_add',array('id'=>$photo['id']));?>">上传图片</a>　
<a href="<?php echo U('Photo/edit',array('token'=>session('token'),'id'=>$photo['id']));?>">编辑</a>　<a href="javascript:drop_confirm('您确定要删除吗?', '<?php echo U('Photo/del',array('token'=>session('token'),'id'=>$photo['id']));?>');">删除</a>
</div>
</div>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="clr"></div>
</div>

<div class="cLine">
<div class="pageNavigator right">
<div class="pages"><?php echo ($page); ?></div>
</div>
<div class="clr"></div>
</div>
</div>
<script>

function checkAll(form, name) {
for(var i = 0; i < form.elements.length; i++) {
var e = form.elements[i];
if(e.name.match(name)) {
e.checked = form.elements['chkall'].checked;
}
}
}

function changesort(tid,sortval){

var image=new Image();   
image.src='index.php?ac=app&op=sort&wxid=gh_423dwjkewad&tid='+tid+'&sort='+sortval+'&r='+Math.random(); 

}
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