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
<body oncontextmenu="return false" onselectstart ="return false" id="nv_member" class="pg_CURMODULE" onkeydown="if(event.keyCode==27) return false;">


<div class="topbg">
<div class="top">
<div class="toplink">
<style>
.topbg{BACKGROUND-IMAGE: url(<?php echo RES;?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:124px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
	MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 124px;
}

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
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
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
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION['uid']==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="<?php echo U('User/Index/index');?>" hidefocus="true"><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
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
	<link href="./themes/User/default/common/css/style.css" rel="stylesheet" type="text/css">
	<script src="./themes/Static/jquery-1.4.2.min.js" type="text/javascript"></script>
	<div class="contentmanage">
		<div class="developer">
			<div class="appTitle normalTitle" style="padding: 20px;">
				<h2>会员充值</h2>
				<div class="accountInfo"></div>
				<div class="clr"></div>
			</div>
			<div class="tableContent">
				<!--左侧功能菜单-->
				<div class="sideBar">
					<div class="catalogList">
						<ul>
							<li class="subCatalogList"><a href="<?php echo U('Index/useredit');?>">修改密码</a></li>
							<li class="subCatalogList"><a href="<?php echo U('Index/index');?>">我的公众号</a></li>
							<li class="subCatalogList"><a href="<?php echo U('Index/add');?>">添加公众号</a></li>
							<li class="subCatalogList"><a href="<?php echo U('Alipay/index');?>">会员充值</a></li>
							<li class="selected"><a href="<?php echo U('Index/pay');?>">会员续费</a></li>
						</ul>
					</div>
				</div>
				<div class="content">
					<style>
					.usercontent ul li{
					float:none;
					line-height:50px;
					padding-left:10px;
					}
					input{border: 1px solid #DDDDDD;height:30px;width:200px;margin-left:10px;}
					.new-btn-login{
						background-color: transparent;
						background-image: url("<?php echo RES;?>/images/img/new-btn-fixed.png");
						border: medium none;
						border:1px solid red;
						
					}
					.new-btn-login{
						background-position: 0 -198px;
						width: 82px;
						color: #FFFFFF;
						font-weight: bold;
						height: 28px;
						line-height: 28px;
						padding: 0 10px 3px;
						
					}
					.new-btn-login:hover{
						background-position: 0 -167px;
						width: 82px;
						color: #FFFFFF;
						font-weight: bold;
						height: 28px;
						line-height: 28px;
						padding: 0 10px 3px;
					}
					.bottonbox{
					border: 1px solid #D74C00;
					padding: 1px;
					display: inline-block;
					}
					</style>
					<script>
					$(function(){
					var price=new Array();
							<?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?>price[<?php echo ($p["id"]); ?>]=<?php echo ($p["price"]); ?>;<?php endforeach; endif; else: echo "" ;endif; ?>
						$('#group').change(function(){		
							
					$('#price').val(price[$('#group').val()]*$('#num').val());
						});
						$('#num').change(function(){		
							
					$('#price').val(price[$('#group').val()]*$('#num').val());
						});
					});
					</script>
					<div class="usercontent">
						<form action="<?php echo U('Index/dopay');?>" method="post">
						<ul>
							<li> 
								<b>充值选项: </b>
								<select name="gid" style="margin-left:10px;" id="group">
									<?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?><option value="<?php echo ($group["id"]); ?>" <?php if($_SESSION['gid'] == $group['id']): ?>selected="selected"<?php endif; ?>><?php echo ($group["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
								<select name="num" style="margin-left:10px;" id="num">
									<option value="1">1个月</option>
									<option value="2">2个月</option>
									<option value="3">3个月</option>
									<option value="4">4个月</option>
									<option value="5">5个月</option>
									<option value="6">6个月</option>
									<option value="7">7个月</option>
									<option value="8">8个月</option>
									<option value="9">9个月</option>
									<option value="10">10个月</option>
									<option value="11">11个月</option>
									<option value="12">12个月</option>		
								</select>
							</li>
							<li> <b>充值用户名: </b><input type="text" name="uname" value="<?php echo (session('uname')); ?>" size="60" > <b>充值帐号,默认即可请勿修改</b></li>
							<li> <b>充值金额: </b><input type="text" name="price" value="<?php echo ($user["price"]); ?>" id="price" size="60"> <b>先择对应的充值选项,价格自动生成</b></li>
							<li><span class="bottonbox"><button class="new-btn-login" type="submit" style="text-align:center;">确认续费</button></span></li>
						</ul>
						</form>
						<div class="clr"></div>
					</div>
					<div class="cLine">
						<div class="pageNavigator right">
							<div class="pages"></div>
						</div>
						<div class="clr"></div>
					</div>
				</div>
				<div class="clr"></div>
			</div>
		</div>
	</div>
</div>
<!--底部-->
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