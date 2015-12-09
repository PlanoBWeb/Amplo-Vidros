<?php 
	include_once "configs/config.php";
    include_once "url.php";

	$smarty->assign("URL", URL);
	$smarty->assign("breadcrumb", "Obrigado Contato");
    $smarty->display("obrigado-contato.html");