<?php /* Smarty version 2.6.12, created on 2015-12-16 13:09:24
         compiled from ../inc/menu-lateral.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '../inc/menu-lateral.html', 4, false),)), $this); ?>
<?php if ($this->_tpl_vars['pagina'] == produtos || $this->_tpl_vars['pagina'] == produto): ?>
    <div class="col-xs-12 col-sm-3 col-md-3 mg-bt-20 pd-lf-none hidden-xs">
        <ul class="menu-lateral">
            <?php $this->assign('idPai', ((is_array($_tmp=@$this->_tpl_vars['idPai'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
            <?php $this->assign('ambiente', ((is_array($_tmp=@$this->_tpl_vars['ambiente'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
            <li>
                <ul>
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
                        </ul>
                    </li>
                    <?php $this->assign('ambiente', 0); ?>
                    <li class="txt-interna abre-sub-lateral <?php if ($this->_tpl_vars['categoriaAtual'] == $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['urlCat']): ?>menu-lat-ativo<?php endif; ?>">
                    <?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['tituloPai']; ?>

                    <img class="pull-right" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta.png" alt="Abrir menu" title="Abrir menu"> 
                    <?php $this->assign('idPai', $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['tituloPai']); ?>
                        <ul class="subMenu-lateral" <?php if ($this->_tpl_vars['categoriaAtual'] == $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['urlCat']): ?>style="display: block"<?php endif; ?>>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['idPai'] == $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['tituloPai']): ?>
                    <?php if ($this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['ambiente'] <> 0 && $this->_tpl_vars['ambiente'] == 0): ?>
                        <li class="txt-interna txt-ambiente">AMBIENTE</li>
                        <?php $this->assign('ambiente', 1); ?>
                    <?php endif; ?>
                <?php endif; ?>
                <li class="txt-interna"><a class="<?php if ($this->_tpl_vars['produtoAtual'] == $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['urlAmigavel']): ?>menu-lat-ativo<?php endif; ?>" href="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['urlCat']; ?>
/<?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['titulo']; ?>
</a></li>
            <?php endfor; endif; ?>
        </ul>
    </div>
    <!-- Mobile -->
    <form action="<?php echo $this->_tpl_vars['URL']; ?>
" class="menu-lateral-mob visible-xs-block">
        <div class="form-group">
            <div class="col-sm-9 mg-lf-5-">
                <select class="form-control menuLatLink">
                    <option>Escolha um produto</option>
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
                            <?php $this->assign('ambiente', 0); ?>
                            <option disabled><?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['tituloPai']; ?>
</option>
                            <?php $this->assign('idPai', $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['tituloPai']); ?>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['idPai'] == $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['tituloPai']): ?>
                            <?php if ($this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['ambiente'] <> 0 && $this->_tpl_vars['ambiente'] == 0): ?>
                            <option disabled>AMBIENTE</option>
                            <?php $this->assign('ambiente', 1); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <option class="select-mobile-sub" value="<?php echo $this->_tpl_vars['URL']; ?>
produto/<?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['urlCat']; ?>
/<?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['titulo']; ?>
</option>
                    <?php endfor; endif; ?>
                </select>
            </div>
        </div>
        <br>
    </form>
    <!-- Mobile -->
<?php else: ?>
    <div class="col-xs-12 col-sm-3 col-md-3 mg-bt-20 pd-lf-none hidden-xs">
        <ul class="menu-lateral">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosMenu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <li class="txt-interna abre-sub-lateral"><a <?php if ($this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['urlAmigavel'] == $this->_tpl_vars['projetoAtual']): ?>class="menu-lat-ativo"<?php endif; ?> href="<?php echo $this->_tpl_vars['URL']; ?>
projeto/<?php echo $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['titulo']; ?>
</a></li>
            <?php endfor; endif; ?>
        </ul>
    </div>
    <!-- Mobile -->
    <form action="<?php echo $this->_tpl_vars['URL']; ?>
" class="menu-lateral-mob visible-xs-block">
        <div class="form-group">
            <div class="col-sm-9 mg-lf-5-">
                <select class="form-control menuLatLink">
                    <option>Escolha um projeto</option>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['dadosMenu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <option value="<?php echo $this->_tpl_vars['URL']; ?>
projeto/<?php echo $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosMenu'][$this->_sections['i']['index']]['titulo']; ?>
</option>
                    <?php endfor; endif; ?>
                </select>
            </div>
        </div>
        <br>
    </form>
    <!-- Mobile -->
<?php endif; ?>