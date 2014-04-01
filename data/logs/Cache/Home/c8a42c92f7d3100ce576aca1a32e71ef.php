<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>资费介绍 <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo C('site_url');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
</head>
<body id="nv_member" class="pg_CURMODULE" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<div id="hd">
<div class="wp">
<div class="hdc cl"><h2><a href="./" title="微管家微信接口，微管家微信机器人"><img src="<?php echo STATICS;?>/logo.png" alt="微管家微信接口，微管家微信机器人" border="0" /></a></h2>
<div class="pns t_link">
            <a href="" >&nbsp</a>
			
</div>

                    <div id="nv">
<ul>
	<li id="mn_N828e" ><a href="<?php echo U('Home/Index/index');?>" hidefocus="true"  >首页</a></li>
	<li id="mn_N392a" ><a href="<?php echo U('Home/Index/about');?>" hidefocus="true"  >关于我们</a></li>
	<li id="mn_Nb47d" ><a href="<?php echo U('Home/Index/fc');?>" hidefocus="true"  >功能介绍</a></li>
	<li id="mn_N564f" ><a href="<?php echo U('Home/Index/price');?>" hidefocus="true"  >资费</a></li>
	<li id="mn_N67c1" ><a href="<?php echo U('User/Index/index');?>" hidefocus="true"  >管理</a></li>
	<li id="mn_N3e36" ><a href="<?php echo U('Home/Index/help');?>" hidefocus="true"  >帮助</a></li>
	<?php if($_SESSION[uid]==false): ?><li id="mn_N3e36" > <a href="<?php echo U('Index/login');?>" hidefocus="true"  >登录</a></li>
	<li id="mn_N3e36" ><a href="<?php echo U('Index/reg');?>" hidefocus="true"  >注册</a></li>
	<?php else: ?>
		<li id="mn_N3e36" ><a href="" hidefocus="true"  ><?php echo (session('uname')); ?></a></li>
	<li id="mn_N3e36" ><a href="<?php echo U('Admin/Admin/logout');?>" hidefocus="true"  >退出</a></li><?php endif; ?>
</ul>
</div>
</div>
<div id="mu" class="cl">
</div>
</div>
</div>
<div id="aaa"></div>
<div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/indexbanner.css" rel="stylesheet" type="text/css" />
<script src="<?php echo RES;?>/js/jwplayer.js" type="text/javascript"></script>
<!--中间内容-->
<script src="<?php echo STATICS;?>/jquery.min.js" type="text/javascript"></script>
    <div class="qtcontent">
        <div class="document faq">
            <div class="normalTitle"><h2>资费</h2></div>
            <div class="normalContent">
                <div class="section lastSection">
                	<table width="100%" border="0" cellpadding="0" cellspacing="0" class=" ListProduct8">
<thead>
                			<tr>
                				<th class="lefttitle"><strong>微信号流量套餐</strong></th>
                				<th width="100">vip0</th>
                				<th width="100">vip1</th>
                				<th width="100">vip2</th>
                				<th width="100">vip3</th>
                				<th width="100">vip4</th>
                				<th width="100">vip5</th>
                				<th width="100" class="norightborder">vip6</th>
               				</tr>
</thead>
<tbody>
                			<tr>
                				<td height="60" valign="middle" class="lefttitle">VIP价格
                					<a  class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>VIP只是流量套餐（自定义数和赠送的请求数不同而已），点击问号查看详细购买流程！</p>
</span></a></td>
                				<td><span class="price">1<p>元 / 月</p></span></td>
                				<td><span class="price">30<p>元 / 月</p></span></td>
                				<td><span class="price">50<p>元 / 月</p></span></td>
                				<td><span class="price">100<p>元 / 月</p></span></td>
                				<td><span class="price">150<p>元 / 月</p></span></td>
                				<td><span class="price">200<p>元 / 月</p></span></td>
                				<td class="norightborder"><span class="price">300<p>元 / 月</p></span></td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">自定义条数限额 <span class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p><strong>什么是自定义限额数？</strong></p>
