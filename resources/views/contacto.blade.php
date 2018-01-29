@extends('fauna')
@section('presentacion')
	<h1>Escribenos</h1>
	<p class="lead">Te contactaremos lo mas pronto posible...</p>
@endsection
@section('contenido')

	<div class="container">

<div style=" margin: 2rem;">

	<form>

		<div class="form-group">
	    <label for="nam">Nombre</label>
	    <input type="text" class="form-control" id="nam" aria-describedby="emailHelp" placeholder="ingresa tu nombre">
	    
	  </div>
	  
	<div class="form-group">
	    <label for="tlf">Teléfono</label>
	    <input type="tel" class="form-control" id="tlf" aria-describedby="emailHelp" placeholder="ingresa tu teléfono">
	    <small id="emailHelp" class="form-text text-muted">Tranquilo...nadie tendra tu telefono.</small>
	  </div>

	  <div class="form-group">
	    <label for="exampleInputEmail1">Correo</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ingresa tu correo">
	    <small id="emailHelp" class="form-text text-muted">Tranquilo...nadie tendra tu correo.</small>
	  </div>
	  
	  
	  
	  
	  <div class="form-group">
	    <label for="areaTexto">Asunto</label>
	    <textarea class="form-control" id="areaTexto" rows="3"></textarea>
	  </div>
	 
	  
	  
	  <button type="button" class="btn btn-primary">Enviar</button>
	</form>
</div>


	</div>

@endsection