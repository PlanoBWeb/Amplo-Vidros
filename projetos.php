<?php

    include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Projeto.class.php";
	$class 		= new Projeto();

	include_once "classes/Categoria.class.php";
    $classCat 		= new Categoria();

    // Menu lateral
	$retornoMenuLat	= $classCat->PesquisarCategoria(null);
	if( $retornoMenuLat[0] )
	{
		$smarty->assign("mensagem", $retornoMenuLat[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

	$retornoMenu	= $class->PesquisarMenu(null);
	if( $retornoMenu[0] )
	{
		$smarty->assign("mensagem", $retornoMenu[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

	$retorno	= $class->Pesquisar(null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("dadosCatMenu", $retornoMenuLat[1]);
	$smarty->assign("dadosMenu", $retornoMenu[1]);  
    $smarty->assign("dados", $retorno[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Projetos");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("projetos.html");

?>