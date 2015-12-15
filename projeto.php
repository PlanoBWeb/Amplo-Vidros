<?php

    include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Projeto.class.php";
	$class 		= new Projeto();

	// Menu lateral
	$parametro['id'] = $url[1];
	$retorno	= $class->PesquisarProjeto($parametro);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

	// echo "<pre>";
	// print_r($retorno);
	// die();


    $smarty->assign("dados", $retorno[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Projeto");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("projeto.html");

?>