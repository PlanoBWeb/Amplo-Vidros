<?php 
	include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Categoria.class.php";
    $class 		= new Categoria();

    // Menu lateral
	$retornoMenuLat	= $class->PesquisarCategoria(null);
	if( $retornoMenuLat[0] )
	{
		$smarty->assign("mensagem", $retornoMenuLat[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dadosCatMenu", $retornoMenuLat[1]);
	$smarty->assign("URL", URL);
	$smarty->assign("breadcrumb", "Obrigado Orçamento");
    $smarty->display("obrigado-orcamento.html");