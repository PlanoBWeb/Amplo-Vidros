<?php /* Smarty version 2.6.12, created on 2015-12-17 13:01:04
         compiled from projeto.html */ ?>
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

                        <h1 class="titulo-interna"><?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
</h1>
                        
                        <div class="row">
                            <p class="projeto-por"><?php if ($this->_tpl_vars['dados'][0]['elaboracao']): ?> Elaboração: <?php echo $this->_tpl_vars['dados'][0]['elaboracao']; ?>
 <?php endif; ?>  | <?php if ($this->_tpl_vars['dados'][0]['designer']): ?> Designer: <?php echo $this->_tpl_vars['dados'][0]['designer']; ?>
 <?php endif; ?></p>
                        </div>

                        <p class="txt-interna">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
                        
                        <!-- Projeto -->
                        <div class="row pd-bt-60">
                            <div class="col-xs-12 col-sm-6 col-md-6 pd-lf-none mg-bt-20">
                                <div class="carrega-lightBox-menor"></div>
                                <img class="img-inicial" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][0]['galeriaImg']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 pd-lf-none">
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
                                     <a class="lightBox-menor" href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['galeriaImg']; ?>
">
                                        <img src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['galeriaImgThumb']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>
">
                                    </a>
                                <?php endfor; endif; ?>
                            </div>
                        </div>
                        <!-- Projeto -->
                        
                        <?php if ($this->_tpl_vars['dadosRelacionados']): ?>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 pd-none pd-bt-mob">
                                    <h2 class="titulo-interna ps-absolut">Produtos relacionados</h2>
                                    <img class="linha-img" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/linha.jpg" alt="linha" title="linha">
                                </div>
                                <!-- 1 produto -->
                                <?php if ($this->_tpl_vars['dadosRelacionadosUm']): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-6 bloco-projetos-mobile pd-bt-60">
                                        <div class="mtlsr-images-for-lightbox">
                                            <div class="row pd-lt-10">
                                                <h3 class="txt-interna"><?php echo $this->_tpl_vars['dadosRelacionadosUm'][0]['tituloCat']; ?>
 • <?php echo $this->_tpl_vars['dadosRelacionadosUm'][0]['titulo']; ?>
</h3>
                                            </div>
                                            <ul class="projetos-lightbox">
                                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosRelacionadosUm']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                    <li>
                                                        <a href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosRelacionadosUm'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" data-item-id="projeto-com-1">
                                                            <div class="col-xs-4 col-sm-4 col-md-4 bloco-img-projetos">
                                                                <img class="img-produtos-tipos" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosRelacionadosUm'][$this->_sections['i']['index']]['caminhoThumbnail']; ?>
" alt="<?php echo $this->_tpl_vars['dadosRelacionadosUm'][0]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dadosRelacionadosUm'][0]['titulo']; ?>
">
                                                                <img class="lupa-produto-projetos" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/lupa-produto.png" alt="Abrir" title="Abrir">
                                                            </div>
                                                        </a>
                                                    </li>                                                
                                                <?php endfor; endif; ?>
                                            </ul>
                                            <div class="row">
                                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dadosRelacionadosUm'][0]['nomeCat'][1]; ?>
/<?php echo $this->_tpl_vars['dadosRelacionadosUm'][0]['urlAmigavel']; ?>
" class="btn-default-padrao pull-right align-btn-projeto">Ver Mais</a>
                                            </div>
                                        </div> 
                                        <div class="mtlsr-lightbox mtlsr-lightbox-1">
                                            <a href="#" class="close">&#9421;</a>
                                            <?php if (count ( $this->_tpl_vars['dadosRelacionadosUm'] ) >= 2): ?>
                                                <a href="#" class="prev">&lsaquo;</a>
                                                <a href="#" class="next">&rsaquo;</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- 1 produto -->
                                
                                <!-- 2 produto -->
                                <?php if ($this->_tpl_vars['dadosRelacionadosDois']): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-6 bloco-projetos-mobile pd-bt-60">
                                        <div class="mtlsr-images-for-lightbox">
                                            <div class="row pd-lt-10">
                                                <h3 class="txt-interna"><?php echo $this->_tpl_vars['dadosRelacionadosDois'][0]['tituloCat']; ?>
 • <?php echo $this->_tpl_vars['dadosRelacionadosDois'][0]['titulo']; ?>
</h3>
                                            </div>
                                            <ul class="projetos-lightbox">
                                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosRelacionadosDois']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                    <li>
                                                        <a href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosRelacionadosDois'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" data-item-id="projeto-com-2">
                                                            <div class="col-xs-4 col-sm-4 col-md-4 bloco-img-projetos">
                                                                <img class="img-produtos-tipos" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosRelacionadosDois'][$this->_sections['i']['index']]['caminhoThumbnail']; ?>
" alt="<?php echo $this->_tpl_vars['dadosRelacionadosDois'][0]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dadosRelacionadosDois'][0]['titulo']; ?>
">
                                                                <img class="lupa-produto-projetos" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/lupa-produto.png" alt="Abrir" title="Abrir">
                                                            </div>
                                                        </a>
                                                    </li>                                                
                                                <?php endfor; endif; ?>
                                            </ul>
                                            <div class="row">
                                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dadosRelacionadosDois'][0]['nomeCat'][1]; ?>
