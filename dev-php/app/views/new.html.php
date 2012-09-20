<div id="contentFile">
<form method="post" action="new" id="myForm">
	Titel<br/><input type="text" name="title" id="title" style="width:300px" value="<?php
	echo date('l d/m/Y');
	?>" /><br/><br/>
    Log<br/><textarea cols="100" rows="20" id="logField"> </textarea><br/><br/>
    <input type="hidden" id="log" name="log" />
    <input type="submit" value="Save" onclick="save();" />
</form>
<script type="text/Javascript">
	function save(){
		var log = document.getElementById('logField').value;
		document.getElementById('log').value = log;
		document.forms["myForm"].submit();
	}
</script>
</div>