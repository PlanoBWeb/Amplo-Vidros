<?php /* Smarty version 2.6.12, created on 2016-01-20 12:59:35
         compiled from resultado-busca.html */ ?>
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
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../inc/cssUrlAmigavel.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
                        <?php if ($this->_tpl_vars['dados']): ?>
                            <h1 class="titulo-interna">produtos encontrados:</h1><br>
                            <!-- <p class="txt-interna">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p> -->
                            
                            <!-- Produto -->
                            <div class="row">
                                <br>
                                <div class="mtlsr-images-for-lightbox">
                                    <ul class="projetos-lightbox">
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
                                            <li>
                                                <div class="col-xs-12 <?php if ($this->_tpl_vars['dadosTamanhoProd'][0]['tamanhoProduto'] == 3): ?>col-sm-4 col-md-4<?php elseif ($this->_tpl_vars['dadosTamanhoProd'][0]['tamanhoProduto'] == 4): ?>col-sm-3 col-md-3<?php else: ?>col-sm-4 col-md-4<?php endif; ?> bloco-img-tipos bloco-img-tipos-produtos">
                                                    <a class="img" href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagem']; ?>
"  data-item-id="projeto-com-0">
                                                        <img class="img-produtos-tipos <?php if ($this->_tpl_vars['dadosTamanhoProd'][0]['tamanhoProduto'] == 3): ?>img-produtos-tipos-4<?php elseif ($this->_tpl_vars['dadosTamanhoProd'][0]['tamanhoProduto'] == 4): ?>img-produtos-tipos-3<?php else: ?>img-produtos-tipos-4<?php endif; ?>" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoThumbnail']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
">
                                                        <img class="lupa-produto" style="bottom: 107px;" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/lupa-produto.png" alt="Abrir" title="Abrir">
                                                    </a>
                                                    <h2><a class="img txt-interna" href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoImagem']; ?>
"  data-item-id="projeto-com-0"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
</a></h2>
                                                </div>
                                                
                                            </li>
                                        <?php endfor; endif; ?>
                                    </ul>
                                </div>
                                <div id="fecha" class="mtlsr-lightbox">
                                    <div class="bg-fundo-lightbox"></div>
                                    <div class="encapsula-img-lightbox">
                                        <div class="txt-lightbox">
                                            <a href="#" class="close">&#9421;</a>
                                            <?php if (count ( $this->_tpl_vars['dados'] ) >= 2): ?>
                                                <a href="#" class="prev">&lsaquo;</a>    
                                                <a href="#" class="next">&rsaquo;</a>  
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="mtlsr-lightbox mtlsr-lightbox-0">
                                    <a href="#" class="close">&#9421;</a>
                                    <?php if (count ( $this->_tpl_vars['dados'] ) >= 2): ?>
                                        <a href="#" class="prev">&lsaquo;</a>
                                        <a href="#" class="next">&rsaquo;</a>
                                    <?php endif; ?>
                                </div> -->
                            </div>

                            <?php if ($this->_tpl_vars['totalPaginas'] > 1): ?>
                                <div class="bloco-paginacao">
                                    <form class="pull-left" method="post" action="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                        <input type="hidden" class="urlAction" name="urlAction" value="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                        <input type="hidden" name="search" value="<?php echo $this->_tpl_vars['postBusca']; ?>
">   
                                        <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][0]; ?>
">
                                        <input class="seta-pagin-laterais pull-left" type="submit" value=" << ">
                                    </form>
                                    <?php unset($this->_sections['j']);
$this->_sections['j']['start'] = (int)1;
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['Numpaginas']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
if ($this->_sections['j']['start'] < 0)
    $this->_sections['j']['start'] = max($this->_sections['j']['step'] > 0 ? 0 : -1, $this->_sections['j']['loop'] + $this->_sections['j']['start']);
else
    $this->_sections['j']['start'] = min($this->_sections['j']['start'], $this->_sections['j']['step'] > 0 ? $this->_sections['j']['loop'] : $this->_sections['j']['loop']-1);
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = min(ceil(($this->_sections['j']['step'] > 0 ? $this->_sections['j']['loop'] - $this->_sections['j']['start'] : $this->_sections['j']['start']+1)/abs($this->_sections['j']['step'])), $this->_sections['j']['max']);
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>                                    
                                        <form class="pull-left" method="post" action="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                            <input type="hidden" class="urlAction" name="urlAction" value="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                            <input type="hidden" name="search" value="<?php echo $this->_tpl_vars['postBusca']; ?>
">   
                                            <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
">
                                            <input class="seta-pagin pull-left <?php if ($this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']] == $this->_tpl_vars['pagPost']): ?>link-paginacao-ativo<?php endif; ?>" type="submit" value="<?php echo $this->_tpl_vars['Numpaginas'][$this->_sections['j']['index']]; ?>
">
                                        </form>
                                    <?php endfor; endif; ?>
                                    <form class="pull-left" method="post" action="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                        <input type="hidden" class="urlAction" name="urlAction" value="<?php echo $this->_tpl_vars['URL']; ?>
resultado-busca">
                                        <input type="hidden" name="search" value="<?php echo $this->_tpl_vars['postBusca']; ?>
">   
                                        <input type="hidden" name="p" value="<?php echo $this->_tpl_vars['ultimaPaginacao']; ?>
">
                                        <input class="seta-pagin-laterais pull-left" type="submit" value=" >> ">
                                    </form>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <center><h1 class="titulo-interna">Nenhum produto encontrado</h1><br></center>
                        <?php endif; ?>
                        <!-- Produto -->
                        <div class="row">
                            <br><br>
                            <h2 class="titulo-interna ps-absolut" style="margin-top: -10px;">solicite seu orçamento!</h2>
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