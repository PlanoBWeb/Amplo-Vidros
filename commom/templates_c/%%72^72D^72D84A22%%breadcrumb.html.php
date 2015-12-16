<?php /* Smarty version 2.6.12, created on 2015-12-16 16:52:10
         compiled from ../inc/breadcrumb.html */ ?>
<article class="breadcrumb">
    <ul>
    	<li class="linha-breadcrumb">
    		<img src="<?php echo $this->_tpl_vars['URL']; ?>
commom/img/icon_breadcrumb.png" alt="Você está na <?php echo $this->_tpl_vars['breadcrumb']; ?>
" title="Você está na <?php echo $this->_tpl_vars['breadcrumb']; ?>
">
    	</li>
        <li class="linha-breadcrumb">        	
            <a href="<?php echo $this->_tpl_vars['URL']; ?>
home/">Home</a>
        </li>
        <?php if ($this->_tpl_vars['projetoAtual']): ?>
            <li class="linha-breadcrumb">
                /
            </li>
    		<li class="linha-breadcrumb">    
                <a href="<?php echo $this->_tpl_vars['URL']; ?>
projetos/">Projetos</a>    	
            </li>
            <li class="linha-breadcrumb">
                /
            </li>
            <li class="linha-breadcrumb">          
                <?php echo $this->_tpl_vars['dados'][0]['titulo']; ?>

            </li>
        <?php elseif ($this->_tpl_vars['dados'][0]['tituloCat']): ?>
            <li class="linha-breadcrumb">
                /
            </li>
            <li class="linha-breadcrumb">    
                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/">Produtos</a>      
            </li>
            <li class="linha-breadcrumb">
                /
            </li>
            <li class="linha-breadcrumb">          
                <?php echo $this->_tpl_vars['dados'][0]['tituloCat']; ?>

            </li>
        <?php elseif ($this->_tpl_vars['tituloCatProduto']): ?>
            <li class="linha-breadcrumb">
                /
            </li>
            <li class="linha-breadcrumb">    
                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/">Produtos</a>      
            </li>
            <li class="linha-breadcrumb">
                /
            </li>
            <li class="linha-breadcrumb">
                <a href="<?php echo $this->_tpl_vars['URL']; ?>
produtos/<?php echo $this->_tpl_vars['categoriaAtual']; ?>
/"><?php echo $this->_tpl_vars['tituloCatProduto']; ?>
 </a>      
            </li>
            <li class="linha-breadcrumb">
                /
            </li>
            <li class="linha-breadcrumb">          
                <?php echo $this->_tpl_vars['dados'][0]['tituloCatFilho']; ?>

            </li>
        <?php else: ?>
            <li class="linha-breadcrumb">
                /
            </li>
            <li class="linha-breadcrumb">           
                <?php echo $this->_tpl_vars['breadcrumb']; ?>

            </li>
        <?php endif; ?>
    </ul>
</article>