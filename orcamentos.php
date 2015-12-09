<?php

    include_once "configs/config.php";
    include_once "url.php";

    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Orçamentos");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("orcamentos.html");

?>