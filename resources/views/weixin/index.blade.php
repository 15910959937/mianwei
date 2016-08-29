
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>面试宝典网【http://www.mbaodian.com/】</title>
		<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" href="css/idangerous.swiper.css">
		<link href="css/iscroll.css" rel="stylesheet" type="text/css"
		/>
		<link href="css/cate.css" rel="stylesheet" type="text/css"
		/>
		<style>
		</style>
		<script src="js/iscroll.js" type="text/javascript">
		</script>
		<!--背景音乐start-->
		<script src="js/audio.js" type="text/javascript">
		</script>
		<script type="text/javascript">
			// 11两秒后模拟点击
			setTimeout(function() {
				// IE
				if (document.all) {
					document.getElementById("playbox").click();
				}
				// 其它浏览器
				else {
					var e = document.createEvent("MouseEvents");
					e.initEvent("click", true, true);
					document.getElementById("playbox").dispatchEvent(e);
				}
			},
			2000);
		</script>
		<script type="text/javascript">
			var myScroll;

			function loaded() {
				myScroll = new iScroll('wrapper', {
					snap: true,
					momentum: false,
					hScrollbar: false,
					onScrollEnd: function() {
						document.querySelector('#indicator > li.active').className = '';
						document.querySelector('#indicator > li:nth-child(' + (this.currPageX + 1) + ')').className = 'active';
					}
				});

			}

			document.addEventListener('DOMContentLoaded', loaded, false);
		</script>
	</head>
	<body id="cate75">
		<!--music-->
				<div id="insert1" style="z-index:10000; position:fixed; top:20px;">
		</div>
		<div class="banner">
			<div id="wrapper">
				<div id="scroller">
					<ul id="thelist">
					    <li style="background-image:url('http://v.lanrenmb.com/uploads/i/ieydec1420432915/0/d/d/f/thumb_54b01bf2dfbe2.png');background-attachment: inherit;background-repeat:no-repeat;background-size:cover;-moz-background-size:cover;-webkit-background-size:cover; background-position: center center ">
						</li><li style="background-image:url('http://v.lanrenmb.com/uploads/i/ieydec1420432915/2/5/e/8/thumb_54b018e17fbdc.png');background-attachment: inherit;background-repeat:no-repeat;background-size:cover;-moz-background-size:cover;-webkit-background-size:cover; background-position: center center ">
						</li><li style="background-image:url('http://v.lanrenmb.com/uploads/i/ieydec1420432915/c/2/f/7/thumb_54b0140d3bb97.png');background-attachment: inherit;background-repeat:no-repeat;background-size:cover;-moz-background-size:cover;-webkit-background-size:cover; background-position: center center ">
						</li>					</ul>
				</div>
			</div>
			<div class="clr">
			</div>
		</div>

		<div class="device">
			<a class="arrow-left" href="#">
			</a>
			<a class="arrow-right" href="#">
			</a>
			<div style="cursor: grab;"  class="swiper-container">
				<div style="width: 6720px; height: 205px; transform: translate3d(-1680px, 0px, 0px); transition-duration: 0s;" class="swiper-wrapper">
				 <div style="width: 1680px; height: 205px;" class="swiper-slide swiper-slide-visible swiper-slide-active">
						<div class="content-slide">							
						<a href="{{ URL('collage')}}">
								<div class="mbg">
									<p class="ico">
										<img src="http://v.lanrenmb.com/tpl/static/attachment/icon/canyin/canyin_white/24.png"
										/>
									</p>
									<p class="title">
										面宝试题									</p>
								</div>
							</a>
							
							<a href="liebiao.html">
								<div class="mbg">
									<p class="ico">
										<img src="http://v.lanrenmb.com/tpl/static/attachment/icon/edu/edu_white/9.png"
										/>
									</p>
									<p class="title">
										面宝招聘									</p>
								</div>
							</a>
							
							<a href="http://m.wsq.qq.com/160750279?wecha_id={wechat_id}">
								<div class="mbg">
									<p class="ico">
										<img src="http://v.lanrenmb.com/tpl/static/attachment/icon/edu/edu_white/23.png"
										/>
									</p>
									<p class="title">
										面宝方法									</p>
								</div>
							</a>
							
							<a href="liebiao.html">
								<div class="mbg">
									<p class="ico">
										<img src="http://v.lanrenmb.com/tpl/static/attachment/icon/white/15.png"
										/>
									</p>
									<p class="title">
										用户中心									</p>
								</div>
							</a>


							<a href="http://m.wsq.qq.com/160750279?wecha_id={wechat_id}">
								<div class="mbg">
									<p class="ico">
										<img src="http://v.lanrenmb.com/tpl/static/attachment/icon/edu/edu_white/23.png"
										/>
									</p>
									<p class="title">
										其他功能									</p>
								</div>
							</a>
							
							<a href="liebiao.html">
								<div class="mbg">
									<p class="ico">
										<img src="http://v.lanrenmb.com/tpl/static/attachment/icon/white/15.png"
										/>
									</p>
									<p class="title">
										经验分享									</p>
								</div>
							</a>
							
