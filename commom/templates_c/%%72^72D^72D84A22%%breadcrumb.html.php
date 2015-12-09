<?php /* Smarty version 2.6.12, created on 2015-12-03 17:29:50
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
home">Home</a>
        </li>
        <li class="linha-breadcrumb">
        	/
		</li>
		<li class="linha-breadcrumb">        	
            <?php echo $this->_tpl_vars['breadcrumb']; ?>

        </li>
		<!-- <li class="linha-breadcrumb">        	
            <a href="<?php echo $this->_tpl_vars['URL'];  echo $this->_tpl_vars['pagina']; ?>
"><?php echo $this->_tpl_vars['breadcrumb']; ?>
</a>
        </li> -->
    </ul>
</article>