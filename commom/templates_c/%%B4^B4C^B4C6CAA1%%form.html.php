<?php /* Smarty version 2.6.12, created on 2015-12-08 17:16:43
         compiled from ../inc/form.html */ ?>
<form class="form-horizontal" name="contato" method="post" action="envia.php">
    <input type="hidden" name="pagina" value="<?php echo $this->_tpl_vars['pagina']; ?>
">
    <div class="form-group">
        <label for="inputNome" class="col-sm-2 control-label">Nome*</label>
        <div class="col-sm-10">
            <input type="text" name="nome" class="form-control" id="inputNome">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">e-mail*</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail3">
        </div>
    </div>
    <div class="form-group">
        <label for="inputTel" class="col-sm-2 control-label">Telefone</label>
        <div class="col-sm-10">
            <input type="tel" name="telefone" class="form-control" id="inputTel">
        </div>
    </div>                            
    <div class="form-group">
        <label for="inputMsg" class="col-sm-2 control-label">Mensagem*</label>
        <div class="col-sm-10">
            <textarea name="msg" class="form-control" id="inputMsg"></textarea>
        </div>
    </div>                          
    <div class="col-xs-12 col-sm-12 col-md-12 pd-none">
        <div class="col-xs-12 col-sm-9 col-md-9 pd-none mg-lf-10-">
            <div class="form-group">
                <label for="inputOnde" class="col-sm-3 control-label">Onde nos encontrou?</label>
                <div class="col-sm-9 <?php if ($this->_tpl_vars['pagina'] == orcamentos || $this->_tpl_vars['pagina'] == fale - conosco): ?>pd-lt-10<?php else: ?>pd-lt-5<?php endif; ?>">
                    <select class="form-control" id="inputOnde" name="onde">
                        <option value="Google">Google</option>
                        <option value="Indicação">Indicação</option>
                        <option value="E-mail MKT">E-mail MKT</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="form-group pull-right">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default-padrao" onclick="return enviardados();">enviar!</button>
                </div>
            </div>
        </div>
    </div>
</form>