</div></div>					
				</div>
			<div class="pagination">
					<span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch">
					</span>
					<span class="swiper-pagination-switch">
					</span>
				</div>
			</div>
			<script src="js/jquery-1.10.1.min.js" type="text/javascript">
			</script>
			<script src="js/idangerous.swiper-2.1.min.js" type="text/javascript">
			</script>
			<script>  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script><script>var count = document.getElementById("thelist").getElementsByTagName("li").length;	

var count2 = document.getElementsByClassName("menuimg").length;
for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("li").item(i).style.width = document.documentElement.clientWidth+"px";
  document.getElementById("thelist").getElementsByTagName("li").item(i).style.height = document.documentElement.clientHeight+"px";
  //document.getElementById("thelist").getElementsByTagName("img").item(i).style.width = document.documentElement.clientWidth+"px";
  //document.getElementById("thelist").getElementsByTagName("img").item(i).style.height = document.documentElement.clientHeight+"px";
}
document.getElementById("scroller").style.cssText = " width:"+document.documentElement.clientWidth*count+"px";

   setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );
window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("li").item(i).style.width = document.documentElement.clientWidth+"px";
  document.getElementById("thelist").getElementsByTagName("li").item(i).style.height = document.documentElement.clientHeight+"px";
  //document.getElementById("thelist").getElementsByTagName("img").item(i).style.width = document.documentElement.clientWidth+"px";
  //document.getElementById("thelist").getElementsByTagName("img").item(i).style.height = document.documentElement.clientHeight+"px";
}
 document.getElementById("scroller").style.cssText = " width:"+document.documentElement.clientWidth*count+"px";
} 


</script></div>
			<div class="copyright">
		© 2015 懒人模板版权所有</div>  <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<br>
