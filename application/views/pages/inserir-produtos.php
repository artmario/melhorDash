<div id="modalUploadLista" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insira sua lista de produtos externo</h4>
      </div>
      <div class="modal-body">
          <div>
              <img src="/images/exemplo-up-csv.png" class="img-responsive center-block">
          </div>
      <form class="form-inline" id="formSubirLista" action="javascript:sobeLista()  " method="POST"  enctype="multipart/form-data">
        <div class="form-group">
          <label for="file">Seu arquivo de produtos do excel salvo em formato CSV</label>
          <input type="file" class="form-control" name="arquivo" id="arquivo">
          <input type="submit" class="btn btn-success" data-dismiss="modal'" value="Enviar">
        </div>
          
          <span id="savebtnPlace" class=""></span>
        </form>


        <table id="tabelaInsercao" class="table table-bordered table-hover table-striped" >
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
          <tbody id="tabelaInsercaoItens">
            
          </tbody>

        
        </table>


      </div>
      <div class="modal-footer">
          
        
        
      </div>
      <!-- </form> -->
    </div>

  </div>
</div>