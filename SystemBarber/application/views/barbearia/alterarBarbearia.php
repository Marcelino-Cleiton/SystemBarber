<div id="main-content">
     <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
            <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Cadastro Barbearia</h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
              <div class="widget-body">
                <form action="<?php echo base_url('index.php/BarbeariaController/Alteracaobanco')?>" method="POST" class="form-horizontal">
                <input type="hidden" name="idbarbearia" value="<?php echo $idBarbearia ;?>">

                <div class="control-group">
                    <label class="control-label">Nome Fantasia*:</label> 
                    <div class="controls">
                      <input type="text" min="6" max="45" class="input-xlarge" placeholder="Barbearia" name="fantasia" value="<?php echo $Fantasia ;?>"   required class="input-xlarge"/>
                            <a href="#ConsultaBarbearia" role="button" class="btn" data-toggle="modal"><i class="icon-search"></i></a> 
                    </div>
                </div>        
              <div class="control-group">      
                    <label class="control-label">Telefone*:</label>
                    <div class="controls">
                      <input type="text" min="9" max="14" class="input-xlarge" placeholder="Telefone"  name="telefone" value="<?php echo $Telefone ;?>"  required/>
                    </div>
              </div>
              <div class="control-group">
                    <label class="control-label">CNPJ: </label>
                    <div class="controls">
                      <input type="text" max="11" class="input-xlarge" placeholder="CNPJ" name="cnpj" value="<?php echo $CNPJ ;?>" />
                    </div>
              
              </div>          
              <div class="control-group">      
                    <label class="control-label">Situação: </label>
                    <div class="controls">
                            <select name="ativo" class="input-large m-wrap" tabindex="1" value="<?php echo $Ativo?>">
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                            </select>
                    </div>      
        
                    </label>
              </div>  
              <div class="form-actions">
                <input Class="btn" type="submit" onclick="#ModalAlterado" name="botao"   value="Alterar"/>
                <input Class="btn" type="submit"  name="botao"   value="Excluir"/>

              </div>
                </form>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="ModalAlterado" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h3 id="myModalLabel2">Informação</h3>
    </div>
    <div class="modal-body">
        <p>Alterado com sucesso</p>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-primary">OK</button>
    </div>
</div>
<div id="ModalAlterado" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h3 id="myModalLabel2">Informação</h3>
    </div>
    <div class="modal-body">
        <p>Excluído com sucesso</p>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-primary">OK</button>
    </div>
</div>