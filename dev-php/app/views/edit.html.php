<div id="contentFile">
<form method="post" action="new" id="myForm">
	Titel<br/><input type="text" name="title" id="title" style="width:300px" value="<?php echo $title; ?>"/><br/><br/>
    Log<br/><textarea cols="100" rows="40" id="logField"><?php echo $content_van_file; ?></textarea><br/><br/>
    <input type="hidden" id="log" name="log" />
    <input type="submit" value="Save" onclick="save();" />
</form>
<script type="text/Javascript">
	function save(){
		var log = document.getElementById('logField').value;
		document.getElementById('log').value = log;
		document.forms["myForm"].submit();
	}
	var isCtrl = false;
	document.onkeyup=function(e){
		if(e.which == 91) isCtrl=false;
	}
	document.onkeydown=function(e){
		if(e.which == 91) isCtrl=true;
		if(e.which == 83 && isCtrl == true) {
			save();
			return false;
		}
	}
</script>
</div>