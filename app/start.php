<?php
ini_set('display_errors','On');

define('APP_ROOT',__DIR__);
define('VIEW_ROOT',APP_ROOT.'/views');
define('BASE_URL','http://127.0.0.1:81/projects/basic_cms');
//echo APP_ROOT;
require 'functions.php';
$db=new PDO('mysql:host=127.0.0.1;dbname=cms','root','');