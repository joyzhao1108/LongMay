<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>功能介绍 <?php echo C('site_title');?> <?php echo C('site_name');?></title>
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
<style type="text/css">
<!--


#table {width:170px;;background:#ffffff; overflow:auto;float:left}
.menubg{
float: left;
/*background: url(<?php echo RES;?>/images/img/current-.gif) repeat-y 170px top;*/
overflow-x: hidden;
overflow-y: auto;
border-top:1px solid #EEEEEE;
border-left:1px solid #EEEEEE;
}
.menu0 div{
display:block;

padding:2px 0px;
width:155px;
text-align: left;
text-indent: 10px;
cursor:pointer;
color:  #000000;
border-right: 1px solid #EEEEEE;
border-bottom: 1px solid #EEEEEE;
font-size:12px;position: relative;
}
.menu0 div.hover{
color: #FFFFFF;
text-shadow: 0 1px 1px #467809;

background-color:#08a006;
/*background:#fff url(<?php echo RES;?>/images/img/current.gif) no-repeat right center;*/
}
.menu0 div span{
 background: url(<?php echo RES;?>/images/img/icon_new.gif) no-repeat scroll 0 0 transparent;
    border: 0 none;
    display: block;
    height: 11px;
    position: absolute;
    right: 0;
    top: 0;
    width: 23px;
    z-index: 10;
right: 5px;
    top: 6px;
}
#main0 div{margin:15px 10px;
display: none;text-decoration: none; word-wrap: break-word;
}
#main0 div.block{margin:15px;
display: block;text-decoration: none;word-wrap: break-word;
}
h3{ font-size: 16px; color:#08a006}
.marginb{ margin-bottom:15px;display: block;}
#mediaplayer {
    background-color: #000000;
    color: #FFFFFF;
    height: 615px;
    position: relative;
    width: 820px;
top:0;
right:0;
}
.section { border:0; margin:0; padding:0}
.section p{padding-top:0;margin-top:0; font-size:14px;/*text-indent: 2em;*/}
.normalContent {
    padding: 20px;
}
-->
</style>
<script>
function setTab(m,n){
var tli=document.getElementById("menu"+m).getElementsByTagName("div");
var mli=document.getElementById("main"+m).getElementsByTagName("div");
for(i=0;i<tli.length;i++){
   tli[i].className=i==n?"hover":"";
   mli[i].style.display=i==n?"block":"none";
}
}
</script>
<!--中间内容-->
<div class="qtcontent">
        <div class="intro">
            <div class="normalTitle"><h2><?php echo C('site_name');?>功能简介</h2></div>
            <div class="normalContent">
                				
