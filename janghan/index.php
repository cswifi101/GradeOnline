

<!DOCTYPE html>
<html lang="en">
	<head>
	<title>ระบบตรวจสอบผลการเรียนออนไลน์  กศน.อำเภอจังหาร  สำนักงาน กศน.จังหวัดร้อยเอ็ด  | itw 2.0 </title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="keywords" content="ระบบตรวจสอบผลการเรียนออนไลน์  กศน.จังหวัดร้อยเอ็ด"/>

		<link rel="shortcut icon" href="logo.jpg" />


		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.2.0/css/font-awesome.min.css" />
		

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="slider/style.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>
		
		<!-- function ห้ามคลิกขวา ห้ามคัดลอก -->
		<script language="JavaScript1.2">
function disableselect(e){
return false
}
function reEnable(){
return true
}
//if IE4+
document.onselectstart=new Function ("return false")
//if NS6
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}
</script>
<script language=JavaScript>
<!--
var message="ขออภัย ทีมงานไม่อนุญาตในส่วนนี้ครับ  หากสนใจใช้งานโปรแกรม ติดต่อ 098-5870435";
///////////////////////////////////
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// --> 
</script>
<!-- จบ function ห้ามคลิกขวา ห้ามคัดลอก -->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.min.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->
		<style>
		#main_menu{
			list-style:none;
		}

#menu-toggle {
	display: none;
	float: right;
}

/* HEADER > MENU */
#main-menu {
	width:100%;
	float: right;
	font-size: 0;
	}

#main-menu > li {
	display: inline-block;
	padding: 2px 0;
}

#main-menu > li.parent {
	background-size: 7px 7px;
	background-repeat: no-repeat;
	background-position: left center;
}

#main-menu > li.parent > a {
}

#main-menu > li > a {
	color: #eee;
	font-size: 14px;
	line-height: 14px;
	padding: 30px 0;
	text-decoration:none;
}

#main-menu > li:hover > a,
#main-menu > li.current-menu-item > a {
	color: #000000;
}

/* HEADER > MENU > DROPDOWN */
#main-menu li {
	position: relative;
}

ul.sub-menu { /* level 2 */
	display: none;
	left: 0px;
	top: 40px;
	padding-top: 10px;
	position: absolute;
	width: 150px;
	z-index: 9999;
}

ul.sub-menu ul.sub-menu { /* level 3+ */
	margin-top: -1px;
	padding-top: 0;
	left: 132px;
	top: 0px;
}

ul.sub-menu > li > a {
	text-align:left;
	background-color: #333;
	border: 1px solid #444;
	border-top: none;
	color: #bbb;
	display: block;
	font-size: 12px;
	line-height: 15px;
	padding: 10px 12px;
}

ul.sub-menu > li > a:hover {
	text-decoration:none;
	background-color: #2a2a2a; 
	color: #fff;
}

ul.sub-menu > li:first-child {
	border-top: 3px solid #23dbdb;
}

ul.sub-menu ul.sub-menu > li:first-child {
	border-top: 1px solid #444;
}

ul.sub-menu > li:last-child > a {
	border-radius: 0 0 2px 2px;
}

ul.sub-menu > li > a.parent {
	background-image: url(../images/arrow.png);
	background-size: 5px 9px;
	background-repeat: no-repeat;
	background-position: 95% center;
}

#main-menu li:hover > ul.sub-menu {
	display: block; /* show the submenu */
}

