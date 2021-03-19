

<div id="ConsultaBarbearia" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <!--Recebe por ajax-->
		<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
           <h3 id="ConsultaBarbearia2">Consulta Barbearia</h3>
         </div>
         <div class="modal-body">
         	<div class="d-sel-filter">
                                                    
             <input type="text" id="boxFilterBarbearia" placeholder="digite o nome fantasia" class="input-xlarge" name="boxFilterBarbearia" />
             <button  type="button" id="consultarbtn"   class="btn btn-primary" value="Consultar"  >Consultar</button>
           	</div> 
            <form action="<?php echo base_url('Usuario/Cadastro')?>" method="POST">
            <select id="boxResultBarbearia" multiple="multiple" name="consultabarbearia" style="height:200px;width:100%">
              
                   

            </select> 
            <input Class="btn" type="button"  id="btneditar" name="botao"   value="Editar"/>
            </form>
         </div>
         <div class="modal-footer">
         <button data-dismiss="modal" class="btn btn-primary">Sair</button>
        </div>
 </div>

<script type="text/javascript">
            $('#botaoconsult').attr({disabled: true});
            $('#consultarbtn').click(function(){
                var consultfantasia= $('#boxFilterBarbearia').val(); 
                if (consultfantasia !=''){

                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('')?>BarbeariaController/dados_Barbearia",
                            data: {fantasia:consultfantasia},
                            datatype: 'json',
                            success: function(result){
                                var options = '';
                                var dados = JSON.parse(result);

                                if(dados!='erro404'){
                                    for(var i=0; i<dados.length; i++){
                                    options = options +'<option value="'+dados[i].idBarbearia+'">'+ dados[i].Fantasia + '</option>  ';
                                    $('#botaoconsult').attr({disabled: false});
                                    }
                                }
                                if(dados=='erro404'){
                                    options = '<option value="404">Barbearia Não encontrada</option>';
                                    $('#botaoconsult').attr({disabled: true});
                                }

                                console.log(dados);
                                $('#boxResultBarbearia').html(options);

                                    
                                
                            },
                                                                  
                            error : function (){
                                alert('Sem dados localizados');


                            }
                        });


                }
                else{
                    alert('Preencha o campo');
                }


            });
          $('#btneditar').click(function()){
            var idbarbearia = $('#boxResultBarbearia').val();
  
                  $('#fantasia').attr({
                  'value': idbarbearia,
                  });
                  $('#idbarbearia').attr({
                  'value': idbarbearia,
                  });
          }); 

 
</script>