<div class="section">
 <div id="table">
	<div class="menubg">
		<div class="menu0" id="menu0">
			<div class="hover" onClick="setTab(0,0)">1.天气查询(语音)</div>
			<div class="" onClick="setTab(0,1)">2.快递查询</div>
			<div class="" onClick="setTab(0,2)">3.手机归属地查询</div>
			<div class="" onClick="setTab(0,3)">4.身份证查询</div>
			<div class="" onClick="setTab(0,4)">5.公交查询</div>
			<div class="" onClick="setTab(0,5)">6.火车查询</div>
			<div class="" onClick="setTab(0,6)">7.健康指数查询</div>
			<div class="" onClick="setTab(0,7)">8.实时翻译(语音)</div>
			<div class="" onClick="setTab(0,8)">9.百度百科</div>
			<div class="" onClick="setTab(0,9)">10.百度问答</div>
			<div class="" onClick="setTab(0,10)">11.人品计算</div>
			<div class="" onClick="setTab(0,11)">12.笑话</div>
			<div class="" onClick="setTab(0,12)">13.糗事</div>
			<div class="" onClick="setTab(0,13)">14.谜语</div>
			<div class="" onClick="setTab(0,14)">15.解梦</div>
			<div class="" onClick="setTab(0,15)">16.成语接龙</div>
			<div class="" onClick="setTab(0,16)">17.成语字典</div>
			<div class="" onClick="setTab(0,17)">18.陪聊</div>
			<div class="" onClick="setTab(0,18)">19.机器人学习功能</div>
			<div class="" onClick="setTab(0,19)">20.自定义图文回复</div>
			<div class="" onClick="setTab(0,20)">21.藏头藏尾诗</div>
			<div class="" onClick="setTab(0,21)">22.诗歌接龙</div>
			<div class="" onClick="setTab(0,22)">23.诗歌赏析</div>
			<div class="" onClick="setTab(0,23)">24.网络音乐搜索</div>
			<div class="" onClick="setTab(0,24)">25.网络电影搜索</div>
			<div class="" onClick="setTab(0,25)">26.文字转语音</div>
			<div class="" onClick="setTab(0,26)">27.股票查询</div>
			<div class="" onClick="setTab(0,27)">28.彩票查询</div>
			<div class="" onClick="setTab(0,28)">29.英语4-6级(12年12月)</div>
			<div class="" onClick="setTab(0,29)">30.黄金白银期货</div>
			<div class="" onClick="setTab(0,30)">31.文字转语音</div>
			<div class="" onClick="setTab(0,31)">32.淘宝客模块</div>
			<div class="" onClick="setTab(0,32)">33.周边商铺</div>
			<div class="" onClick="setTab(0,33)">34.刮刮卡刮奖活动</div>
			<div class="" onClick="setTab(0,34)">35.幸运大转盘活动</div>
			<div class="" onClick="setTab(0,35)">36.优惠券活动</div>
			<div class="" onClick="setTab(0,36)">37.周边生活地图版<span class="new"></span></div>
			<div class="" onClick="setTab(0,37)">38.步行导<span class="new"></span>航</div>
			<div class="" onClick="setTab(0,38)">39.驾车导<span class="new"></span>航</div>
			<div class="" onClick="setTab(0,39)">40.路况查询<span class="new"></span></div>
			<div class="" onClick="setTab(0,40)">41.直接显示周边<span class="new"></span></div>
			<div class="" onClick="setTab(0,41)">42.公交换乘地图版<span class="new"></span></div>
			<div class="" onClick="setTab(0,42)">43.查询药价<span class="new"></span></div>
			<div class="" onClick="setTab(0,43)">44.投票活动<span class="new"></span></div>
			<div class="" onClick="setTab(0,44)">45.自定义LBS数据<span class="new"></span></div>
			<div class="" onClick="setTab(0,45)">46.淘宝天猫店铺推广<span class="new"></span></div>
		</div>
	</div>  
</div>
<div style="border:1px solid #ccc;float:left;">
	 <div class="main" id="main0" style="float:left">
                            <div style="display: block;">
                                <span class="marginb">
                                <h3>1.天气查询（语音播报天气）</h3>
                                <p>输入城市+天气，可以马上得到近五天的气情况，出行无忧。</p>
                                <p>例如：上海天气</p>
<p>备注：如果后台开启语音播报天气功能，回复就是语音播报，更有意思！</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn001.jpg">
<img alt="" src="<?php echo RES;?>/images/gn001-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>2.快递查询</h3>
                                <p>输入快递名称+运单号，可以快速查询快递的详细动态，收件从此不用愁。</p>
                                <p>例如：天天快递130004442691</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn002.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>3.手机归属地查询</h3>
                                <p>输入手机号码即可获得该手机相关信息，有手机归属地，手机类型，手机区号，邮编等。</p>
                                <p>例如：13625008699</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn003.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>4.身份证查询</h3>
                                <p>输入身份证号即可获得相关信息。</p>
                                <p>例如：342502198501250013</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn004.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>5.公交查询</h3>
                                <p>输入城市+公交+车次，有3.6万线路</p>
                                <p>例如线路查询：厦门公交92路</p>
                                <p>站点到站点查询：厦门公交厦大医院到软件园二期</p>
                                <p>站点查询：厦门公交厦大医院站</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn005.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>6.火车查询</h3>
                                <p>输入：火车 车次 或 火车 站点 站点，有4460列火车数据。</p>
                                <p>例如车次查询：火车k332 </p>
                                <p>站点到站点查询：火车 厦门 东乡</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn006.jpg">
                                <img alt="" src="<?php echo RES;?>/images/gn006-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>7.健康指数查询</h3>
                                <p>身高单位为cm 体重单位为公斤</p>
                                <p>输入：身高173 体重56  或输入：高173 重56</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn007.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>8.实时翻译(语音)</h3>
                                <p>支持几十种语言的实时翻译，中、英、日、韩、法、俄、等等全文翻译。</p>
