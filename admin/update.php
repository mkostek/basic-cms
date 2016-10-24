<?php

require '../app/start.php';
if(!empty($_GET)){
	$id=$_GET['id'];

		$pages=$db->query("
			select *
			from pages
		where id="
			.$id)->fetchAll(PDO::FETCH_ASSOC);
	foreach($pages as $row)
 {
/*its getting data in line.And its an object*/
        $dizi["label"]=$row["label"];
		$dizi["title"]=$row["title"];
		$dizi["slug"]=$row["slug"];
		$dizi["body"]=$row["body"];
    }
	//print_r($dizi);
	
}		
else if(!empty($_POST))	
{
	$label=$_POST['label'];
	$title=$_POST['title'];
	$slug=$_POST['slug'];
	$body=$_POST['body'];
	$id=$_POST['di'];
	$insertPage=$db->prepare("
	update pages
	set label=:label,title=:title,slug=:slug,body=:body,updated=NOW()
	where id=:id
	");
	$c=$insertPage->execute([
		'label'=>$label,
		'title'=>$title,
		'slug'=>$slug,
		'body'=>$body,
		'id'=>$id
				]);					
}require VIEW_ROOT.'/admin/update.php';
?>
