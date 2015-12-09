<?php

    include_once "configs/config.php";
    include_once "url.php";

    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Resultado Busca");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("resultado-busca.html");

?>