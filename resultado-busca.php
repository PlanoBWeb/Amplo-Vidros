<?php

    include_once "configs/config.php";
    include_once "url.php";
    include_once "classes/Produto.class.php";
    include_once "classes/Categoria.class.php";
	$class 			= new Produto();
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

	// Resultado Busca
	$parametro['busca'] = $_POST['search'];
	
	// echo "<pre>";
	// print_r($parametro);
	// die();

	$retorno	= $class->Pesquisar($parametro);
	if( $retorno[0] )
	{
		$smarty->assign("mensagem", $retorno[1]);
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}
	if ($retorno[1]) {
		echo '<ul class="carrega-busca-ajax">';
		foreach ($retorno[1] as $key) {
			echo '	    		
				<li class="selectProduto">'.$key["titulo"].'</li>
			';
		}	
		echo "</ul>";
	}


	$smarty->assign("dados", $retorno[1]);
	$smarty->assign("dadosCatMenu", $retornoMenuLat[1]);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Resultado Busca");
    $smarty->assign("pagina", $url['pagina']);
    if (!$_POST['buscaAjax']) {
    	$smarty->display("resultado-busca.html");
	}
	exit;
?>