<?php require VIEW_ROOT.'/templates/header.php'; ?>
<?php if(empty($pages)): ?>
<p>�z�g�n�m b�yle Bir sayfya rastlanamad�!</p>
<?php else: ?>
<ul>
	<?php foreach($pages as $page):?>
	<li><a href="<?php echo BASE_URL;?>/page.php?page=<?php echo $page["slug"];?>"><?php echo $page['label']; ?></a></li>
	<?php endforeach; ?>
</ul>
<?php endif;?> 
<?php require VIEW_ROOT.'/templates/footer.php'; ?>

	

