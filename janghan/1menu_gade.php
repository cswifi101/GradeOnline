<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.2.0/css/font-awesome.min.css" />
		<link rel="shortcut icon" href="logo.jpg" />


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

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.min.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		



<?php  require_once('name_amper.php');?>
<?php  require_once('name_header.php');?>
<?php  require_once('name_province.php');?>
<?php
// *** Visit Counter ***
// FELIXONE 2002 - SB by Felice Di Stefano - www.felixone.it
$FX_digit = 9;
$FX_dpath = "FX_DataCounter";
$FX_fpath = "FX_DataCounter/counter.txt";
  // Check if directory and file exists, if not create it.
if (!file_exists($FX_fpath)) {
  if (!is_dir($FX_dpath)) {
    mkdir($FX_dpath, 0700);
  }
  $FX_fso = fopen($FX_fpath,"w");
  flock($FX_fso, 2);
  fputs($FX_fso, 0);
  flock($FX_fso, 3);
  fclose($FX_fso);
}
  // Read file and update it any time
$FX_fso = fopen($FX_fpath,"r+");
$FX_count = fgets($FX_fso, 4096);
//session_start();
//if (!isset($HTTP_SESSION_VARS["FX_DataCounter"])) {
  fseek($FX_fso, 0);
  flock($FX_fso, 2);
  fputs($FX_fso, $FX_count+1);
  flock($FX_fso, 3);
  fclose($FX_fso);
  $FX_count++;
//  $FX_DataCounter = $FX_count;
//  session_register("FX_DataCounter");
//}
  // Add leadings
$FX_numlength = strlen((string) $FX_count);
if ($FX_numlength < $FX_digit) {
  $FX_lead = (int) $FX_digit - $FX_numlength;
  for ($i=0; $i<$FX_lead; $i++) {
    $FX_count = "0" . $FX_count;
  }
}
?>
<html><!-- InstanceBegin template="/Templates/TemplateEstudent.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $name_header ; ?></title>
<!-- InstanceEndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<style>
<!-- Hide style for old browsers 
BODY          {font-family: MS Sans Serif;font-size=\"10\"}
.headd { font-family: Helvetica,Verdana ; font-size: 13pt; text-decoration:  none; }
.app { font-family: MS Sans Serif ; font-size: 10pt; text-decoration:  none; }
A:link    {text-decoration: none; color: #0000FF}
A:visited {text-decoration: none; color: #0000FF}
A:hover   {text-decoration: none; color: #FF0000}
A:active  {text-decoration: none; color: #FF0000}
-->
</style>
<!-- InstanceBeginEditable name="head" -->
<script language="Javascript"><!--
function VF_form3(){ //v2.0
<!--start_of_saved_settings-->
<!--type,text,name,NAME,required,true,errMsg,  กรุณา กรอกชื่อนักศึกษา " วสันต์ "-->
<!--end_of_saved_settings-->
	var theForm = document.form3;
	var errMsg = "";
	var setfocus = "";

	if (theForm['NAME'].value == ""){
		errMsg = "  กรุณา กรอกชื่อนักศึกษา \" วสันต์ \"";
		setfocus = "['NAME']";
	}
	if (errMsg != ""){
		alert(errMsg);
		eval("theForm" + setfocus + ".focus()");
	}
	else theForm.submit();
}
function VF_form2(){ //v2.0
<!--start_of_saved_settings-->
<!--type,text,name,ID,required,true,isNum,errMsg,  " กรุณากรอกรหัสนักศึกษา 59110000xx "-->
<!--end_of_saved_settings-->
	var theForm = document.form2;
	var numRE = /^\d+$/;
	var errMsg = "";
	var setfocus = "";

	if (!numRE.test(theForm['ID'].value)){
		errMsg = "  \" กรุณากรอกรหัสนักศึกษาครับ  เช่น 5921000012 \"";
		setfocus = "['ID']";
	}
	if (errMsg != ""){
		alert(errMsg);
		eval("theForm" + setfocus + ".focus()");
	}
	else theForm.submit();
}
//-->
</script>
<!-- InstanceEndEditable -->

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
var message="ขออภัย ทีมงานไม่อนุญาตในส่วนนี้ครับ  หากสนใจใช้งานโปรแกรม ติดต่อ 081-1077987";
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


</head>


<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

		<div id="no1" class="col-lg-12 col-xs-12"  >
			<br><div class="row">
					<div  class="col-lg-offset-2  col-lg-8   col-lg-offset-2   col-xs-offset-2  col-xs-8 col-xs-offset-2  " style="background-color:#FFFF00; border:5px solid #000000; border-radius:20px;  border-bottom-right-radius:15px;border-bottom-left-radius:15px;" >  
							<BR><BR><fieldset>
								<div  class="col-lg-12 col-sm-12 col-xs-12">
									<span class="block input-icon input-icon-right">
									<center> 
									<font size="4">ระบบดูผลการเรียนออนไลน์   ระดับประถมศึกษา 
									<br>  ศูนย์การศึกษานอกระบบและการศึกษาตามอัธยาศัยอำเภอ<?php echo $name_amper; ?>   จังหวัด <?php echo $name_province; ?><br></font>
									</center> 
									</span>
<br> 
								</div>
	<!--ค้นหาโดยรหัสนักศึกษา-->
								<div  class="col-lg-12 col-sm-12 col-xs-12">						
									<form id="login_form" action="1show_gade.php" method="post" enctype="multipart/form-data" name="form2" onSubmit="VF_form2();return false;">
									<font size="2"> 
									<input name="ID" type="text" id="ID" class="col-lg-offset-1 col-lg-10  col-xs-offset-3 col-xs-6" placeholder="รหัสนักศึกษา เช่น 5921002709"  maxlength="10" onKeyPress="Check_num(event);" >
										<BR><BR><br>
										<center><button type="submit" name="Submit" class="btn btn-app btn-pink btn-sm">
											<i class="ace-icon fa fa-share bigger-200"></i>ดูผล
										</button></center>
									</font> 
									</form>
								</div>
									<BR><BR></fieldset><BR><BR>
									
								
					</div>
				
				</div>
		</div>
</body>
<!-- InstanceEnd --></html>


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
		<script src="../assets/js/jquery.validate.min.js"></script>
		<script src="../assets/js/function.js"></script>        
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>
		<script src="../assets/js/function.js"></script>        
		<script src="../assets/menu/js/function.js"></script>		
		<script src="slider/jquery-mobile.js"></script>				
		<script src="slider/jquery-erasing.js"></script>						
		<script src="slider/slider.js"></script>						

		<!-- inline scripts related to this page -->
		<script type="text/javascript">

