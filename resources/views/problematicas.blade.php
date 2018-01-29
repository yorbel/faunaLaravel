@extends('fauna')
@section('presentacion')
	<h1>Tu puede aportar algo...</h1>
	<p class="lead">Tu puedes ayudarnos aportandos sus mejores ideas</p>
@endsection

@section('contenido')
<div class="container bg-light" align="center"  >
  <h1 class="display-2" style="margin: 2rem; padding: 1rem;">Lista de problemas</h1>
</div>

  <div class="container" align="center" style="background-color: #DDDDDD; ">
    
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

    @foreach($problemas as $p)
   
    
      <div class="card" style="width: 40rem; margin: 1rem;">
      

       <iframe class="card-img-top" width="420" height="345" src="https://www.youtube.com/embed/{{ $p->nombreArchivo }}?controls=0">
      </iframe>
    
        <div class="card-block">
          <h4 class="card-title">{{ $p->titulo }}  {{ $p->fechaPublicacion }}</h4>
          <p class="card-text">{{ $p->descripcion }}</p>
         <!--  <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Aportar Idea!</a> -->
         <button class="btn btn-primary" onclick="ventanaModalSolucion('{{ $p->id }}', '{{$p->titulo}}')" >
           Aportar Idea!
         </button>
         
          <button class="btn btn-info" onclick="aportes('{{ $p->id }}','{{$p->titulo}}')"">
           Ver soluciones aportadas!
         </button>
          @if ($p->solucionado )
            <img data-toggle="tooltip" title="Problema resuelto!"  src="img/happy.png" />
            
          @else
            <img  data-toggle="tooltip" title="Aun sin resolver!"  src="img/sad.png" />
           
          @endif
        </div>
      </div>
     
    @endforeach

    <!-- modal para sugerir solucion -->
    <div class="modal fade" id="modalSolucion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">


          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


          <div class="modal-body" style="background-image: url('img/mango.jpg');">
            <form action="http://localhost/probandoLaravel/public/Problematicas/soluciones" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="message-text" class="col-form-label">Como solucionarias este problema:</label>
                <textarea class="form-control" id="textoSolucion" name="contenidoSolucion"></textarea>
                <input type="hidden" id="idProblema" value="" name="idProblema">
              </div>
              <button type="submit" class="btn btn-primary">Enviar Idea!</button>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            
          </div>

        </div>
      </div>
    </div>




  </div>



  <!-- The Modal -->
  <div class="modal fade" id="modalVerSoluciones">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="headerVerSoluciones">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id="bodyVerSoluciones" style="background-image: url('img/mango.jpg');">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
@endsection








