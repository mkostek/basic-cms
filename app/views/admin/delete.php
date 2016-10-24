<?php require VIEW_ROOT.'/templates/header.php'; ?>
<?php if($x){ ?>
<h4>kayıt başarı ile silindi</h4>
<?php }else{ ?>
<h4>kayıt silinirken hata ile karşılaşıldı</h4>
<?php } ?>
<a href="<?php echo BASE_URL.'/admin/list.php'; ?>">listeleme</a>
<a href="<?php echo BASE_URL.'/admin/add.php'; ?>">ekleme</a>
<?php require VIEW_ROOT.'/templates/footer.php'; ?>