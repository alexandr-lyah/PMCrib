<?php
require_once('common.php');

$s->assign('displayshare', true);

$s->display('header.tpl');
$s->display('index.tpl');
$s->display('footer.tpl');

?>