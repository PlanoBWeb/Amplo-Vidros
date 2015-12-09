<?php

    include_once "configs/config.php";
    include_once "url.php";

    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Quem Somos");
    $smarty->assign("pagina", $url['pagina']);
    $smarty->display("quem-somos.html");

?>