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

                <div class="control-group">
                    <label class="control-label">Nome Fantasia*:</label> 
                        <div class="controls">
                            <input type="text"  class="input-xlarge" placeholder="Barbearia" name="fantasia" required class="input-xlarge"/>
                            <a href="#ConsultaBarbearia" role="button" class="btn" data-toggle="modal"><i class="icon-search"></i></a> 
                        </div>
                </div>        
              <div class="control-group">      
                    <label class="control-label">Telefone*:</label>
                        <div class="controls">
                            <input type="text"  class="input-xlarge" placeholder="Telefone" name="telefone"  />
                        </div>
              </div>
              <div class="control-group">
                    <label class="control-label">CNPJ: </label>
                        <div class="controls">
                            <input type="text"  class="input-xlarge" placeholder="CNPJ" name="cnpj" />
                        </div>
              
              </div>          
              <div class="control-group">      
                    <label class="control-label">Situação: </label>
                        <div class="controls">
                            <select name="ativo" class="input-large m-wrap" tabindex="1">
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                            </select>
                        </div>      
        
                    </label>
              </div>  
              <div class="form-actions">
                <input class="btn" type="submit"  name="botao"   value="Cadastrar"/>

              </div>
                </form>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="ModalCadastrado" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h3 id="myModalLabel2">Informação</h3>
    </div>
    <div class="modal-body">
        <p>Cadastrado com sucesso</p>
    </div>
    <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-primary">OK</button>
    </div>
</div>