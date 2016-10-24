<?php
require 'app/start.php';
if(empty($_GET['page']))
	$page=false;
	else
	{
	$slug=$_GET['page'];
	$page=$db->prepare("
	select*
	from pages
	where slug=:slug
	limit 1
	");
	$page->execute(['slug'=>htmlspecialchars_decode($slug)]);
	$page=$page->fetch(PDO::FETCH_ASSOC);
	//var_dump($page);
	if($page){
		$page['created']=new DateTime($page['created']);
		if($page['updated'])
		{
			$page['updated']=new DateTime($page['updated']);
		}
	}
	
	
	}
	require VIEW_ROOT.'/page/show.php';
	
	