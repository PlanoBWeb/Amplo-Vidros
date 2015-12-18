<?php

    include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Produto.class.php";
	$classProduto 		= new Produto();

	include_once "classes/Projeto.class.php";
	$classProjeto 		= new Projeto();

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

	$retornoProduto	= $classProduto->destaquesHome($parametro);
	if( $retornoProduto[0] )
	{
		$smarty->assign("mensagem", $retornoProduto[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

	$retornoProjeto	= $classProjeto->destaquesHome($parametro);
	if( $retornoProjeto[0] )
	{
		$smarty->assign("mensagem", $retornoProjeto[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dadosCatMenu", $retornoMenuLat[1]);
	$smarty->assign("dadosProjeto", $retornoProjeto[1]);
	$smarty->assign("dados", $retornoProduto[1]);
    $smarty->assign("pagina", $pagina);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Home");
    $smarty->display("index.html");

?>