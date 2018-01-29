var idProblema;
var problema;
function ventanaModalSolucion(id, proble){

	idProblema=id;
	problema=proble;
	$('#modalSolucion').modal('show');
	

} 
$('#modalSolucion').on('show.bs.modal', function (event) {
	  
	  var modal = $(this);
	  modal.find('.modal-title').text(problema);
	 $('#idProblema').val(idProblema);
	 
})
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

function aportes(id,proble){

	
	
	
        var token =$('meta[name="csrf-token"]').attr('content');
        
        $.ajax({

        	url: 'http://localhost/probandoLaravel/public/Problematicas/Ideas',
        	type: 'get',
        	dataType: 'json',
        	header: {
        		'X-CSRF-TOKEN': token
        	},
        	data : { 

        		'id' : id
        	},
        	success: function (response) {

                var cadena;
                $('#headerVerSoluciones').html(proble);

//                 <ul class="list-group">
//   <li class="list-group-item">Dapibus ac facilisis in</li>
//   <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
//   <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
//   <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
//   <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
// </ul>

                cadena='<ul class="list-group">';
                        
                for(i in response)
                {
                    cadena+='<li class="list-group-item">' + response[i].fechaPropuesta + " " + response[i].descripcion; + "</li>";
                    
                }
                cadena+="</ul>";

                $('#bodyVerSoluciones').html(cadena);
        		$('#modalVerSoluciones').modal('show');

            },
            error: function () {

            }

        });

} 