<p>输入翻译，可以查询支持的语种有哪些。</p>
<p>英文我爱你：表示把中文翻译成英文，日语早上好：表示把中文翻译成日文</p>
<p>法语我爱你：表示把中文翻译成法语，俄语我爱你：表示把中文翻译成俄语</p>
<p>备注：如果后台开启翻译朗读功能，可以将翻译结果直接朗读出来，</p>
<p>学习世界语言的必备武器！更有意思！</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn008.jpg">
                                <img alt="" src="<?php echo RES;?>/images/gn008-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>9.百度百科</h3>
                                <p>输入百科（bk）+要查询的词，即可得到相关信息。</p>
                                <p>例如：百科刘德华 或 bk刘德华</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn009.jpg">
                                <img alt="" src="<?php echo RES;?>/images/gn009-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>10.百度问答</h3>
                                <p>输入超过5个汉字自动回复相关问答内容。</p>
                                <p>例如：要怎么哄女人开心</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn010.jpg">
                                <img alt="" src="<?php echo RES;?>/images/gn010-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>11.人品计算</h3>
                                <p>输入人品+姓名，计算当天人品。</p>
                                <p>例如：李白人品</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn011.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>12.笑话</h3>
                                <p>输入任何数字：0-9或者笑话或者笑脸的表情</p>
                                <p>可以随机查看笑话，有2.6万数据。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn012.jpg">
                                <img alt="" src="<?php echo RES;?>/images/gn012-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>13.糗事</h3>
                                <p>输入糗事或者任意字母，可以随机查看糗事，有51.5万数据。</p>
                                <p>例如：糗事 或者 q</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn013.jpg">
                                <img alt="" src="<?php echo RES;?>/images/gn013-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>14.谜语</h3>
                                <p>输入谜语，即可玩猜谜语游戏，有5万数据。</p>
                                <p>查答案可输入答案谜语编号，例如：谜语 232</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn014.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>15.解梦</h3>
                                <p>输入梦见发财或者梦到发财，立刻获得解梦信息。</p>
                                <p>例如：梦见我发财了</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn015.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>16.成语接龙</h3>
                                <p>输入正确的成语即可</p>
                                <p>例如：肝肠寸断</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn016.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>17.成语字典</h3>
                                <p>输入例如：成语 半死不活，得到该成语的解释。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn017.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>18.陪聊</h3>
                                <p>开启陪聊功能可以自动跟用户智能聊天</p>
                                <p>目前仅1000条陪聊库，在不断完善中...</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn018.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>19.机器人学习功能</h3>
                                <p>用手机直接发送：问 关键词 答 内容，这样教机器人回答问题，机器人就学会了。</p>
                                <p>例如：问 你是谁 答 我是欧阳啊！</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn019.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>20.自定义图文回复</h3>
                                <p>在<?php echo C('site_name');?>后台设置关键词，编辑对应的回复内容，以图文形式显示。</p>
<p>还有关联的图文展示，推荐阅读。</p>
                                <p>效果更好，用户体验更佳。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn020.jpg" style="vertical-align: top">
<img alt="" src="<?php echo RES;?>/images/gn020-2.jpg">
                            </div>
                    		<div style="display: none;">
                                <span class="marginb">
                                <h3>21.藏头藏尾诗</h3>
                                <p>输入：藏头诗 我爱你香港 或者 cts 我爱你香港 或者</p>
<p>藏尾诗 我爱你香港 或者 cws 我爱你香港</p>
<p>会根据输入的内容自动生成藏头诗或者藏尾诗，非常有意思。</p>
<p>例如：cts 我爱你香港 或者 cws 我爱你香港</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn021.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>22.诗歌接龙</h3>
                                <p>输入诗词的任意一句，会自动回复下一句。</p>
<p>例如：床前明月光</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn022.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>23.诗歌赏析</h3>
                                <p>输入：古诗+诗名或者古诗+诗名+作者，可以欣赏这首完整的诗歌。</p>
<p>例如：古诗 黄鹤楼</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn023.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>24.网络音乐搜索</h3>
                                <p>输入：音乐+歌手+歌名 或者 音乐+歌名 可以欣赏这首歌曲。</p>