<p>自定义分：自定义文本、自定义图文、自定义语音。意思是，你在YiCms写一个图文就少一个自定义图文〔vip0图文、文本、语音都有2000自定义，够挥霍了。〕</p>
</span></span></td>
                				<td>2000</td>
                				<td>3000</td>
                				<td>5000</td>
                				<td>10000</td>
                				<td>15000</td>
                				<td>20000</td>
                				<td class="norightborder">30000</td>
               				</tr>
                			<tr>
                				<td height="32" class="lefttitle">赠送月请求次数 <span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是请求数？</strong></p>
<p>用户发送一句话，就代表一个请求。
比如：用户发送 "你好！"，系统回复"你也好！"
这就算一个请求，如果系统没回复，则不计。
〔温馨提示：YiCms3G功能〔分类功能〕请求也算在内。3G请求看不到，只是粉丝在浏览里3G网站时候，浏览一篇文章，或者重新打开一个分类就算一个请求。目前3G功能只统计请求并不收费。〕</p>
<p><strong>什么是赠送请求？</strong></p>
<p>用户购买VIP流量套餐后会赠送用户一些功能和请求数，这个请求数被YiCms称为赠送请求数。</p>
</span></span></td>
                				<td>10000</td>
                				<td>150000</td>
                				<td>300000</td>
                				<td>700000</td>
                				<td>1000000</td>
                				<td>2000000</td>
                				<td class="norightborder">3500000</td>
               				</tr>
                			<tr>
             
                		
               				</tr>
                            <tr >
                				<td height="50" class="lefttitle">每月免收活动创建费次数<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是活动创建费？</strong></p>
<p>创建1次活动的基础费是10元,这就是活动创建费。免收活动创建费就是免10元，其他资源消耗还是要正常扣费（如：SN码费用和实际参与抽奖人数的费用）!</p>
</span></span></td>
                				<td>0次</td>
                				<td>1次</td>
                				<td>2次</td>
                				<td>3次</td>
                				<td>4次</td>
                				<td>5次</td>
                				<td class="norightborder">6次</a></td>
               				</tr>
                             <tr >
                				<td height="50" class="lefttitle">底部版权信息<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>版权信息？</strong></p>
<p>	V0 页面有:此页面是由【<a href="http://weixin520.duapp.com/wxapi.php?ac=listhome4&amp;tid=169"><?php echo C('site_name');?>接口平台</a>】系统生成 版权信息</p>
</span></span></td>
                				<td>有</td>
                				<td>无</td>
                				<td>无</td>
                				<td>无</td>
                				<td>无</td>
                				<td>无</td>
                				<td class="norightborder">无</a></td>
               				</tr>
                			<tr >
                				<td height="50" class="lefttitle"> <span class="red">先充值，在购买VIP套餐。</span><span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>简单购买流程提醒</strong></p>
<p>先看自己适合什么套餐，然后充值相应人民币得到YiCms币，用YiCms币购买VIP套餐。（YiCms币为<?php echo C('site_name');?>平台通用货币）</p>
</span></span></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>0));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>1));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>2));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>3));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>4));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>5));?>"><em>立即充值</em></a></td>
                				<td><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>6));?>"><em>立即充值</em></a></td>
                				
                				
               				</tr>
                			<tr>
                				<td height="36" class="lefttitle"><strong>基础功能</strong></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td class="norightborder"></td>
               				</tr>
                			<tr>
                				<td class="lefttitle">天气</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">查快递</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                                <tr>
                				<td class="lefttitle">股票查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">翻译</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">百科</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">百度问答</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">人品计算</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">手机归属地查询</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">身份证查询</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">糗事</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">笑话</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">成语字典</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">谜语</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">成语接龙</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">诗歌接龙</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">藏头藏尾诗</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">诗歌赏析</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">解梦</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">号码吉凶</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">健康指数计算器</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">公交查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">火车查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">电影检索</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">网络音乐搜索</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">今日体彩</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">陪聊纯洁版</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">小黄鸡中文陪聊</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">中文过滤敏感词汇</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">小黄鸡英文版</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr >
                				<td class="lefttitle">音英语4-6级(2012-12月)</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>
