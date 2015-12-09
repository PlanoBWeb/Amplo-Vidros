<?php 
	include_once "configs/config.php";
    include_once "url.php";

	$smarty->assign("URL", URL);
	$smarty->assign("breadcrumb", "Obrigado Newsletter");
    $smarty->display("obrigado-newsletter.html");