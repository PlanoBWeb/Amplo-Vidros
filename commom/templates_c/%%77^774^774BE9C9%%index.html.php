<?php /* Smarty version 2.6.12, created on 2015-12-15 18:09:23
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
                        <!-- <div class="item"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/banner.jpg" alt="banner" title="banner"></div> -->
                    </div>
                </div>
            </div>
        </div> 
        <!-- Banner -->

        <!-- Baixo Banner -->
        <article class="baixo-banner mg-top-mobile">
            <div class="encapsula-baixo-banner">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <a class="link-baixo-banner pull-left" href="<?php echo $this->_tpl_vars['URL']; ?>
home"><h2>BOX<br> para banheiros</h2></a>
                    <a class="pull-left" href="<?php echo $this->_tpl_vars['URL']; ?>
home">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_1.png" alt="BOX para banheiros" title="BOX para banheiros">
                    </a>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3">
                    <a class="link-baixo-banner pull-left" href="<?php echo $this->_tpl_vars['URL']; ?>
home"><h2>DECORAÇÃO<br> de ambientes</h2></a>
                    <a class="pull-left" href="<?php echo $this->_tpl_vars['URL']; ?>
home">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_2.png" alt="BOX para banheiros" title="BOX para banheiros">
                    </a>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3">
                    <a class="link-baixo-banner pull-left" href="<?php echo $this->_tpl_vars['URL']; ?>
home"><h2>ENGENHARIA<br> soluções</h2></a>
                    <a class="pull-left" href="<?php echo $this->_tpl_vars['URL']; ?>
home">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_3.png" alt="BOX para banheiros" title="BOX para banheiros">
                    </a>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3">
                    <a class="link-baixo-banner pull-left" href="<?php echo $this->_tpl_vars['URL']; ?>
home"><h2>PROJETOS <br> especiais</h2></a>
                    <a class="pull-left" href="<?php echo $this->_tpl_vars['URL']; ?>
home">
                        <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_4.png" alt="BOX para banheiros" title="BOX para banheiros">
                    </a>
                </div>
            </div>
        </article>
        <!-- Baixo Banner -->

        <!-- Conteudo -->
        <section class="conteudo">
            <article class="destaques-home">
                <div class="row mg-bt-80">
                    <!-- Destaque 1 -->
                    <div class="col-xs-12 col-sm-6 col-md-6 bloco-vitrine-destaques">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-7 pd-none">
                                <h2 class="txt-prod-destaque">Produtos em Destaques</h2>
                            </div>    
                            <div class="col-xs-12 col-sm-5 col-md-5 pd-none linha-lado-destaques"></div>    
                        </div>
                        <div class="vitrine-slides">
                            <div class="bloco-roda-vitrine">
                                <div class="encapsula-produto-vitrine-geral encapsula-produto-vitrine">
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
                                        <div class="produto-vitrine-geral produto-vitrine">
                                            <img class="img-produto-destaque" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['caminhoThumbnail']; ?>
" alt="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
">
                                            <a href="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['nomeCat'][1][0]['urlCat']; ?>
/<?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="titulo-produto-destaque"><?php echo $this->_tpl_vars['dados'][$this->_sections['i']['index']]['titulo']; ?>
 </a>
                                        </div>                                    
                                    <?php endfor; endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="setas-produto-destaque">
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
" id="prev" class="pull-left"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/btn_left.png" alt="Seta esquerda" title="Seta esquerda"></a>
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
" id="next" class="pull-right"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/btn_right.png" alt="Seta direita" title="Seta direita"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Destaque 1 -->

                    <!-- Destaque 2 -->
                    <div class="col-xs-12 col-sm-6 col-md-6 bloco-vitrine-destaques">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-7 pd-none">
                                <h2 class="txt-prod-destaque">Projetos em Destaques</h2>
                            </div>    
                            <div class="col-xs-12 col-sm-5 col-md-5 pd-none linha-lado-destaques"></div>    
                        </div>
                        <div class="vitrine-slides">
                            <div class="bloco-roda-vitrine">
                                <div class="encapsula-produto-vitrine-geral encapsula-produto-vitrine-projetos">
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosProjeto']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <div class="produto-vitrine-geral produto-vitrine-projetos">
                                            <img class="img-produto-destaque" src="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['dadosProjeto'][$this->_sections['i']['index']]['caminhoThumbnail']; ?>
" alt="<?php echo $this->_tpl_vars['dadosProjeto'][$this->_sections['i']['index']]['titulo']; ?>
" title="<?php echo $this->_tpl_vars['dadosProjeto'][$this->_sections['i']['index']]['titulo']; ?>
">
                                            <a href="<?php echo $this->_tpl_vars['URL']; ?>
projeto/<?php echo $this->_tpl_vars['dadosProjeto'][$this->_sections['i']['index']]['urlAmigavel']; ?>
" class="titulo-produto-destaque"><?php echo $this->_tpl_vars['dadosProjeto'][$this->_sections['i']['index']]['titulo']; ?>
</a>
                                        </div>
                                    <?php endfor; endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="setas-produto-destaque">
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
" id="prev-projetos" class="pull-left"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/btn_left.png" alt="Seta esquerda" title="Seta esquerda"></a>
                                    <a href="<?php echo $this->_tpl_vars['URL']; ?>
" id="next-projetos" class="pull-right"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/btn_right.png" alt="Seta direita" title="Seta direita"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Destaque 2 -->  
                </div>               

                <div class="row mg-bt-80">
                    <div class="col-xs-12 col-sm-6 col-md-6 mg-bt-80">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-md-3 pd-none">
                                <h2 class="txt-prod-destaque">Sobre nós</h2>
                            </div>    
                            <div class="col-xs-12 col-sm-9 col-md-9 pd-none linha-lado-destaques"></div>    
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 mg-bt-20  mg-auto-empresa">
                                <img class="img-loja" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/empresa.jpg" alt="foto da loja" title="foto da loja">
                            </div> 
                            <div class="col-xs-12 col-sm-6 col-md-6 mg-auto-empresa">
                                <img class="img-loja" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/empresa.jpg" alt="foto da loja" title="foto da loja">
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">    
                                <p class="txt-a-loja">
                                    <br>
                                    A Amplo Vidros e Espelhos é uma empresa baseada em princípios de responsabilidade e comprometimento, trabalhamos com o foco no atendimento extremamente personalizado, levando em consideração a necessidade real do nosso cliente nos mais variados projetos.<br><br>

                                    Nossos produtos são desenvolvidos em conjunto com nossos clientes, fornecedores e parceiros, criando algo único e de qualidade ampliada, surgimos como alternativa diferenciada para clientes que buscam o que há de melhor no mercado, com funcionalidade e segurança. <br><br>
                                </p>
                                <a class="btn-default-padrao pull-left" href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos">saiba mais</a>
                            </div>
                        </div>
                    </div>    

                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7 col-md-7 pd-none">
                                <h2 class="txt-prod-destaque">Assine nossa newsletter</h2>
                            </div>    
                            <div class="col-xs-12 col-sm-5 col-md-5 pd-none linha-lado-destaques"></div>    
                        </div>
                        <div class="row">
                            <form class="form-horizontal form-home" method="post" action="<?php echo $this->_tpl_vars['URL']; ?>
envia" name="newsletter">
                                <!-- <input type="hidden" name="pag" value="<?php echo $this->_tpl_vars['pagina']; ?>
"> -->
                                <input type="hidden" name="newsletterEnvia" value="newsletter">
                               <div class="form-group">
                                    <div class="col-sm-2">
                                        <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_nome.png" alt="nome" title="nome">
                                        <label for="inputnome" class="col-sm-2 control-label">Nome</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" name="nome_news" class="form-control" id="inputnome">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_email.png" alt="email" title="email">
                                        <label for="inputEmail" class="col-sm-2 control-label">email</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="email" name="email_news" class="form-control" id="inputEmail">
                                    </div>
                                </div>
                                <button type="submit" class="btn-default-padrao pull-right"  onclick="return validaNewsletter();">assinar!</button>
                            </form>
                        </div>
                        <div class="row">
                            <br><br>
                            <div class="col-xs-12 col-sm-8 col-md-8 pd-none">
                                <h2 class="txt-prod-destaque">Faça seu projeto conosco!</h2>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 pd-none linha-lado-destaques"></div>    
                        </div>
                        <div class="row">
                            <img class="img-bandeiras" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/bandeiras.png" alt="Faça seu projeto conosco!" title="Faça seu projeto conosco!">
                        </div>
                        <div class="row">
                            <br><br><br>
                            <div class="col-xs-12 col-sm-8 col-md-8 pd-none">
                                <h2 class="txt-prod-destaque txt-conectado-mg">fique conectado conosco!</h2>
                            </div>    
                            <div class="col-xs-12 col-sm-4 col-md-4 pd-none bloco-conectado">
                                <a href="https://www.facebook.com/Amplovidros" target="_blank">
                                    <img class="img-conectado" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_face.png" alt="fique conectado pelo Facebook" title="fique conectado pelo Facebook">
                                </a>
                                <a href="https://twitter.com/#!/amplovidros" target="_blank">
                                    <img class="img-conectado" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icone_twitter.png" alt="fique conectado pelo Twitter" title="fique conectado pelo Twitter">
                                </a>
                                <a href="" target="_blank">
                                    <img class="img-conectado" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_instagram.png" alt="fique conectado pelo Instagram" title="fique conectado pelo Instagram">
                                </a>
                            </div>    
                        </div>
                    </div>    
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