<td class="lefttitle">语音播报天气</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">机器人学习功能</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">文字转语音</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr >
                				<td class="lefttitle">黄金白银期货</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>

<tr>
                				<td class="lefttitle">翻译朗读开关</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">路况查询</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">步行导航</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">驾车导航</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">周边生活地图版</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">公交换乘地图版</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">发地理位置直接显示周边</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">自定义LBS数据</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">文本回复模糊匹配</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">图文回复包含匹配</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">回答不上启用第三方接口</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr >
                				<td class="lefttitle">第三方接口优先支持LBS</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
<tr>

<td class="lefttitle">第三方接口优先(无触发词)</td>
                				<td class="error ">&nbsp;</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>



                			<tr>
                				<td height="36" class="lefttitle"><strong>高级功能（需要单独收费）</strong></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td class="norightborder"></td>
               				</tr>
                			<tr>
                				<td class="lefttitle"><a class="green" href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999">刮刮卡活动</a> <a class="tooltips" href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>刮刮卡和大转盘活动需要单独收费，价格相同，按次按实际参与人和奖品数计算，</p><p>计算公式：创建活动10元+奖品个数×0.1元+实际参与人数×0.01元，</p><p>请看详细使用说明及费用说明。点击问号查看详情。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle"><a class="green"  href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999">大转盘活动</a> <a class="tooltips" href="forum.php?mod=viewthread&amp;tid=498&amp;extra=page=1" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>刮刮卡和大转盘活动需要单独收费，价格相同，按次按实际参与人和奖品数计算，</p><p>计算公式：创建活动10元+奖品个数×0.1元+实际参与人数×0.01元，</p><p>请看详细使用说明及费用说明。点击问号查看详情。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle"><a class="green"  href="forum.php?mod=viewthread&amp;tid=696&amp;page=1&amp;extra=#pid3753" target="999">优惠券活动</a> <a class="tooltips" href="forum.php?mod=viewthread&amp;tid=696&amp;page=1&amp;extra=#pid3753" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>优惠券活动需要单独收费，价格跟刮刮卡大转盘不同，</p><p>计算公式：创建活动10元+奖品个数×0.02元+实际参与人数×0.01元，</p><p>请看详细使用说明及费用说明。点击问号查看详情。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>

<tr>
                				<td class="lefttitle">投票活动 <span class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>投票活动需要单独收费，</p><p>计算公式：创建活动1元+实际参与投票人数×0.002元</p></span></span></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">会员卡管理</td>
                				<td class="error">&nbsp;</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td class="norightborder">待定</td>
               				</tr>
                			<tr>
                				<td class="lefttitle">店铺管理</td>
                				<td class="error">&nbsp;</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td class="norightborder">待定</td>
               				</tr>
                			<tr>
                				<td class="lefttitle"><a class="green"  href="forum.php?mod=viewthread&amp;tid=340" target="999">第三方接口融合</a> <a class="tooltips" href="forum.php?mod=viewthread&amp;tid=340" target="999"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p>YiCms可以融合其他的接口，跟YiCms接口一起使用。点击问号查看详情，论坛还有很多教程可以查看。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
<tr>
                				<td class="lefttitle"><a class="green"  href="forum.php?mod=viewthread&amp;tid=173&amp;extra=page=2" target="999">淘宝客模块</a> <a href="forum.php?mod=viewthread&amp;tid=173&amp;extra=page=2" target="999" class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>手机淘宝客，结合微信3G网站生成淘宝客网站，轻松赚取佣金。点击问号查看详情。</p>