<br><script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script> <style type="text/css">
body { margin-bottom:60px !important; }
a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0); }
ul, li { list-style:none; margin:0; padding:0 }
.top_bar { position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.top_menu { display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 48px;display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1) inset; }
.top_bar .top_menu>li { -webkit-box-flex:1; position:relative; text-align:center; }
.top_menu li:first-child { background:none; }
.top_bar .top_menu>li>a { height:48px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
.top_bar .top_menu>li.home { max-width:70px }
.top_bar .top_menu>li.home a { height: 60px; width: 60px; margin: auto; border-radius: 60px; position: relative; top: -14px; background: url('photo/home.png') no-repeat center center; background-size: 100% 100%; }
.top_bar .top_menu>li>a label { overflow:hidden; margin: 0 0 0 0; font-size: 12px; display: block !important; line-height: 18px; text-align: center; }
.top_bar .top_menu>li>a img { padding: 3px 0 0 0; height: 24px; width: 24px; color: #fff; line-height: 48px; vertical-align:middle; }
.top_bar li:first-child a { display: block; }
.menu_font { text-align:left; position:absolute; right:10px; z-index:500; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); border-radius: 5px; width: 120px; margin-top: 10px; padding: 0; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); }
.menu_font.hidden { display:none; }
.menu_font { top:inherit !important; bottom:60px; }
.menu_font li a { height:40px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
.menu_font li a { text-align: left !important; }
.top_menu li:last-of-type a { background: none; }
.menu_font:after { top: inherit!important; bottom: -6px; border-color: #48403c rgba(0, 0, 0, 0) rgba(0, 0, 0, 0); border-width: 6px 6px 0; position: absolute; content: ""; display: inline-block; width: 0; height: 0; border-style: solid; left: 80%; }
.menu_font li { border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(0, 0, 0, 0.2); }
.menu_font li:first-of-type { border-top: 0; }
.menu_font li:last-of-type { border-bottom: 0; }
.menu_font li a { height: 40px; line-height: 40px !important; position: relative; color: #fff; display: block; width: 100%; text-indent: 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; }
.menu_font li a img { width: 20px; height:20px; display: inline-block; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle; }
.menu_font>li>a label { padding:3px 0 0 3px; font-size:14px; overflow:hidden; margin: 0; }
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
.top_bar .top_menu>li>a:hover, .top_bar .top_menu>li>a:active { background-color:#333; }
.menu_font li a:hover, .menu_font li a:active{ background-color:#333; }
.menu_font li:first-of-type a { border-radius:5px 5px 0 0; }
.menu_font li:last-of-type a { border-radius:0 0 5px 5px; }
.litype{width:58px;}
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
#cate18 .device {bottom: 49px;}
#cate18 #indicator {bottom: 240px;}
#cate19 .device {bottom: 49px;}
#cate19 #indicator {bottom: 330px;}
#cate19 .pagination {bottom: 60px;}
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
  <nav>
    <ul id="top_menu" class="top_menu">
<li class="home"><a href="/index.php?g=Wap&m=Index&a=index&token=ieydec1420432915&wecha_id={wechat_id}"></a></li>
    <li class="litype"> <a href="http://v.lanrenmb.com/index.php?g=Wap&m=Index&a=content&token=ieydec1420432915&wecha_id={wechat_id}&id=3"><img src="photo/plugmenu2.png"><label>关于懒人</label></a>
                </li><li class="litype"> <a href="http://m.wsq.qq.com/160750279?wecha_id={wechat_id}"><img src="photo/plugmenu15.png"><label>懒人课堂</label></a>
                </li><li class="litype"> <a href="http://v.lanrenmb.com/index.php?g=Wap&m=Index&a=lists&token=ieydec1420432915&wecha_id={wechat_id}&classid=2"><img src="photo/12.png"><label>懒人业务</label></a>
                </li><li class="litype"> <a href="http://v.lanrenmb.com/index.php?g=Wap&m=Index&a=lists&token=ieydec1420432915&wecha_id={wechat_id}&classid=4"><img src="photo/plugmenu11.png"><label>懒人福利</label></a>
                </li> 
    </ul>
  </nav>
</div>
<div id="plug-wrap" onclick="closeall()" style="display: none;"></div> 
<!-- share -->

	<script type="text/javascript">
			window.shareData = {  
					"moduleName":"Index",
					"moduleID": "0",
					"imgUrl": "http://v.lanrenmb.com/uploads/i/ieydec1420432915/e/1/e/6/thumb_54acbceb75f98.jpg", 
					"timeLineLink": "http://v.lanrenmb.com/index.php?g=Wap&m=Index&a=index&token=ieydec1420432915",
					"sendFriendLink": "http://v.lanrenmb.com/index.php?g=Wap&m=Index&a=index&token=ieydec1420432915",
					"weiboLink": "http://v.lanrenmb.com/index.php?g=Wap&m=Index&a=index&token=ieydec1420432915",
					"tTitle": "欢迎来到懒人模板微官网！",
					"tContent": "在这里，你可以每天领福利、每天学习进步，也可以使用我们产品问题反馈。懒人有你陪伴，我们会变得更好更强大！"
				};
		</script>
		
<script>
		window.shareData.sendFriendLink=window.shareData.sendFriendLink.replace('http://v.lanrenmb.com','http://v.lanrenmb.com');
		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
         shareHandle('friend');
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });

        WeixinJSBridge.on('menu:share:timeline', function (argv) {
         shareHandle('frineds');
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });

        WeixinJSBridge.on('menu:share:weibo', function (argv) {
         shareHandle('weibo');
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.tContent,
                "url": window.shareData.sendFriendLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)
        
        function shareHandle(to) {
	var submitData = {
		module: window.shareData.moduleName,
		moduleid: window.shareData.moduleID,
		token:'ieydec1420432915',
		wecha_id:'{wechat_id}',
		url: window.shareData.sendFriendLink,
		to:to
	};
	$.post('/index.php?g=Wap&m=Share&a=shareData&token=ieydec1420432915&wecha_id={wechat_id}',submitData,function (data) {},'json')
}
        </script>  </body>
</html>