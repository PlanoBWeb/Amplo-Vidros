<?php /* Smarty version 2.6.12, created on 2015-12-09 15:03:22
         compiled from produtos.html */ ?>
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
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/menu-lateral.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <div class="col-xs-12 col-sm-9 col-md-9">

                        <h1 class="titulo-interna"><?php if ($this->_tpl_vars['dados'][0]['tituloCat']):  echo $this->_tpl_vars['dados'][0]['tituloCat'];  else: ?>Produtos<?php endif; ?></h1><br>
                        <p class="txt-interna">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
                        <!-- Tipos 1 -->
                        <div class="row">
                            <br>
                            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dados']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?> 
                                <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['ambiente'] == 0): ?>
                                    <div class="col-xs-12 col-sm-3 col-md-3 bloco-img-tipos">
                                        <img class="img-produtos-tipos" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['texto']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['texto']; ?>
">
                                        <h2><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto" class="txt-interna"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
</a></h2>
                                        <div class="row">
                                            <a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="btn-default-padrao">Ver Mais</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; endif; ?>
                        </div>
                        <!-- Tipos 1 -->
                        <!-- Tipos 2 -->
                        <?php if ($this->_tpl_vars['existeAmbiente']): ?>
                            <div class="row">
                                <br>
                                <br>
                                <h2 class="titulo-interna ps-absolut">ambiente onde se aplica</h2>
                                <img class="linha-img" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/linha.jpg" alt="linha" title="linha">
                            </div>
                            <div class="row">
                                <br>
                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dados']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?> 
                                    <?php if ($this->_tpl_vars['dados'][$this->_sections['i']['index']]['ambiente'] == 1): ?>
                                        <div class="col-xs-12 col-sm-3 col-md-3 bloco-img-tipos">
                                            <img class="img-produtos-tipos" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['texto']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['texto']; ?>
">
                                            <h2><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto" class="txt-interna"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
</a></h2>
                                            <div class="row">
                                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="btn-default-padrao">Ver Mais</a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endfor; endif; ?>
                            </div>
                        <?php endif; ?>
                        <!-- Tipos 2 -->
                        <div class="row">
                            <br><br>
                            <h2 class="titulo-interna ps-absolut">solicite seu orçamento!</h2>
                            <img class="linha-img" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/linha.jpg" alt="linha" title="linha">
                            <br><br>
                        </div>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/form.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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