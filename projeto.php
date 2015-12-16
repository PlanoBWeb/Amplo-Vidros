<?php

    include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Projeto.class.php";
	$class 		= new Projeto();

	// Menu lateral
	$retornoMenu	= $class->PesquisarMenu(null);
	if( $retornoMenu[0] )
	{
		$smarty->assign("mensagem", $retornoMenu[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}


	$parametro['id'] = $url[1];
	$retorno	= $class->PesquisarProjeto($parametro);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

	$idProjeto = $retorno[1][0]['idProjeto'];
	// Projetos Relacionados
	$retornoRelacionados		= $class->PesquisarIdRelacionados($idProjeto);
	$retornoRelacionadosUm 		= $retornoRelacionados[1][0]['idCategoria'];
	$retornoRelacionadosDois 	= $retornoRelacionados[1][1]['idCategoria'];
	if( $retornoRelacionados[0] )
	{
		$smarty->assign("mensagem", $retornoRelacionados[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}else{
		$dadosRelacionadosUm 	= $class->PesquisarRelacionados($retornoRelacionadosUm);
		$dadosRelacionadosDois 	= $class->PesquisarRelacionados($retornoRelacionadosDois);
		if( $dadosRelacionadosUm[0] || $dadosRelacionadosDois[0] )
		{
			$smarty->assign("mensagem", $dadosRelacionadosUm[1]);
			$smarty->assign("redir", "home");
			$smarty->display("mensagem.html");
			exit();
		}
	}

	$smarty->assign("dadosMenu", $retornoMenu[1]);  
	$smarty->assign("dadosRelacionados", $retornoRelacionados[1]);
	$smarty->assign("dadosRelacionadosDois", $dadosRelacionadosDois[1]);
	$smarty->assign("dadosRelacionadosUm", $dadosRelacionadosUm[1]);
    $smarty->assign("dados", $retorno[1]);
    $smarty->assign("projetoAtual", $url[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Projeto");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("projeto.html");

?>