@media all and (max-width: 700px) {

	#navigation {
		position: static;
		margin-top: 20px;
	}

	#menu-toggle {
		display: block;
	}

	#main-menu {
		display: none;
		float: none;
	}

	#main-menu li {
		display: block;
		margin: 0;
		padding: 0;
	}

	#main-menu > li {
		margin-top: -1px;
	}

	#main-menu > li:first-child {
		margin-top: 0;
	}

	#main-menu > li > a {
		background-color: #333;
		border: 1px solid #444;
		color: #bbb;
		display: block;
		font-size: 14px;
		padding: 12px !important;
		padding: 0;
	}

	#main-menu li > a:hover {
		background-color: #444; 
	}

	#main-menu > li.parent {
		background: none !important;
		padding: 0;
	}

	#main-menu > li:hover > a,
	#main-menu > li.current-menu-item > a {
		border: 1px solid #444 !important;
		color: #fff !important;
	}

	ul.sub-menu {
		display: block;
		margin-top: -1px;
		margin-left: 20px;
		position: static;
		padding: 0;
		width: inherit;
	}

	ul.sub-menu > li:first-child {
		border-top: 1px solid #444 !important;
	}

	ul.sub-menu > li > a.parent {
		background: #333 !important;
	}
}
#hot-news{ background:#333333;color:#FFF; padding:5px;font-size:15px;}
		</style>

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default" style="background-color:#373737;">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>
			<div class="navbar-container">
					

<!-- menu Social -->
<div class="pull-left">
<marquee behavior="scroll" scrolldelay="100" onmouseover="this.stop();" onmouseout="this.start(); "id="hot-news">
	ระบบตรวจสอบผลการเรียนออนไลน์  กศน.อำเภอจังหารสังกัด สำนักงาน  กศน. จังหวัดร้อยเอ็ด
	</marquee>				</div>
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="transparent hidden-sm hidden-xs">
							<a class="dropdown-toggle" href="#">
								ติดต่อ Admin
							</a>
						</li>
						<li class="transparent">
							<a class="dropdown-toggle" href="https://www.facebook.com/%E0%B8%AA%E0%B8%B3%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%87%E0%B8%B2%E0%B8%99-%E0%B8%81%E0%B8%A8%E0%B8%99%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%A2%E0%B9%80%E0%B8%AD%E0%B9%87%E0%B8%94-315165038504232/">
								<i class="ace-icon fa fa-facebook icon-animated-bell"></i>
							</a>
						</li>
						<li class="transparent">
							<a class="dropdown-toggle" href="https://www.instagram.com/kruchen_/">
								<i class="fa fa-instagram icon-animated-bell" ></i>
							</a>
						</li>			
						<li class="transparent">
							<a class="dropdown-toggle" href="https://www.youtube.com/channel/UCO4tILeyMjc2v4UZSM9H0Ug">
								<i class="ace-icon fa fa-youtube icon-animated-bell"></i>
							</a>
						</li>
						<li class="transparent">
							<a  class="dropdown-toggle" href="https://plus.google.com/u/0/+%E0%B8%84%E0%B8%A3%E0%B8%B9%E0%B9%80%E0%B8%8A%E0%B8%99%E0%B8%94%E0%B8%AD%E0%B8%97%E0%B8%84%E0%B8%AD%E0%B8%A1">
								<i class="ace-icon fa fa-google-plus icon-animated-bell"></i>
							</a>
						</li>
						<li class="transparent">
							<a class="dropdown-toggle" href="http://www.cri.nfemp.com/grade.pdf">
								<i class="fa fa-arrow-circle-down icon-animated-bell" ></i>
							</a>
						</li>	
						<li class="transparent">
							<a class="dropdown-toggle" href="http://www.nfempy.com/">
								<i class="fa fa-share-alt icon-animated-bell" ></i>
							</a>
						</li>		

								
						<li class="blue2 user-min hidden-sm hidden-xs">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								English
								<span class="user-info">
									<small>Change Language,</small>									
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										Thai
									</a>
								</li>

								<li>
									<a href="#">
										English
									</a>
								</li>
							</ul>
						</li>
					</ul>

				</div>
			</div><!-- /.navbar-container -->
		</div>
		<div class="container" style="background-color:#ffffff;">
<div class="row" style="margin-top:5px;">
<div class="col-sm-12" align="center"><img src="../assets/images/nfe_logo.png" width="100%" /></div>

	
</div>


