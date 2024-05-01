
<?
// Convert Variable Array To Variable
 
while(list($xVarName, $xVarvalue) = each($_GET)) {
     ${$xVarName} = $xVarvalue;
}
 
 
while(list($xVarName, $xVarvalue) = each($_POST)) {
     ${$xVarName} = $xVarvalue;
}
 
while(list($xVarName, $xVarvalue) = each($_FILES)) {
     ${$xVarName."_name"} = $xVarvalue['name'];
     ${$xVarName."_type"} = $xVarvalue['type'];
     ${$xVarName."_size"} = $xVarvalue['size'];
     ${$xVarName."_error"} = $xVarvalue['error'];
     ${$xVarName} = $xVarvalue['tmp_name'];
}
?>

<?php require_once('Connections/Connect.php'); ?>
 <?php  require_once('name_amper.php');?>
   <?php  require_once('name_province.php');?>
<?php

mysql_select_db($database_Connect, $Connect);
$query_Recordset1 = "SELECT `1student`.PRENAME, `1student`.NAME, `1student`.SURNAME, `1student`.FA_PRENAME, `1student`.FA_NAME, `1student`.FA_SURNAME, `1student`.MO_PRENAME, `1student`.MO_NAME, `1student`.MO_SURNAME, `1student`.STD_CODE, `1student`.CARDID, `1grade`.SEMESTRY, `1grade`.SUB_CODE, `1grade`.TOTAL, `1grade`.GRADE, `1subject`.SUB_NAME, `1subject`.SUB_CREDIT, `1student`.ID FROM `1student`, `1grade`, `1subject` WHERE `1student`.ID=$ID AND `1student`.STD_CODE=`1grade`.STD_CODE AND `1grade`.SUB_CODE=`1subject`.SUB_CODE ORDER BY `1grade`.SEMESTRY ASC";
$Recordset1 = mysql_query($query_Recordset1, $Connect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_Connect, $Connect);
$query_Recordset2 = "SELECT * FROM `1student`, `1activity` WHERE `1student`.ID='$ID' AND `1student`.STD_CODE=`1activity`.STD_CODE";
$Recordset2 = mysql_query($query_Recordset2, $Connect) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

?>
<html>
<head>
<title>ใบแสดงผลการเรียน</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link rel="shortcut icon" href="logo.jpg" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />
<link rel="stylesheet" href="slider/style.css" />
<script src="assets/js/ace-extra.min.js"></script>

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


