<?php

function index() {
  return html('index.html.php');
}

function index_catchall() {
  return html('index.html.php');
}

function open_doc(){
	$filename = params('doc');
	$fileArray = explode(".", $filename);
	if($filename == "new"){
		return html('new.html.php');
	}elseif($fileArray[2] == "edit"){
		set('title', $fileArray[0]);
		$content_van_file = file_get_contents('assets/Pages/' . $fileArray[0] . "." . $fileArray[1], true);
		set('content_van_file', $content_van_file);
		set('filename', $filename);
		return html('edit.html.php');
	}elseif($fileArray[2] == "delete"){
		unlink('assets/Pages/' . $fileArray[0] . "." . $fileArray[1]);
		return html('index.html.php');
	}else{
		set('filename', $filename);

		$content_van_file = file_get_contents('assets/Pages/' . $filename, true);
	    if(!$content_van_file){
	    	set('content_van_file', 'NIKS KUNNEN LEZEN');
	    }
	    $content_van_file = Markdown($content_van_file);
	    $content_van_file = str_replace("\n", "<br/>", $content_van_file);
		set('content_van_file', $content_van_file);

		return html('detail.html.php');
	}
}
function post_function(){
	$title = $_POST['title'];
	$log = $_POST['log'];
	$title = str_replace(" ", "_", $title);
	$title = str_replace("/", "-", $title);

	$fh = fopen('assets/Pages/' . $title . '.md', 'w+') or die("Can't create file");
	fwrite($fh, $log);
	fclose($fh);

	return html('index.html.php');
}