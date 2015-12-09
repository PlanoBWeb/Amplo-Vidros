<?php /* Smarty version 2.6.12, created on 2015-12-04 11:35:45
         compiled from fale-conosco.html */ ?>
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
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/breadcrumb.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <section class="conteudo">
                <article class="bloco-conteudo-interna">
                    <div class="col-xs-12 col-sm-7 col-md-7 mg-bt-20">
                        <h1 class="titulo-interna">FALE CONOSCO</h1>
                        <p class="txt-interna">Preencha seus dados e a mensagem e retornaremos o mais breve possível.</p>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/form.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 mg-bt-20">
                        <h2 class="titulo-interna">LOCALIZAÇÃO</h2>
                        <iframe class="mapa-contato" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.78773689779!2d-46.62239348501981!3d-23.683547684622386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce44ef04c90ea5%3A0x1378235ab789bce2!2sR.+Corunha%2C+67+-+Centro%2C+Diadema+-+SP%2C+09920-640!5e0!3m2!1spt-BR!2sbr!4v1449172464855"></iframe>
                        <!-- <p class="txt-interna"></p> -->
                    </div>                 
                </article>
            </section>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</body>
</html>