<body>
<?php if($totalRows_Recordset1>1){ ?> <!-- เชครหัสนักศึกษา -->
<table width="1033" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr> 
    <td><br><br>
<div align="center"> 
	  <div class="col-sm-12" align="center"><img src="logo.jpg" width="10%" /></div>
        <p><span class="style15"><font size="2"><strong>ใบแสดงผลการเรียน หลักสูตรการศึกษานอกระบบระดับการศึกษาขั้นพื้นฐาน 
          <span class="style16">ระดับประถมศึกษา</span><br>
          <span class="style6 style31"> ศูนย์การศึกษานอกระบบและการศึกษาตามอัธยาศัยอำเภอ</span><?php echo $name_amper; ?>   จังหวัด <?php echo $name_province; ?></strong></font></span> 
           <font size="2"><strong><br>
          </strong></font></p>
        </div>
      <table width="909" border="0" align="center" cellpadding="1" cellspacing="1">
        <tr> 
          <td bgcolor="#FFFFCC" class="style22"><font size="2">ชื่อ-นามสกุล:</font></td>
          <td bgcolor="#FFFFCC" class="style22"><span class="style6"><a><a><font size="2"><span class="style6"><?php echo $row_Recordset1['PRENAME']; ?></span></font></a></a><font size="2"><?php echo $row_Recordset1['NAME']; ?>&nbsp;&nbsp;<?php echo $row_Recordset1['SURNAME']; ?></font></span></td>
          <td bgcolor="#FFFFCC" class="style22"><font size="2">&nbsp; รหัสนักศึกษา:</font></td>
          <td width="165" bgcolor="#FFFFCC" class="style35 style6 style25"><font size="2">&nbsp;<?php echo $row_Recordset1['ID']; ?></font></td>
          <td width="147" bgcolor="#FFFFCC" class="style22"><font size="2">เลขประจำตัวประชาชน:</font></td>
          <td width="177" bgcolor="#FFFFCC" class="style35 style6 style25"><font size="2">&nbsp;<?php echo $row_Recordset1['CARDID']; ?></font></td>
        </tr>
        <tr> 
          <td width="76" bgcolor="#FFFFCC" class="style22"><font size="2">(บิดา)</font></td>
          <td width="223" bgcolor="#FFFFCC" class="style22"><span class="style6"><font size="2"><?php echo $row_Recordset1['FA_PRENAME']; ?><?php echo $row_Recordset1['FA_NAME']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_Recordset1['FA_SURNAME']; ?></font> 
            </span></td>
          <td width="103" bgcolor="#FFFFCC" class="style22"><font size="2">&nbsp;&nbsp;&nbsp;(มารดา)</font></td>
          <td colspan="3" bgcolor="#FFFFCC" class="style35 style6 style25"><font size="2">&nbsp;</font><font size="2">&nbsp; 
            </font><font size="2">&nbsp;<?php echo $row_Recordset1['MO_PRENAME']; ?><?php echo $row_Recordset1['MO_NAME']; ?> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_Recordset1['MO_SURNAME']; ?></font></td>
        </tr>
        <tr> 
          <td colspan="6" class="style22"><table width="906" border="0" cellspacing="1" cellpadding="3">
              
              <tr> 
                <td width="97" bgcolor="#003399"><div align="center" class="style30"><strong><font color="#FFFFFF" size="2"><span class="style31">ภาคเรียนที่/ปี</span></font></strong></div></td>
                <td width="344" bgcolor="#003399" class="style22"><strong><font color="#FFFFFF" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  &nbsp;&nbsp; วิชา</font></strong></td>
                <td width="100" bgcolor="#003399" class="style22"><div align="center" class="style30"><strong><font color="#FFFFFF" size="2"><span class="style31">รหัสวิชา</span></font></strong></div></td>
                <td width="110" bgcolor="#003399" class="style26"><div align="center" class="style30"><strong><font color="#FFFFFF" size="2">หน่วยกิต</font></strong></div></td>
                <td width="98" bgcolor="#003399" class="style26"><div align="center" class="style30"><strong><font color="#FFFFFF" size="2">คะแนนรวม</font></strong></div></td>
                <td width="114" bgcolor="#003399" class="style22"> <div align="center" class="style30"><strong><font color="#FFFFFF" size="2"><span class="style31">ผลการเรียน</span></font></strong></div></td>
              </tr>
              <?php //ตรงนี่ที่ใส่สีของตาราง มันมีอยู่ 2 ที่ ?>
              <? $i = 0    //  1. ใส่สี ในตาราง ให้มันสลับสี?>
              <?php do { ?>
              <?php $SS = $SS + 1;?>
              <?php //ค่าวนลูปให้แสดงค่าตรงที่ลำดัลบที่  ?>
              <?php $SUB_CREDIT=$SUB_CREDIT+$row_Recordset1['SUB_CREDIT']; // หาผลรวมของหน่วยกิต?>
              <?php $GRADE=$GRADE+$row_Recordset1['GRADE'];  //หาผลรวมของเกรด?>
              <?php $total=$total+$sum;  //  ได้ค่าผลรวมของเกรด คูนด้วยหน่วยกิต ?>
              <?
	  if(($i%2)==0)
		{
			print "<tr bgcolor=#FFFFCC>";
		}
			else 
		{
				print "<tr bgcolor=#FFFFFF>";
		}   //  ใส่สี ในตาราง ให้มันสลับสี
		?>
              <td><div align="center" class="style13"> 
                    <div align="center"><font size="2"><?php echo $row_Recordset1['SEMESTRY']; ?></font></div>
                </div></td>
              <td class="style22 style13"><font size="2"><?php echo $row_Recordset1['SUB_NAME']; ?></font></td>
              <td class="style22"><div align="center"><font size="2"><?php echo $row_Recordset1['SUB_CODE']; ?></font></div></td>
              <td class="style5 style13"><div align="center"><font size="2"><?php echo $row_Recordset1['SUB_CREDIT']; ?></font></div></td>
              <td class="style5 style13"><div align="center"><font size="2"><?php echo $row_Recordset1['TOTAL']; ?></font></div></td>
              <td class="style29 style13"><div align="center"><font size="2"><?php echo $row_Recordset1['GRADE']; ?></font><font color="#FFFFFF"> 
                  <?php $sum=$row_Recordset1['SUB_CREDIT']*$row_Recordset1['GRADE']; //echo $sum;  //  เอาค่าจำนวนหน่วยกิตของแต่ละวิชา * ผลเกรดของแต่ละวิชา ?>
                  </font></div></td>
              </tr>
              <?
  $i++;   // 2.  ใส่สี ในตาราง ให้มันสลับสี
  ?>
              <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
              <tr> 
                <td>&nbsp;</td>
                <td class="style22 style13">&nbsp;</td>
                <td class="style22">&nbsp;</td>
                <td class="style5 style13"> <?php //echo $SUB_CREDIT; ?>
                </td>
                <td class="style5 style13">&nbsp;</td>
                <td class="style29 style13"><font color="#FFFFFF"> 
                  <?php  //echo $total;?>
                  </font></td>
              </tr>
            </table>
          
          </td>
        </tr>
        <tr> 
          <td colspan="6" bgcolor="#003399" class="style22"><strong><font color="#FFFFFF">เกรดเฉลี่ย(GPA) 
            = 
            <?php  $GPA=$total/$SUB_CREDIT; echo round($GPA,2); // การหาค่า GPA ให้เอาค่าผลรวมของหน่วกิต หาร ?>
            </font></strong></td>
        </tr>
      </table>
      <font size="3" face="Microsoft Sans Serif">&nbsp; </font> <br> <hr />
      <table width="874" border="0" align="center" cellpadding="3" cellspacing="1">
        <tr> 
          <td colspan="6" bgcolor="#FFFFCC" class="style22"><font size="3"><strong>คะแนนหน่วยกิจกรรม</strong></font></td>
        </tr>
        <tr bordercolor="#FFFFFF"> 
          <td bgcolor="#3399CC" class="style22"><strong><font color="#FFFFFF" size="2">ลำดับที่</font></strong></td>
          <td bgcolor="#3399CC" class="style22"><div align="center"><strong><font color="#FFFFFF" size="2">ภาคเรียน</font></strong></div></td>
          <td bgcolor="#3399CC" class="style22"><div align="left"><strong><font color="#FFFFFF" size="2">กิจกรรม</font></strong></div></td>
          <td bgcolor="#3399CC" class="style35 style6 style25"><div align="center"><strong><font color="#FFFFFF" size="2">จำนวนชั่วโมง</font></strong></div></td>
        </tr>
        <?php //ตรงนี่ที่ใส่สีของตาราง มันมีอยู่ 2 ที่ ?>
        <? $i = 0    //  1. ใส่สี ในตาราง ให้มันสลับสี?>
        <?php do { ?>
        <?php $aa =$aa+1; ?>
        <?php $sum_atc =$sum_atc+$row_Recordset2['HOUR']; ?>
        <?php $SS = $SS + 1;?>
        <?php //ค่าวนลูปให้แสดงค่าตรงที่ลำดัลบที่  ?>
        <?
	  if(($i%2)==0)
		{
			print "<tr bgcolor=#FFFFFF>";
		}
			else 
		{
				print "<tr bgcolor=#FFFFCC>";
		}   //  ใส่สี ในตาราง ให้มันสลับสี
		?>
        <td width="44" class="style22"> <div align="center"><font color="#000000" size="2"><?php echo $aa; ?></font></div></td>
        <td width="158" class="style22"><div align="center"><font color="#000000" size="2"><?php echo $row_Recordset2['SEMESTRY']; ?></font></div></td>
        <td width="431" class="style22"><div align="left"><font color="#000000" size="2"><?php echo $row_Recordset2['ACTIVITY']; ?></font></div></td>
        <td width="228" class="style35 style6 style25"><div align="center"><font color="#000000" size="2"><?php echo $row_Recordset2['HOUR']; ?></font></div></td>
        </tr>
        <?
				  $i++;   // 2.  ใส่สี ในตาราง ให้มันสลับสี
				  ?>
        <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
        <tr> 
          <td colspan="3" bgcolor="#3399CC" class="style22"><div align="right"><font color="#FFFFFF" size="2">รวม</font></div></td>
          <td bgcolor="#3399CC" class="style35 style6 style25"><div align="center"><font color="#FFFFFF" size="2"><strong><?php echo $sum_atc;  ?>&nbsp;</strong></font></div></td>
        </tr>
      </table>
      <p><br>
        <font size="3"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FF0000">นักศึกษาทุกคนต้องผ่านกิจกรรมพัฒนาคุณภาพผู้เรียน(กพช.)ให้ครบ200 
        ชั่วโมง</font></strong></font></p>
		<p align = "right"><a href="javascript:window.print()"><button class="btn btn-app btn-light btn-xs">
											<i class="ace-icon fa fa-print bigger-160"></i>
											Print
										</button></a> </p>
		
		
</td>
  </tr>
</table>
<?php } else { ?>

<h1>ไม่มีรหัสนักศึกษานี้ครับ</h1>
<?php }?> <!-- สิ้นสุดเชครหัสนักศึกษา -->
<p>&nbsp;</p>
</body>

</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);
?>
