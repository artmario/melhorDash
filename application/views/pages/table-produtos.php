
<div class="panel panel-default" id="table_Produto">
	<div class="pull-right">
			<div>
				<button onclick="fecharTabelaProdutos()" type="button" class="btn btn-danger" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
		</div>
	<div class="panel-heading">
		<i class="fa fa-bar-chart-o fa-fw"></i>
		Produtos
	</div>
<?php ?>
<!-- /.panel-heading -->
<div class="panel-body">
	<div class="row">
		<div class="col-lg-0">
		   

			<nav id="navbar" class="navbar navbar-default navbar-static">
			


					  

					
				<div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-primary" id="novaOferta">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <img src="/images/offericon.png" style="width:70px;height: 70px;">
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">26</div>
                                                        <div>Ofertas do dia!!</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                                <div class="panel-footer">
                                                    <span class="pull-left">Indique a oferta</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
				</div>
			</nav>  


                    <div class="table-responsive">
                        
			<table class="table table-bordered table-hover table-striped" id ="tabelaProdutos">
			<thead>
			<tr>
                            <th>
                                Descrição
                            </th>
                            <th>
                                Preço
                            </th>	
			</tr>
			</thead>
			<tbody id="tabelaProdutosBody">
			<?php 
			//$lista_Produto = json_decode($produtos,true);
                        //print_r($lista_Produto);
//			 foreach ($lista_Produto as $item ): 
//			//print_r($item);
//
//				
//					// $lista_Produto = $Produtos;
//					 // 	foreach ($lista_Produto as $chave => $cong):
//					     echo '<tr><td>';
//					         print_r($item['id']);
//					     echo '</td>';
//					     echo '<td>';
//					         print_r($item['descricao']);
//					     echo '</td>';
//					     echo '<td>';
//					         print_r($item['preco']);
//					     echo '</td>';
//                                                 
//                                             echo '<td>';
//                                             
//                                             echo ' <button type="button" action="javascript:delProdutoById('.$item['id'].')" class="btn btn-link"><img src="http://findicons.com/files/icons/2015/24x24_free_application/24/delete.png"></button>';
//                                             
//                                             echo ' </td>';
//					     echo '</tr>';
//					     // echo '<td>';
//
//					//         print_r ($cong['fone']);
//					//     echo '<td>';
//					//         print_r($cong['instituicao']);
//					//     echo '</td>';
//					//     echo '<td>';
//					//         print_r($cong['cidade_uf']);
//						
//					//     echo '</td></tr>';
//					 endforeach;
			?>
			</tbody>
		</table>
		</div>
	<!-- /.table-responsive -->
	</div>
	<!-- /.col-lg-4 (nested) -->
		<div class="col-lg-8">
			<div id="morris-bar-chart"></div>
		</div>
	<!-- /.col-lg-8 (nested) -->
	</div>
</div>
</div>