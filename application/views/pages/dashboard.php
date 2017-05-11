<?php

 ?>

<div id="wrapper">

   <?php include('menu-dash.php');?>
       

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php print_r($empresa['RAZAO']); ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
       






<div class="row">


            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="/images/csv.png" style="width:70px;height: 70px;"/>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"></div>
                                <div>Importe sua lista do Excel</div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:inserirItensTela()" id="cadastrar-evento-icon">
                        <div class="panel-footer">
                            <span class="pull-left">Adicione sua lista de itens</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="javascript:table_produtos()" >
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                 <img src="/images/box-product.png" style="width:70px;height: 70px;"/>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $numero_produtos; ?></div>
                                <div>Produtos</div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="panel-footer">
                            <span class="pull-left">Lista-los...</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                   
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="/images/resultados.png" class="icon-bar" style="width:70px;height: 70px;">
                            </div>
                            <div class="col-xs-9 text-right">
                                
                                <div>Acompanhe as pesquisas</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" id="">
                        <div class="panel-footer">
                            <span class="pull-left">Quero ve-los!</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>













        <!-- /.row -->
        <div class="row">
                <!-- /.panel -->

                <div id="dash-content-row">
                    
                    <!-- /.panel-body -->
                </div>







               
                <!-- /.panel -->
               
                    <!-- /.panel-body -->
                    <div class="panel-footer">
                       
                        
                        
                        
                    </div>
                    <!-- /.panel-footer -->
            </div>
                <!-- /.panel .chat-panel -->
        </div>
            <!-- /.col-lg-4 -->
    </div>
        <!-- /.row -->

<div id="AddListaItens"></div>
<div id="novaOfertaModal"></div>
</div>
    <!-- /#page-wrapper -->


<!-- /#wrapper -->
