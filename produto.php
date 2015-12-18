<?php

    include_once "configs/config.php";
    include_once "classes/Categoria.class.php";
    include_once "classes/Produto.class.php";
    include_once "url.php";
    $classCat	= new Categoria();
    $class 		= new Produto();

    // Menu lateral
	$retornoMenuLat	= $classCat->PesquisarCategoria(null);
	if( $retornoMenuLat[0] )
	{
		$smarty->assign("mensagem", $retornoMenuLat[1]);
		$smarty->assign("redir", URL."home");
		$smarty->display("mensagem.html");
		exit();
	}

	// Traz o produto
	$parametro['id'] = $url[2];
	$retorno	= $class->Pesquisar($parametro);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", URL."home");
		$smarty->display("mensagem.html");
		exit();
	}

	$tituloCatProduto 	= $retorno[1][0]['idPai'][1][0]['titulo'];
	$idPaiTamanhoProduto= $retorno[1][0]['idPai'][1][0]['id'];
	$retornoTamanhoProd	= $class->PesquisarTamanhoProduto($idPaiTamanhoProduto);
	if( $retornoTamanhoProd[0] )
	{
		$smarty->assign("mensagem", $retornoTamanhoProd[1]);
		$smarty->assign("redir", URL."home");
		$smarty->display("mensagem.html");
		exit();
	}

	$parametro['id']	= $retorno[1][0]['idPai'][1][0]['id'];
	$parametro['url']	= $url[2];
	if (is_numeric($parametro['id']) && $parametro['url'] != "") {


		$retornoVejaTambem	= $class->PesquisarVejaTambem($parametro);
		if( $retornoVejaTambem[0] )
		{
			$smarty->assign("mensagem", $retornoVejaTambem[1]);
			$smarty->assign("redir", URL."home");
			$smarty->display("mensagem.html");
			exit();
		}
		$idCat = $retorno[1][0]['idCat'];
		// Projetos Relacionados
		$retornoRelacionados		= $class->PesquisarIdRelacionados($idCat);
		$retornoRelacionadosUm 		= $retornoRelacionados[1][0]['idProjeto'];
		$retornoRelacionadosDois 	= $retornoRelacionados[1][1]['idProjeto'];
		if( $retornoRelacionados[0] )
		{
			$smarty->assign("mensagem", $retornoRelacionados[1]);
			$smarty->assign("redir", URL."home");
			$smarty->display("mensagem.html");
			exit();
		}else{
			$dadosRelacionadosUm 	= $class->PesquisarRelacionados($retornoRelacionadosUm);
			$dadosRelacionadosDois 	= $class->PesquisarRelacionados($retornoRelacionadosDois);
			if( $dadosRelacionadosUm[0] || $dadosRelacionadosDois[0] )
			{
				$smarty->assign("mensagem", $dadosRelacionadosUm[1]);
				$smarty->assign("redir", URL."home");
				$smarty->display("mensagem.html");
				exit();
			}
		}
	}else{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", URL."home");
		$smarty->display("mensagem.html");
		exit();
	}


	$smarty->assign("dadosTamanhoProd", $retornoTamanhoProd[1]);
	$smarty->assign("dadosRelacionadosDois", $dadosRelacionadosDois[1]);
	$smarty->assign("dadosRelacionadosUm", $dadosRelacionadosUm[1]);
	$smarty->assign("categoriaAtual", $url[1]);
	$smarty->assign("produtoAtual", $url[2]);
	$smarty->assign("dadosVejaTambem", $retornoVejaTambem[1]);
	$smarty->assign("tituloCatProduto", $tituloCatProduto);
	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("dadosCatMenu", $retornoMenuLat[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Produto");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("produto.html");

?>