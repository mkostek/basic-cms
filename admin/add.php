<?php

require '../app/start.php';

if(!empty($_POST)){
	$label=$_POST['label'];
	$title=$_POST['title'];
	$slug=$_POST['slug'];
	$body=$_POST['body'];
	$insertPage=$db->prepare("
	insert into pages (label,title,slug,body,created)
values(:label,:title,:slug,:body,NOW())
	");
	$c=$insertPage->execute([
'label'=>$label,
'title'=>$title,
'slug'=>$slug,
'body'=>$body,
				]);	
if($c)
{
	echo "<h5>Kayit başarı ile eklendi...</h5>";
}	
else
{
	echo "<h5>Kayit ekleme başarısız!</h5>";
}	
	header('Location'.BASE_URL.'/admin/list.php');
			
}

require VIEW_ROOT.'/admin/add.php';?>


