<?php /* Smarty version 2.6.12, created on 2015-12-01 17:11:47
         compiled from ../inc/header.html */ ?>
<div id="fb-root"></div>
<?php echo '
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
           js = d.createElement(s); js.id = id;
           js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
           fjs.parentNode.insertBefore(js, fjs);
        }(document, \'script\', \'facebook-jssdk\'));
    </script>
'; ?>

<header>
    <div class="bg-topo hidden-xs">
        <img src="commom/img/bg_topo.jpg" alt="">
    </div>
    <article class="topo-contato">
        <div class="col-xs-9 col-sm-3 col-md-3 hidden-xs">
            <a href="<?php echo $this->_tpl_vars['URL']; ?>
home" alt="AmploVidros"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/logo.png" alt="AmploVidros" title="AmploVidros"></a>
        </div>
        <div class="col-sm-6 col-md-6 hidden-xs">
            <div class="pull-left bloco-tel-topo">
                <div class="row">
                    <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_tel.png" alt="Atendimento" title="Atendimento">
                    <p class="atende-topo">Atendimento</p>
                </div>
                <div class="row">
                    <a class="tel-topo" href="tel:01140554430">11 4055•4430</a>
                </div>
            </div>    
            <div class="pull-left bloco-tel-topo">
                <div class="row">
                    <img class="pull-left" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_atende.png" alt="Contato" title="Contato">
                    <p class="atende-topo">Contato</p>
                </div>
                <div class="row">
                    <a class="email-topo" href="mailto:vendas@amplovidros.com.br">vendas@amplovidros.com.br</a>
                </div>
            </div>    
        </div>
        <div class="col-sm-3 col-md-3 bloco-face-topo hidden-xs">
            <img class="img-amplo-face" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/amplo_face.jpg" alt="Facebook AmploVidros" title="Facebook AmploVidros">
            <p class="txt-face">Amplo Vidros e Espelhos</p>
            <div class="fb-like"></div>
        </div>
        <!-- <div class="col-xs-12 col-sm-6 col-md-6">

        </div> -->
    </article>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed mg-menu-busca" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="lupa-mobile visible-xs-block mg-menu-busca" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_busca.jpg" alt="Buscar" title="Buscar">
                <a class="navbar-brand visible-xs-block" href="<?php echo $this->_tpl_vars['URL']; ?>
home"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/logo.png" alt="AmploVidros" title="AmploVidros"></a>

                <form class="navbar-left bloco-busca-mobile" role="search">
                    <div class="form-group form-group-mob">
                        <input type="text" class="form-control busca-mob pull-left" placeholder="BUSCA">
                        <button type="submit" class="btn btn-buscar-desk pull-left">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_busca.jpg" alt="Buscar" title="Buscar">
                        </button>
                    </div>
                </form>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a class="link-menu-topo link-home" href="<?php echo $this->_tpl_vars['URL']; ?>
home"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_casa.jpg" alt="AmploVidros" title="AmploVidros"></a></li>
                    <li><a class="link-menu-topo" href="#">quem somos</a></li>
                    <li><span  class="barra-separa-menu hidden-xs">|</span></li>
                    <li><a class="link-menu-topo" href="#">produtos</a></li>
                    <li><span  class="barra-separa-menu hidden-xs">|</span></li>
                    <li><a class="link-menu-topo" href="#">projetos</a></li>
                    <li><span  class="barra-separa-menu hidden-xs">|</span></li>
                    <li><a class="link-menu-topo" href="#">promoção</a></li>
                    <li><span  class="barra-separa-menu hidden-xs">|</span></li>
                    <li><a class="link-menu-topo" href="#">orçamentos</a></li>
                </ul>
                <div class="pull-right hidden-xs">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control busca-desk" placeholder="BUSCA">
                        </div>
                        <button type="submit" class="btn btn-buscar-desk">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_busca.jpg" alt="Buscar" title="Buscar">
                        </button>
                    </form>
                    <div class="redes-sociais">
                        <a href="" target="_blank">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_insta.png" alt="Instagram" title="Instagram">
                        </a>
                        <a href="https://twitter.com/amplovidros" target="_blank">
                            <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_twitter.png" alt="Twitter" title="Twitter">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>