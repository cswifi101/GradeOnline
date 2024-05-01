<form name="temp" id="temp" method="post" class="form-inline" action="<?php echo $_GET['amp'].'/'.$_GET['level']; ?>">
	<div class="form-group">
		<input type="hidden" class="form-control" name="ID" id="ID" value="<?php echo $_GET['ID']; ?>">
	</div>
</form>
<script type="text/javascript">
	window.onload = function(){
  		document.forms['temp'].submit()

}
</script>