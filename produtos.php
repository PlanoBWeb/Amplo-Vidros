<?php

    include_once "configs/config.php";
    include_once "classes/Categoria.class.php";
    include_once "url.php";
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

	// echo "<pre>";
	// print_r($retornoMenuLat[1]);
	// die();

    // Passo parametro 1 para trazer somente as categorias pai
    if ($url[1] == "") {
    	$parametro['catPai'] = 1;	
    }else{
    	$parametro['catNormal'] = $url[1];
    }    
    $retorno	= $class->Pesquisar($parametro);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}
	$totalRetorno = count($retorno[1]);
	for ($i=0; $i < $totalRetorno; $i++) { 
		$existeAmbiente = $retorno[1][$i]['ambiente'];
		if ($existeAmbiente == "1")  {
			$existeAmbiente = true;
		}
	}

	$smarty->assign("existeAmbiente", $existeAmbiente);
    $smarty->assign("dados", $retorno[1]);
    $smarty->assign("dadosCatMenu", $retornoMenuLat[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Produtos");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("produtos.html");

?>