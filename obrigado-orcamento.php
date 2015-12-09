<?php 
	include_once "configs/config.php";
    include_once "url.php";

	$smarty->assign("URL", URL);
	$smarty->assign("breadcrumb", "Obrigado Orçamento");
    $smarty->display("obrigado-orcamento.html");