<?php
	
	include_once "configs/config.php";

	$url = $_SERVER['REQUEST_URI'];
	$url = substr($url, 1);
	$url = str_replace(PASTAPROJETO, "", $url);
	$url = explode('/', $url);

	$permissao  = array('home', 'index', 'erro', 'fale-conosco', 'envia', 'obrigado-contato', 'obrigado-news', 'obrigado-orcamento');

	if ($url[0] == "" || $url[0] == "index") {
		include "home.php";
	}elseif ($url[0] == "admin") {
		include "admin/index.php";
	}else{
		if (in_array($url[0], $permissao)) {
			include $url[0].".php";
		}else{
			include "erro.php";
		}
	}
?>