<?php /* Smarty version 2.6.12, created on 2015-12-18 10:25:23
         compiled from ../inc/footer.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '../inc/footer.html', 23, false),)), $this); ?>
    <footer>
        <article class="rodape">
            <div class="col-xs-12 col-sm-4 col-md-4 pd-none hidden-xs">
                <a class="logo-rodape" href="<?php echo $this->_tpl_vars['URL']; ?>
home" title="AmploVidros"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/logo.png" alt="AmploVidros" title="AmploVidros"></a>
                <ul>
                    <li class="linha-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
home" class="link-rodape">Home</a></li>
                    <li class="linha-rodape"> | </li>
                    <li class="linha-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
quem-somos" class="link-rodape">Sobre nós</a></li>
                    <li><div class="row"></div></li>
                    <li class="linha-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos" class="link-rodape">Produtos</a></li>
                    <li class="linha-rodape"> | </li>
                    <li class="linha-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
projetos" class="link-rodape">Projetos</a></li>
                    <li><div class="row"></div></li>
                    <li class="linha-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
promocao" class="link-rodape">Promoção</a></li>
                    <li class="linha-rodape"> | </li>
                    <li class="linha-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
fale-conosco" class="link-rodape">Fale conosco</a></li>
                </ul>
            </div>  

            <div class="col-xs-12 col-sm-4 col-md-4 pd-none bloco-rodape-ind">
                <span class="titulo-verme">Produtos</span>
                <ul>
                    <?php $this->assign('idPai', ((is_array($_tmp=@$this->_tpl_vars['idPai'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosCatMenu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <?php if ($this->_tpl_vars['idPai'] <> $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['tituloPai']): ?> 
                            <li><div class="row"></div></li>
                            <li class="linha-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/<?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['urlCat']; ?>
" class="link-rodape"><?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['tituloPai']; ?>
</a></li>
                            <?php $this->assign('idPai', $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['tituloPai']); ?>
                            <li class="linha-rodape"> | </li>                            
                        <?php endif; ?>
                    <?php endfor; endif; ?>
                    <!-- <li><div class="row"></div></li>
                    <li class="linha-rodape"><a href="<?php echo $this->_tpl_vars['URL']; ?>
home" class="link-rodape">Box para banheiros</a></li>
                    <li class="linha-rodape"> | </li>
                    -->
                </ul>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 pd-none bloco-rodape-ind">
                <div class="row">
                    <span class="titulo-verme pull-left mg-bt-5">Contato</span>
                </div>
                <ul>
                    <li class="link-rodape"><img class="icone-contato-rodape" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_local.png" title="Rua Corunha, 67 • Centro CEP: 09920-640 • Diadema • SP" alt="Rua Corunha, 67 • Centro CEP: 09920-640 • Diadema • SP">Rua Corunha, 67 • Centro<br> CEP: 09920-640 • Diadema • SP</li>
                    <li class="mg-bt-5"><div class="row"></div></li>

                    <li class="linha-rodape"><img class="icone-contato-rodape" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_tel_f.png" title="(11) 4055-4430" alt="(11) 4055-4430"><a href="tel:01140554430" class="link-rodape">Tel: (11) 4055-4430</a></li>
                    <li class="mg-bt-5"><div class="row"></div></li>

                    <li class="linha-rodape"><img class="icone-contato-rodape" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_tel_f.png" title="(11) 4054-1781" alt="(11) 4054-1781"><a href="tel:01140541781" class="link-rodape">Fax: (11) 4054-1781</a></li>
                    <li class="mg-bt-5"><div class="row"></div></li>

                    <li class="linha-rodape"><img class="icone-contato-rodape" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_msg.png" title="vendas@amplovidros.com.br" alt="vendas@amplovidros.com.br"><a href="mailto:vendas@amplovidros.com.br" class="link-rodape">vendas@amplovidros.com.br</a></li>                   
                </ul>
            </div>  
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 pd-none encapsula-redes-footer">
                    <div class="redes-footer">
                        <div class="bloco-encapsula-redes-f">
                            <a class="link-redes-f" href="https://www.facebook.com/Amplovidros" target="_blank">
                                <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_face_f.png" alt="Facebook" title="Facebook">
                            </a>
                            <a class="link-redes-f" href="https://twitter.com/amplovidros" target="_blank">
                                <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_twitter.png" alt="Twitter" title="Twitter">
                            </a>
                            <a class="link-redes-f" href="" target="_blank">
                                <img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_insta.png" alt="Instagram" title="Instagram">
                            </a>
                        </div>
                        <p class="fique-conectado-f">Fique conectado conosco!</p>
                    </div>
                </div>          
            </div>  
        </article>
        <div class="bloco-direitos">
            <div class="encapsula-bloco-direitos">
                <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                    <p class="txt-direitos">Amplo Vidros - Todos os direitos reservados</p>
                </div>  
                <div class="col-xs-12 col-sm-6 col-md-6 pd-none">
                    <div class="bloco-dev">
                        <span class="link-rodape">Desenvolvimento: </span>
                        <a href="http://www.planobweb.com.br/" target="_blank"><img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/planob.jpg" alt="PlanoBWeb" title="PlanoBWeb"></a>
                    </div>
                </div>  
            </div>  
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/bootstrap.min.js"></script>
    <!-- vitrine -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/vitrine/owl.carousel.js"></script>
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/lightbox.js"></script>
    <!-- vitrine -->
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/funcoes.js"></script>
    <script src="<?php echo $this->_tpl_vars['URL']; ?>
commom/js/geral.js"></script>