<p>例如：音乐 谢霆锋谢谢你的爱</p>
<p>还可以输入：播放音乐|来首歌|来首音乐|放歌|音乐|mp3|点首歌|点歌|我要听歌</p>
<p>来随机播放音乐</p>
<p>还可以输入：陈奕迅的歌或者播放浮夸</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn024.jpg">
<img alt="" src="<?php echo RES;?>/images/gn024-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>25.网络电影搜索</h3>
                                <p>输入：电影+名称 可以欣赏这部电影了，当然有的电影是搜不到的，电影库会慢慢增加。</p>
<p>例如：电影 功夫熊猫</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn025.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>26.文字转语音</h3>
                                <p>输入：朗读+文字，就可以把文字转成语音播放。</p>
<p>例如：朗读你好，乐享欢迎你！</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn026.jpg">
                            </div>
                     		<div style="display: none;">
                                <span class="marginb">
                                <h3>27.股票查询</h3>
                                <p>输入：股票+股票代号或名称或拼音缩写，股票二字可以用gp缩写</p>
<p>例如：股票601088 或者 股票西藏天路 或者 股票dqtl 或者 gp601088</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn027.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>28.彩票查询</h3>
                                <p>输入彩票+名称</p>
<p>可以查询彩票有：双色球、大乐透、七星彩、排列3、排列5、体彩22选5、胜负彩14场、任选9场、4场进球、6场半全场、老11选5、11选5、新11选5、双色球</p>
<p>例如：彩票双色球</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn028.jpg">
<img alt="" src="<?php echo RES;?>/images/gn028-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>29.英语4-6级查询(12年12月)</h3>
                                <p>查询例子：cet杨奕352011122103023</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn029.jpg">
                            </div>

<div style="display: none;">
                                <span class="marginb">
                                <h3>30.黄金白银期货</h3>
                                <p>查询例子：输入9999或9995</p>
<p>支持以下关键词 9995|9999|纸黄金|纸白银|美黄金|美白银|中行本币金|中行外币金|建行黄金|建行白银|建行铂金|纸铂金|纸钯金|美铂金|美钯金|白银td|黄金td|天通银|天通铂金|天通钯金|黄金9995|黄金9999|铂金9995|黄金100g|现货黄金|现货白银|现货铂金|现货钯金|美元指数|国际原油|NYMEX天然气|美元指数|美元人民币|欧元美元|澳元美元|英镑美元|新西兰元美元|美元加元|美元瑞郎|美元港元|美元日元|美元马币|美元新加坡元|美元台币|上证指数|Ａ股指数|Ｂ股指数|综合指数|上证380|上证180|上证50|新综指|沪深300|深证成指|成份Ａ指|成份Ｂ指|深证100R|中小板指|创业板指|新指数|道琼斯30种工业股票平均价格指数|纳斯达克综合指数|标准普尔500指数|道琼斯威尔希尔5000指数|香港恒生指数|台湾台北指数|韩国KOSPI指数|PHILA金银指数|富时100指数|德国DAX指数|法国CAC40指数|俄罗斯MICEX10指数|荷兰AEX指数</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn030.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>31.文字转语音</h3>
                                <p>开启此功能，聊天内容出现敏感词时会自动转成语音，</p><p>你也可以输入朗读+文字，例如：朗读你好呀</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn031.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>32.淘宝客模块</h3>
                                <p>开启此功能，输入：淘宝内衣或者淘宝鞋子，可以查询淘宝的商品。</p>
<p>乐享还有专门的淘宝客功能，适合做手机淘宝客的人使用，粉丝购买后可以得到佣金，手机支付以后是个趋势，抓住先机，以后佣金倍增。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn032.jpg">
<img alt="" src="<?php echo RES;?>/images/gn032-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>33.周边商铺</h3>
                                <p>开启此功能，直接发送地理位置信息，然后输入“附近便利店”</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn033.jpg">
<img alt="" src="<?php echo RES;?>/images/gn033-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>34.刮刮卡刮奖活动</h3>
                                <p>开启此功能，直接发布刮刮卡刮奖活动，设置活动内容、奖项及中将比例，带给粉丝完全不同的感受。</p>
<p>输入“刮刮卡”体验此互动活动</p>
<p style=" color:#F00">备注：目前安卓4.1的系统跟微信4.5有些兼容性问题，导致刮刮卡不能刮，还是可以抽奖，就是少了刮的体验，其他都正常，如果介意的话，请等待微信升级解决此问题后再使用，或者换其他活动。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn034.jpg">
<img alt="" src="<?php echo RES;?>/images/gn034-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>35.幸运大转盘活动</h3>
                                <p>开启此功能，直接发布幸运大转盘活动，设置活动内容、奖项及中将比例，带给粉丝完全不同的感受。</p>
