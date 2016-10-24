<?php

require '../app/start.php';

if(!empty($_GET['id'])){
	$id=$_GET['id'];
	$insertPage=$db->prepare("
	delete from pages where id=(:label)
	");
	$x=$insertPage->execute([
'label'=>$id,

				]);			
	
}
/*header('Location'.BASE_URL.'/admin/list.php');*/
require VIEW_ROOT.'/admin/delete.php';
?>


