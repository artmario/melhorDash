<div id="mAddOffer" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="myModalLabel">Nova Oferta!</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="formNovaOferta">
                    <div class="form-inline">
                        <label for="m-form-nome">Nome</label>
                        <input type="text" class="form-control" id="m-form-nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="m-form-descricao">Desconto em % </label>
                        <input name="desconto" value="0" type="number">
                    </div>
				<div class="form-inline">
                                    <label for="m-form-dt-inicio">Data de Inicio</label>
                                        <br>
                                    <div class="input-group input-daterange input-group-xs">
                                        <input id="m-form-dt-inicio" type="text" class="form-control" value="2012-04-05" name="data_inicio">
                                            <span class="input-group-addon">até</span>
                                            <input id="m-form-dt-fim" type="text" class="form-control" value="2012-04-19" name="data_fim">
                                    </div>
					
			  		<script type="text/javascript">
			  			$("#m-form-dt-inicio").datepicker({
			  			    format: "dd-mm-yyyy",
			  			    autoclose: true,
			  			    todayBtn: true,
			  			    startDate: "01-06-2017",
			  			    language: 'pt-BR',
			  			    
			  			    todayHighlight: true,
			  			    templates : {
			  					leftArrow: '<i class="fa fa-long-arrow-left"></i>',
			  					rightArrow: '<i class="fa fa-long-arrow-right"></i>'
			  				}
			  			});
						
						$("#m-form-dt-fim").datepicker({
							format: "dd-mm-yyyy",
							autoclose: true,
							todayBtn: true,
							startDate: "01-06-2017",
							language: 'pt-BR',
							
							todayHighlight: true,
							templates : {
								leftArrow: '<i class="fa fa-long-arrow-left"></i>',
								rightArrow: '<i class="fa fa-long-arrow-right"></i>'
							}
						});
						
						$("#m-form-dt-inicio").datepicker().on("changeDate", function(e){
							$("#m-form-dt-fim").datepicker("setStartDate", e.date);
						});
						
						$("#m-form-dt-fim").datepicker().on("changeDate", function (e){
							$("#m-form-dt-inicio").datepicker("setEndDate",e.date);
						});
						
			  		</script>
					</div>
					
				<div class="modal-footer">

					<button type="submit" class="btn btn-primary" >Adicionar atividade</button>
		
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
				<input type="hidden" name="id_evento" value="">
                            </form>
			
			
			</div>
			
		</div>
	</div>
</div>