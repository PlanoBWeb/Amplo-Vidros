<?php
	include_once "configs/config.php";

	$url = strtolower($_SERVER['REQUEST_URI']);
	$url = substr($url, 1);
	$url = str_replace(PASTAPROJETO, "", $url);
	$url = explode('/', $url);

	$permissao  = array('home', 'envia', 'quem-somos', 'index', 'erro', 'produtos', 'produto', 'projetos', 'projeto', 'promocao', 'orcamentos', 'resultado-busca', 'fale-conosco', 'obrigado-contato', 'obrigado-newsletter', 'obrigado-orcamento');

	$url['pagina'] = $url[0];

	if ($url['pagina'] == "" || $url['pagina'] == "index") {
		include "home.php";
	}elseif ($url['pagina'] == "admin") {
		include "admin/index.php";
	}else{
		if (in_array($url['pagina'], $permissao)) {
			include $url['pagina'].".php";
		}else{
			include "erro.php";
		}
	}
?>