</span></a></td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
               				</tr>
                			<tr>
                				<td class="lefttitle">其他功能（待定）</td>
                				<td class="error">&nbsp;</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td>待定</td>
                				<td class="norightborder">待定</td>
               				</tr>
                			<tr>
                				<td height="36" class="lefttitle"></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td class="norightborder"></td>
               				</tr>
                			<tr>
                				<td class="lefttitle">技术指导</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">3G网站</td>
                				<td class="checked " >&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义语音</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义图文</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">自定义文本</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">文本导入导出</td>
                				<td class="error ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder ">&nbsp;</td>
                				</tr>
                			<tr>
                				<td class="lefttitle">图文导入导出</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
                                <tr>
                				<td class="lefttitle">语音导入导出</td>
                				<td class="error">&nbsp;</td>
                				<td class="error">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked ">&nbsp;</td>
                				<td class="checked norightborder">&nbsp;</td>
                				</tr>
</tbody>
               			</table>
                </div>
            <div class="section lastSection">
<p><a href="forum.php?mod=viewthread&amp;tid=258&amp;page=1#pid1575" target="999" class="red">如何充值购买VIP，请点击查看。</a>有疑问的请QQ{arzn::C('site_qq')}提问。</p>
               		</div>
            </div>
        </div>
    </div>
<!--底部-->
  	</div>

