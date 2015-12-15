<?php

    include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Projeto.class.php";
	$class 		= new Projeto();

	// Menu lateral
	$retorno	= $class->Pesquisar(null);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

    $smarty->assign("dados", $retorno[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Projetos");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("projetos.html");

?>