/<?php echo $this->_tpl_vars['dadosRelacionadosDois'][0]['urlAmigavel']; ?>
" class="btn-default-padrao pull-right align-btn-projeto">Ver Mais</a>
                                            </div>
                                        </div> 
                                        <div class="mtlsr-lightbox mtlsr-lightbox-2">
                                            <a href="#" class="close">&#9421;</a>
                                            <?php if (count ( $this->_tpl_vars['dadosRelacionadosDois'] ) >= 2): ?>
                                                <a href="#" class="prev">&lsaquo;</a>
                                                <a href="#" class="next">&rsaquo;</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- 2 produto -->

                                <!-- 3 produto -->
                                <?php if ($this->_tpl_vars['dadosRelacionadosTres']): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-6 bloco-projetos-mobile pd-bt-60">
                                        <div class="mtlsr-images-for-lightbox">
                                            <div class="row pd-lt-10">
                                                <h3 class="txt-interna"><?php echo $this->_tpl_vars['dadosRelacionadosTres'][0]['tituloCat']; ?>
 • <?php echo $this->_tpl_vars['dadosRelacionadosTres'][0]['titulo']; ?>
</h3>
                                            </div>
                                            <ul class="projetos-lightbox">
                                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosRelacionadosTres']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                    <li>
                                                        <a href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosRelacionadosTres'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" data-item-id="projeto-com-3">
                                                            <div class="col-xs-4 col-sm-4 col-md-4 bloco-img-projetos">
                                                                <img class="img-produtos-tipos" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosRelacionadosTres'][$this->_sections['i']['index']]['caminhoThumbnail']; ?>
" alt="<?php echo $this->_tpl_vars['dadosRelacionadosTres'][0]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dadosRelacionadosTres'][0]['titulo']; ?>
">
                                                                <img class="lupa-produto-projetos" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/lupa-produto.png" alt="Abrir" title="Abrir">
                                                            </div>
                                                        </a>
                                                    </li>                                                
                                                <?php endfor; endif; ?>
                                            </ul>
                                            <div class="row">
                                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dadosRelacionadosTres'][0]['nomeCat'][1]; ?>
/<?php echo $this->_tpl_vars['dadosRelacionadosTres'][0]['urlAmigavel']; ?>
" class="btn-default-padrao pull-right align-btn-projeto">Ver Mais</a>
                                            </div>
                                        </div> 
                                        <div class="mtlsr-lightbox mtlsr-lightbox-3">
                                            <a href="#" class="close">&#9421;</a>
                                            <?php if (count ( $this->_tpl_vars['dadosRelacionadosTres'] ) >= 2): ?>
                                                <a href="#" class="prev">&lsaquo;</a>
                                                <a href="#" class="next">&rsaquo;</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- 3 produto -->

                                <!-- 4 produto -->
                                <?php if ($this->_tpl_vars['dadosRelacionadosQuatro']): ?>
                                    <div class="col-xs-12 col-sm-6 col-md-6 bloco-projetos-mobile pd-bt-60">
                                        <div class="mtlsr-images-for-lightbox">
                                            <div class="row pd-lt-10">
                                                <h3 class="txt-interna"><?php echo $this->_tpl_vars['dadosRelacionadosQuatro'][0]['tituloCat']; ?>
 • <?php echo $this->_tpl_vars['dadosRelacionadosQuatro'][0]['titulo']; ?>
</h3>
                                            </div>
                                            <ul class="projetos-lightbox">
                                                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosRelacionadosQuatro']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                    <li>
                                                        <a href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosRelacionadosQuatro'][$this->_sections['i']['index']]['caminhoImagem']; ?>
" data-item-id="projeto-com-4">
                                                            <div class="col-xs-4 col-sm-4 col-md-4 bloco-img-projetos">
                                                                <img class="img-produtos-tipos" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosRelacionadosQuatro'][$this->_sections['i']['index']]['caminhoThumbnail']; ?>
" alt="<?php echo $this->_tpl_vars['dadosRelacionadosQuatro'][0]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dadosRelacionadosQuatro'][0]['titulo']; ?>
">
                                                                <img class="lupa-produto-projetos" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/lupa-produto.png" alt="Abrir" title="Abrir">
                                                            </div>
                                                        </a>
                                                    </li>                                                
                                                <?php endfor; endif; ?>
                                            </ul>
                                            <div class="row">
                                                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dadosRelacionadosQuatro'][0]['nomeCat'][1];  echo $this->_tpl_vars['dadosRelacionadosQuatro'][0]['urlAmigavel']; ?>
" class="btn-default-padrao pull-right align-btn-projeto">Ver Mais</a>
                                            </div>
                                        </div> 
                                        <div class="mtlsr-lightbox mtlsr-lightbox-4">
                                            <a href="#" class="close">&#9421;</a>
                                            <?php if (count ( $this->_tpl_vars['dadosRelacionadosQuatro'] ) >= 2): ?>
                                                <a href="#" class="prev">&lsaquo;</a>
                                                <a href="#" class="next">&rsaquo;</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!-- 4 produto -->
                            </div> 
                        <?php endif; ?>

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