<?php

require '../app/start.php';
$pages=$db->query("
select id,label,title,slug
from pages
order by created desc
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT.'/admin/list.php';?>