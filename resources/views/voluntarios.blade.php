@extends('fauna')
@section('presentacion')
	<h1><kbd>Todos podemos ayudar</kbd></h1>
	<p class="lead">Cada grano de arena es importante...</p>
@endsection

@section('contenido')
<p>
	{{ $voluntarios }}
</p>
@endsection