<?php /* Smarty version 2.6.12, created on 2015-12-01 17:51:15
         compiled from index.html */ ?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="" />
	<link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon-tab.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/estilo.css">
	<title>Amplo Vidros</title>
 	<!-- Bootstrap -->
    <link href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- vitrine -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['URL']; ?>
commom/css/vitrine/owl.transitions.css">
    <!-- vitrine -->
  </head>
  <body>
    <div class="container-fluid pd-none">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <!-- Banner -->
        <div id="demo" class="vitrine-index">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div id="owl-demo" class="owl-carousel">
                            <div class="item">
                                <div class="bloco-desc-banner">
                                    <h2>GUARDA CORPO <br>DE VIDRO</h2>
                                    <p>Somos especialistas: Consulte os modelos de fixação, todos em aço inox</p>
                                    <a class="saiba-mais-vitrine" href="">saiba mais</a>
                                </div>
                                <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/banner.jpg" alt="banner" title="banner">
                            </div>
                            <div class="item"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/banner.jpg" alt="banner" title="banner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Banner -->
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="commom/js/bootstrap.min.js"></script>
    <!-- vitrine -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/vitrine/owl.carousel.js"></script>
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/lightbox.js"></script>
    <!-- vitrine -->
    <?php echo '
        <script>
            $(\'.lupa-mobile\').click(function(){
                if($(\'.bloco-busca-mobile\').is(":visible")){
                    $(\'.bloco-busca-mobile\').toggle();
                }else{
                    $(\'.bloco-busca-mobile\').toggle();
               }
            });

            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    navigation : true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true
                });
            });
        </script>
    '; ?>

</body>
</html>