<style>
.footNew { background:rgb(27, 27, 27)}
/***** 尾巴 *****/
.foot { /*background-position:0 -118px; background-repeat:repeat-x;*/ height:248px;}
.footOut { background-position:0 -118px;}
.fother { width:970px; margin:0 auto; color:#fff;}
.fother li { position:relative;}
/**/
.fother { width:970px; height:215px; line-height:22px; overflow:hidden; text-align:left;}
.fother li { padding:20px 20px 0; float:left;}
.fother li.fir { width:316px; _width:324px;}
.fother li.sec { width:359px;}
.fother li.last { width:180px; margin:0 !important; padding-right:0 !important;}
.fother h3 ,.fother dt ,.fother a { color:#e7ecf1 !important; text-align:left;}
.fother h3 { font-size:14px; font-weight:bold; border-bottom:#bbcfe6 1px solid; display:inline; padding:0 25px 8px 0; *padding:0 25px 7px 0; text-indent:3px;}
.fother dl { margin:8px 0 25px;margin:8px 0 24px;}
.fother a { padding:0 2px; margin:0 5px 0 0; text-decoration:none !important; display:inline-block; text-indent:0;}
.fother a:hover { background-color:#ead812; color:#3585e3 !important;}
.fother .iconArea a:hover { background-color:none;}

/***** 尾巴新 *****/
.footNew { /*background-position:0 -118px; background-repeat:repeat-x;*/ height:248px;}
.footOutNew { background-position:0 -118px;}
.fotherNew { width:970px; margin:0 auto; color:#fff;}
.fotherNew li { position:relative;}
/**/
.fotherNew { width:970px; height:191px; line-height:22px; overflow:hidden; text-align:left;}
.fotherNew li { padding:30px 20px 0 60px; float:left;}
.fotherNew li.fir { width:316px; _width:324px;}
.fotherNew li.sec { width:185px;}
.fotherNew li.last { width:180px; margin:0 !important; padding-right:0 !important;}
.fotherNew h3 ,.fotherNew dt ,.fotherNew a { color:#e7ecf1 !important; text-align:left;}
.fotherNew h3 { font-size:14px; font-weight:bold; border-bottom:#bbcfe6 1px solid; display:inline; padding:0 25px 8px 0; *padding:0 25px 7px 0; text-indent:3px;}
.fotherNew dl { margin:20px 0 25px;}
.fotherNew dt { position:relative;}
.fotherNew dt em { color:#fff; margin-right:8px;}
.fotherNew a { padding:1px 2px; margin:0 5px 0 0; text-decoration:none !important; display:inline-block; text-indent:0; font-family:"宋体";}
.fotherNew a:hover { background-color:#ead812; color:#3585e3 !important;}
.fotherNew .iconArea a:hover { background-color:none;}
.fotherNew .widSmall {}
.fotherNew .widBig {}
.fotherNew .box1 { float:left; width:90px;}
.fotherNew .box2 { float:left; width:115px;}
.fotherNew .box3 { float:left; width:80px;}

.fLink { background:#d1d1d1; height:37px; text-align:center; color:#333; font-size:14px;}
.fLink a { color:#000 !important; text-decoration:none; font-size:14px; height:32px; line-height:32px; margin:0 10px; font-family:"宋体";}
.fLink a:hover { color:#820C0C !important; text-decoration:underline;}
.flinkMain { width:960px; margin:0 auto; height:35px; line-height:38px; border-bottom:#bdc7d0 2px solid;}
.fLink .marWid a,.fLink .marWidMain a { margin:0 9px; text-indent:0;}
</style>


<div id="ft" class="wp cl">
<div class="footNew">
	<div class="footOutNew">
    	<!-- 其他 begin -->
        <div class="fotherNew">
            <ul>
                <li class="fir">
                    <h3>关联媒体</h3>
                    <dl>
                        <dt class="box1">
							<a href="http://paper.people.com.cn/rmrb/" target="_blank" rel="nofollow">人民日报</a>
                        	<a href="http://health.huanqiu.com/" target="_blank" rel="nofollow">生命时报</a>
							<a href="http://www.globalpeople.com.cn/" target="_blank" rel="nofollow">环球人物</a>
                            
						</dt>
						<dt class="box2">
							<a href="http://www.people.com.cn" target="_blank" rel="nofollow" class="widBig">人民网</a>
                            <a href="http://www.globaltimes.cn/" target="_blank" rel="nofollow" class="widBig">Global Times</a>
							<a href="http://www.globaltraveler.com.cn/" target="_blank" rel="nofollow" class="widBig">环球旅游周刊</a><br>
                            
						</dt>
						<dt class="box3">
							<a href="http://data.huanqiu.com/" target="_blank" rel="nofollow" class="widSmall">环球时报</a>
                            <a href="http://humor.huanqiu.com/" target="_blank" rel="nofollow" class="widSmall">讽刺与幽默</a>
                        </dt>
                    </dl>
                </li>
          <li class="sec">
                    <h3>友情连接</h3>
                    <dl>         
						<dt>
							<?php $info=F('links'); ?>
							<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$loo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($loo["url"]); ?>" ><?php echo ($loo["name"]); ?></a><br/><?php endforeach; endif; else: echo "" ;endif; ?>
						</dt>
                    </dl>
                </li>
          <li class="last">
                    <h3>推荐服务</h3>
                    <dl>
                        <dt class="iconArea"><a href="http://www.huanqiu.com/weibo.html">官方微博，欢迎关注</a></dt>
                        <dt><a href="http://data.huanqiu.com/" target="_blank" title="环球时报-版权数据库">环球时报-版权数据库</a><span class="iconNew"></span></dt>
                        <dt><a href="http://mobile.huanqiu.com/wap/" target="_blank" title="手机环球网">手机环球网</a><em>|</em><span class="iconRss"></span><a href="http://rss.huanqiu.com">RSS订阅</a></dt>
                        
                    </dl>
                </li>
          </ul>
        </div>
        <!-- 其他 end -->
                
        <!-- 链接 begin -->
        <div class="fLink">
            <div class="flinkMain marWid">
                <a href="index.php?g=Home&m=Index&a=about" target="_blank">关于我们</a>|
                <a href="index.php?g=Home&m=Index&a=fc" target="_blank">功能介绍</a>|
                <a href="index.php?g=Home&m=Index&a=help" target="_blank">使用帮助</a>|
                <a href="" target="_blank">官方微博</a>|
                <a href="" target="_blank">诚聘英才</a>|
                <a href="" target="_blank">广告服务</a>|
                <a href="" target="_blank">联系方式</a>|
                <a href="" target="_blank">隐私政策</a>|
                <a href=""" target="_blank">服务条款</a>|
                 <a href="" target="_blank">意见反馈</a>
                 <a href="<?php echo C('site_url');?>" target="_blank"><?php echo C('site_name');?></a>
				
            </div>
        </div>
        <!-- 链接 end -->        
    </div>
    
    <!-- 版权区 begin -->
    <div class="copyArea">
    	<div class="copyMain">
        			
      </div>
    </div>
    <!-- 版权区 end -->
	<div style="display:none"><?php echo C('counts');?></div>
</div>
</html>