<p>输入"大转盘"体验此互动活动</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn035.jpg">
<img alt="" src="<?php echo RES;?>/images/gn035-2.jpg">
                            </div>
<div style="">
                                <span class="marginb">
                                <h3>36.优惠券活动</h3>
                                <p>开启此功能，直接发布优惠券活动，设置活动内容、奖项等，带给粉丝完全不同的感受。</p>
<p>输入"优惠券"体验此互动活动</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn036.jpg">
<img alt="" src="<?php echo RES;?>/images/gn036-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>37.周边生活地图版</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入附近+关键词即可, </p>
<p>例如 附近酒吧,附近学校,附近工商银行,附近医院,附近小吃,附近美食,附近酒吧,附近咖啡厅,附近公交站,附近加油站.......</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn037.jpg">
<img alt="" src="<?php echo RES;?>/images/gn037-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>38.步行导航</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入： </p>
<p>步行厦大医院到厦大西村 或 厦大医院到厦大西村怎么走</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn038.jpg">
<img alt="" src="<?php echo RES;?>/images/gn038-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>39.驾车导航</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入： </p>
<p>驾车厦大医院到厦大西村 或 厦大医院到厦大西村怎么开</p>
<p>备注：进入地图还可以进行起点拖动使用</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn039.jpg">
<img alt="" src="<?php echo RES;?>/images/gn039-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>40.路况查询</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入 路况 2个字即可。</p>
<p>红色表示拥堵，黄色表示有点堵，绿色表示道路很畅通。请点击放大看详情。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn040.jpg">
<img alt="" src="<?php echo RES;?>/images/gn040-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>41.发地理位置直接显示周边</h3>
                                <p>开启此开关,将不会提示地理位置已经记录，而是直接显示周边数据，不影响关键词。</p>
<p>查询可以通过：附近+关键词，获取附近更精细的分类查询！</p>
<p>例如：附近便利店 附近医院 附近美食 附近小吃 等等</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn041.jpg">
<img alt="" src="<?php echo RES;?>/images/gn041-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>42.公交换成地图版</h3>
                                <p>开启此开关,可以查询公交某个站点到某个站点如何坐车，只能查你当前位置所在城市的公交等</p>
<p>例如：公交龙山桥到SM 或者 厦大西村到中山路怎么坐车</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn042.jpg">
<img alt="" src="<?php echo RES;?>/images/gn042-2.jpg">

                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>43.查药价</h3>
                                <p>包含7.5万种药品的零售价和进价,查询方法: 药价+药品名称 或者 国药准字号</p>
<p>例如：药价 Z11021209 或者 药价 桑菊感冒颗粒</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn043.jpg">
<img alt="" src="<?php echo RES;?>/images/gn043-2.jpg">
                            </div>
<div style="display:none;">
                                <span class="marginb">
                                <h3>44.投票活动</h3>
                                <p>开启此开关,可以发起文本投票和图片投票两种形式，可单选和多选。</p>
<p>范例：给<?php echo C('site_name');?>号输入“投票”或者“图片投票”体验一下投票活动。</p>
                                </span>
                                整理中
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>45.自定义LBS数据</h3>
                                <p>开启此开关,发送位置就回复你自定义的LBS数据</p>
<p>根据你设置的标签，你还可以输入“附近+标签（关键词）”看查询结果</p>
<p>还可以输入"附近300米+标签（关键词）"看查询结果</p>
<p>查看详细图释:</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/gn045.jpg">
								<img alt="" src="<?php echo RES;?>/images/gn045-2.jpg">
                            </div>
<div style="display: none;">
<span class="marginb" style="width:650px;">
<h3>46.淘宝天猫店铺推广</h3>
<p>开启此开关,只需要你填写天猫或淘宝店铺的手机站点地址，简单配置店铺商品常用关键词，就可以直接通过微信检索店铺内的商品，关键词是包含匹配，只要用户输入的信息有包含关键词，就会回复店铺商品信息，起到很好的推广作用，请看下面的范例。</p>
</span>

                            </div>
    </div>
</div>
                	<p class="clr"></p>
            	</div>
</div>
    </div>
<!--底部-->	</div>
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