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
                          <label class="control-label">Nome:</label class="control-label">
                            <div class="controls">
                                <input type="text" min="6" max="45" class="input-xlarge" placeholder="Nome" name="nome" required/>
                            </div>    
                      </div>         
                      <div class="control-group"> 
                        <label class="control-label">Sobrenome: </label class="control-label">
                          <div class="controls">
                          <input type="text" min="6" max="45" class="input-xlarge" placeholder="Sobrenome" name="sobrenome" required/>
                          </div>
                      </div> 
                      <div class="control-group"> 
                        <label class="control-label">CPF: </label class="control-label"> 
                          <div class="controls">
                              <input type="text" min="11" max="14" class="input-xlarge" placeholder="CPF" name="cpf" required/>
                          </div>
                      </div>     
                      <div class="control-group"> 
                        <label class="control-label">Email: </label class="control-label">
                          <div class="controls">
                          <input type="email" min="6" max="45" class="input-xlarge" placeholder="E-mail" name="email" required/>
                        </div>
                      </div>    
                      <div class="control-group"> 
                        <label class="control-label">Senha: </label class="control-label"> 
                          <div class="controls"> 
                              <input type="password" min="6" max="45" class="input-xlarge" placeholder="Digite sua senha" name="senha" required/>
                          </div>
                        </div>   
                      <div class="control-group"> 
                        <label class="control-label">Confirma Senha: </label class="control-label"> 
                          <div class="controls">
                            <input type="password" min="6" max="45" class="input-xlarge" placeholder="Confirme sua senha" name="confirmasenha" required/>
                          </div>
                      </div>     
                      <div class="control-group">
                        <label class="control-label">Numero Telefone: </label class="control-label">
                          <div class="controls">
                            <input type="text" min="9" max="14" class="input-xlarge" placeholder="Telefone" name="telefone"  required/>
                          </div>
                      </div> 
                      <div class="control-group">
                        <label class="control-label">Cidade: </label class="control-label">
                          <div class="controls">
                            <input type="text" min="9" max="14" class="input-xlarge" placeholder="Cidade" name="cidade"  required/>
                          </div> 
                      </div>
                      <div class="control-group">
                        <label class="control-label">Bairro: </label class="control-label">
                          <div class="controls">
                              <input type="text" max="11" class="input-xlarge" placeholder="Bairro" name="bairro" required/> 
                          </div>
                      </div>         
                      <div class="control-group">
                        <label class="control-label">Rua: </label class="control-label">
                          <div class="controls">
                            <input type="text" max="11" class="input-xlarge" placeholder="Rua" name="rua" required/> 
                          </div>
                      </div>     
                      <div class="control-group">
                        <label class="control-label">Numero Endereco: </label class="control-label">
                          <div class="controls">
                              <input type="text" max="11" class="input-xlarge" placeholder="Nº" name="numeroendereco" required/> 
                          </div> 
                      </div>
                      <div class="control-group">
                        <label class="control-label">Situação: </label class="control-label">
                              <div class="controls">
                                <select class="input-large m-wrap" tabindex="1" name="ativo">

                                                    <option value="1">Ativo</option>
                                                    <option value="0">Inativo</option>
                                </select>
                              </div>
                      </div>
                  <div class="form-actions">    
                    <input type="submit" Class="btn" name="botao"   value="alterar"/>
                    <input type="submit" Class="btn" name="botao"   value="Excluir"/>
                  </div>  
            </form>
          </div>        
        </div>              
      </div>
    </div>
  </div>
</div>

    