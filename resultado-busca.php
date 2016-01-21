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
	if ($_POST['search']) {
		//$parametro['busca'] = $_POST['search'];
		$valorBusca = strstr($_POST['search'], "...");

		if ($valorBusca) {
			$parametro['busca'] = str_replace("...", "", $_POST['search']);
		}else{
			$parametro['busca'] = $_POST['search'];
		}

		$totalPorPagina = 9;
		$_POST['p'] = (!$_POST['p'] ? 1 : $_POST['p']);
		
		$retornoPag = $class->Pesquisar($parametro, null, null);	
		$retorno	= $class->Pesquisar($parametro, $totalPorPagina, $_POST['p']);

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
					<li class="selectProduto">'.$key["tituloBusca"].'</li>
				';
			}	
			echo "</ul>";
		}

		$totalDeRegistros = count($retornoPag[1]); 	
		$conta = $totalDeRegistros / $totalPorPagina;
		$totalPaginas = ceil($conta);

		if ($totalPaginas >= 11) {
			$totalPaginas = 10;
		}

		$Numpaginas 	= array();
		for($j=0; $j <= $totalPaginas; $j++) { 
			$Numpaginas[$j] = $j;
		}
		$ultimaPaginacao = end($Numpaginas);
	}else{
		$smarty->assign("mensagem", "Nenhum produto encontrado!");
		$smarty->assign("redir", "home");
		$smarty->display("mensagem.html");
		exit();
	}

	$smarty->assign("pagPost", $_POST['p']);
	$smarty->assign("ultimaPaginacao", $ultimaPaginacao);
	$smarty->assign("Numpaginas", $Numpaginas);
	$smarty->assign("postBusca", $_POST['search']);  
	$smarty->assign("totalPaginas", $totalPaginas);
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