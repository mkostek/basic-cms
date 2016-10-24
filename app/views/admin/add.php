<?php require VIEW_ROOT.'/templates/header.php'; ?>
<h2>sayfa ekle</h2>
<form action="<?php echo BASE_URL; ?>/admin/add.php" method="post" autocomplete="off">
<label for="title">başlık
<input type="text" name="title" id="title">
</input>
</label>
<label for="label">etiket
<input type="text" name="label" id="label">
</label>

<label for="slug">işte öyle
<input type="text" name="slug" id="slug">
</label>

<label for="body">gövde
<textarea name="body" cols="30" rows="10" id="body"></textarea>
</label>
<input type="submit" value="add">
</input>
</form>

<?php require VIEW_ROOT.'/templates/footer.php'; ?>
