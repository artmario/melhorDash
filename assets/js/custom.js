

//http://melhorpreco.pe.hu/index.php/Dashboard/novaoferta
var botao = function () {
  var url = "http://melhorpreco.pe.hu/index.php/Dashboard/novaoferta";
    
    $("#novaOfertaModal").empty();
    $.get(url,function (data,status){
        $("#novaOfertaModal").empty();
        $("#novaOfertaModal").append(data);
        $("#mAddOffer").modal();
    });
};



function g_prdtcs () {
	$.ajax({url: "http://melhorpreco.pe.hu/index.php/Dashboard/allProducts", method : "get"}).done (function(data,status){
		$("#tabelaProdutos").empty();

		var i = 0;
		alert("ParseJson: "+data);
		var a = "'";

	});
}

function table_produtos() {

	$.get("http://melhorpreco.pe.hu/index.php/Dashboard/table_produto",function(data,status){
		$("#dash-content-row").empty();
		$("#dash-content-row").append(data);
		//g_prdtcs ();
	});
        
    $.get("http://melhorpreco.pe.hu/index.php/Dashboard/allProducts",function(data,status){
         var json = JSON.parse(data);
        $("#tabelaProdutos").DataTable({
            data:json,
            columns:[{
                data:'DESCRICAO'},
                {data:'PRECO'}]
            });
            
            $("#novaOferta").click(botao);
        });
        
        
        
            var table = $('#tabelaProdutos').DataTable();
                
                //alert("inserindo funcao;;");
            $("#tabelaProdutos tbody").on( "click", "tr", function () {
//                if ( $(this).hasClass('selected') ) {
//                    $(this).removeClass('selected');
//                }
//                else {
//                    table.$('tr.selected').removeClass('selected');
//                    $(this).addClass('selected');
//                }
                console.log("clicou na linha");
                alert("wo");
            } );
 
            $('#button').click( function () {
                table.row('.selected').remove().draw( false );
            });
            
        

}

function fecharTabelaProdutos(){
    $("#table_Produto").remove();
}

function inserirItensTela(){
	$.get("http://melhorpreco.pe.hu/index.php/Dashboard/inserirItensTela",function (data,status){
		$("#AddListaItens").empty();
		$("#AddListaItens").append(data);

		$("#modalUploadLista").modal();
	});
}



//vou colocar uma variavel aqui pra eu usar em outra funcao.
var ListaUpada = {};
function sobeLista(){
$("#formSubirLista").submit(function(e) {

    var url = "http://melhorpreco.pe.hu/index.php/Dashboard/sobeListaProdutos"; // the script where you handle the form input.
    var dados = new FormData(this);
    var caminho =  $("#arquivo").val();
   	//alert (jQuery('#formSubirLista')[0].files);
   	//dados.append('file',caminho);
   	//alert (caminho);
    $.ajax({
           type: 'POST',
           url: url,
            contentType: false,
    		processData: false,
           cache:false,
           data: dados, // serializes the form's elements.
           
           success: function(data)
           {
               ListaUpada = data;
               var json = JSON.parse(data); // show response from the php script.
               //ListaUpada = json;
              // var v_ponto;
              
//               for (index in json) {
//       
//                   //json[index].preco = json[index].preco.replace(",",".");
//                   $("#tabelaInsercaoItens").append("<tr><td>"+json[index].produto+"</td><td> R$"+json[index].preco+"</tr>");
////                   console.log (json[index].preco);;
////                   console.log (json[index].produto);
//               }
//               
                $("#tabelaInsercao").DataTable({
                    data:json,
                    columns:[{
                            data:'DESCRICAO'},
                        {data:'PRECO'}]
                });
//               console.log (json);
               $("#savebtnPlace").append('<button class ="btn btn-success center-block" onclick="javascript:salvarItens()">Salvar</button>');
                //               alert(json);
           }
         });

    // e.preventDefault(); // avoid to execute the actual submit of the form.
});
}


function salvarItens(){
    
   var url = "http://melhorpreco.pe.hu/index.php/Dashboard/confirmaListaProdutos";
   
   
    $.ajax({
           type: 'POST',
           url: url,
           contentType: "application/json",
           processData: false,
           cache:false,
           data: ListaUpada, // serializes the form's elements.
           
           success: function(data)
           {
               console.log(data);
               table_produtos();
            }
//               console.log (json);
               
//               alert(json);
           });  
}

