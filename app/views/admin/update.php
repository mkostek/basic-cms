<?php require VIEW_ROOT.'/templates/header.php'; ?>
<h2>sayfa guncelle</h2>
<?php if(isset($c))
{
if($c){	?>
<h4>kayıt başarı ile guncellendi</h4>
<?php }else{ ?>
<h4>kayıt güncellenirken hata ile karşılaşıldı</h4>
<?php } ?>
<a href="<?php echo BASE_URL.'/admin/list.php'; ?>">listeleme</a>
<a href="<?php echo BASE_URL.'/admin/add.php'; ?>">ekleme</a>
<?php  }		?>

<form action="<?php echo BASE_URL; ?>/admin/update.php" method="post" autocomplete="off">
<input type="hidden" name="di" id="di" value="<?php echo $id; ?>"></input>
<label for="title">başlık
<input type="text" name="title" id="title" value="<?php if(isset($dizi["title"])){echo $dizi["title"];} ?>">
</input>
</label>
<label for="label">etiket
<input type="text" name="label" id="label" value="<?php if(isset($dizi["label"])){echo $dizi["label"];} ?>">
</label>

<label for="slug">işte öyle
<input type="text" name="slug" id="slug" value=" <?php if(isset($dizi["slug"])){echo trim($dizi["slug"]); }?>">
</label>

<label for="body">gövde
<textarea name="body" cols="30" rows="10" id="body" ><?php if(isset($dizi["body"])){echo $dizi["body"]; }?></textarea>
</label>
<input type="submit" value="update">
</input>
</form>

<?php require VIEW_ROOT.'/templates/footer.php'; ?>