<!--ข่าว ประชาสัมพันธ์-->
	<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
								<div class="col-xs-12">
										<div class="alert alert-danger" style="display:none;" id="show_error">
											<strong>
												<i class="ace-icon fa fa-times"></i>
												พบข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ
											</strong>
										</div>
								
								<div class="alert alert-warning" style="display:none;" id="show_wait">
											<strong>กรุณารอสักครู่ ระบบกำลังดำเนินการ</strong>
										</div>								
								<div class="alert alert-block alert-success" style="display:none;" id="show_success">
												<strong>
													<i class="ace-icon fa fa-check"></i>
													บันทึกข้อมูลเรียบร้อยแล้วครับ!
												</strong>
										</div>								
								</div>
								</div>
								
		<div class="row col-lg-12 col-sm-12" >
			<div class="col-lg-4 col-sm-12" style="margin-top:15px;">
				<a href="1menu_gade.php" ><img src="../assets/images/01.png" width="100%"/> </a>
			</div>
			<div class="col-lg-4  col-sm-12" style="margin-top:15px;">
				<a href="2menu_gade.php" ><img src="../assets/images/02.png" width="100%"/></a>
			</div>
			<div class="col-lg-4 col-sm-12 " style="margin-top:15px;">
				<a href="3menu_gade.php" ><img src="../assets/images/03.png" width="100%"/></a>
			</div>


		</div>	
								
								
<i class="fa fa-spinner fa-spin fa-3x fa-fw center" id="show_load" style="display:none;"></i>								
								<div class="row">
								<div class="col-xs-12">
										<div class="alert alert-danger" style="display:none;" id="show_delete_error">
											<strong>
												<i class="ace-icon fa fa-times"></i>
												พบข้อผิดพลาด กรุณาติดต่อผู้ดูแลระบบ
											</strong>
										</div>								
										<div class="alert alert-block alert-success" style="display:none;" id="show_delete">
											<strong>
												<i class="ace-icon fa fa-times"></i>
												ลบข้อมูลเรียบร้อยแล้วครับ
											</strong>
										</div>
								</div>
<div class="row" id="show_data"></div>								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
<!--สิ้นสุดข่าวประชาสัมพันธ์-->

			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				


				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			
<div class="row" style="margin-top:5px;">
<div class="col-sm-12" align="center"><a href="http://roiet.nfe.go.th/"><img src="../assets/images/nfe_foot.jpg" width="1078" /></a></div>
</div>
</div>
			
		

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="../assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>
		<script src="../assets/menu/js/function.js"></script>		
		<script src="slider/jquery-mobile.js"></script>				
		<script src="slider/jquery-erasing.js"></script>						
		<script src="slider/slider.js"></script>						

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
		function show_data(target){
			$.post(target).done(function(data){
			$('#show').html(data);
						$('#show').show();
			});
		}
			jQuery(function($) {
					jQuery('.camera_wrap').camera({
				fx: 'random',
				mobileFx: 'random',
				height: '400px',
				pagination: false					
					});
			 var $sidebar = $('.sidebar').eq(0);
			 if( !$sidebar.hasClass('h-sidebar') ) return;
			
			 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
				if( event_name !== 'sidebar_fixed' ) return;
			
				var sidebar = $sidebar.get(0);
				var $window = $(window);
			
				//return if sidebar is not fixed or in mobile view mode
				var sidebar_vars = $sidebar.ace_sidebar('vars');
				if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
					$sidebar.removeClass('lower-highlight');
					//restore original, default marginTop
					sidebar.style.marginTop = '';
			
					$window.off('scroll.ace.top_menu')
					return;
				}
			
			
				 var done = false;
				 $window.on('scroll.ace.top_menu', function(e) {
			
					var scroll = $window.scrollTop();
					scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
					if (scroll > 17) scroll = 17;
			
			
					if (scroll > 16) {			
						if(!done) {
							$sidebar.addClass('lower-highlight');
							done = true;
						}
					}
					else {
						if(done) {
							$sidebar.removeClass('lower-highlight');
							done = false;
						}
					}
			
					sidebar.style['marginTop'] = (17-scroll)+'px';
				 }).triggerHandler('scroll.ace.top_menu');
			
			 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			
			 $(window).on('resize.ace.top_menu', function() {
				$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			 });
			
	
			});
			
			

		</script>
	</body>
</html>
