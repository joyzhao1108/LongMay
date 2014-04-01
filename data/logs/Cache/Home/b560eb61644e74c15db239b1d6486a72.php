<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帮助说明 <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<style>
.xuanze{
	background-color: #c1c9d4;
	border: 1px solid #C1C9D4;
	border-radius: 3px 3px 3px 3px;
	color: #626B8A;
	cursor: pointer;
	font-size: 18px;
	padding: 20px 40px 20px 20px;
	text-shadow: 0 1px 0 white
}
</style>
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
<div class="content" style="width:985px;margin:0 auto;">
      
            </div>
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