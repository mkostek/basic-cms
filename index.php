<?php
require 'app/start.php';
$pages=$db->query("select id,label,slug from pages")->fetchAll(PDO::FETCH_ASSOC);
require VIEW_ROOT.'/home.php';
