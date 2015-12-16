<?php /* Smarty version 2.6.12, created on 2015-12-15 17:01:05
         compiled from ../inc/menu-lateral.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '../inc/menu-lateral.html', 5, false),)), $this); ?>
<?php if ($this->_tpl_vars['pagina'] == produtos || $this->_tpl_vars['pagina'] == produto): ?>
    <div class="col-xs-12 col-sm-3 col-md-3 mg-bt-20 pd-lf-none hidden-xs">
        <ul class="menu-lateral">
            <ul>
            <?php $this->assign('nmTipo', ((is_array($_tmp=@$this->_tpl_vars['nmTipo'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, ""))); ?>
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
                </li>
                <?php if ($this->_tpl_vars['nmTipo'] <> $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['titulo'][0] && $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['idPai'][0] == 0): ?>
                    </ul> 
                    <li class="txt-interna abre-sub-lateral">
                    <?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['titulo']; ?>

                    <img class="pull-right" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta.png" alt="Abrir menu" title="Abrir menu"> 
                    <ul class="subMenu-lateral">
                <?php endif; ?>
                <?php if ($this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['idPai'][0] <> 0): ?>
                    <li class="txt-interna"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/<?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['urlAmigavel']; ?>
"><?php echo $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['titulo']; ?>
</a></li>
                <?php endif; ?>
                <?php $this->assign('nmTipo', $this->_tpl_vars['dadosCatMenu'][$this->_sections['i']['index']]['titulo']); ?>
            <?php endfor; endif; ?>
            <!--
            <li class="txt-interna abre-sub-lateral">espelhos <img class="pull-right" src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/seta.png" alt="Abrir menu" title="Abrir menu">
                <ul class="subMenu-lateral">
                    <li class="txt-interna"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto">espelhos Interno</a></li>
                    <li class="txt-interna"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto">espelhos Interno</a></li>
                    <li class="txt-interna"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto">espelhos Interno</a></li>
                    <li class="txt-interna txt-ambiente">AMBIENTE</li>
                    <li class="txt-interna"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto">espelhos Interno</a></li>
                    <li class="txt-interna"><a href="<?php echo $this->_tpl_vars['URL']; ?>
produto">espelhos Interno</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
    <!-- Mobile -->
    <form action="<?php echo $this->_tpl_vars['URL']; ?>
" class="menu-lateral-mob visible-xs-block">
        <div class="form-group">
            <div class="col-sm-9 mg-lf-5-">
                <select class="form-control" id="inputOnde" name="onde">
                    <option>Escolha um produto</option>
                    <option>produto</option>
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
                <li class="txt-interna abre-sub-lateral"><a href="<?php echo $this->_tpl_vars['URL']; ?>
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
                <select class="form-control" id="inputOnde" name="onde">
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