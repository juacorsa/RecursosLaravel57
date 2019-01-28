@extends('layouts.master')

@section('contenido')		
<h4>Registrar un nuevo idioma</h4>	
<p class="pb-2">A continuación podrás registrar un nuevo idioma. Recuerda que no está permitido duplicar idiomas.</p>
<hr/>
<div>
	{!! Form::open(['class' => 'form-horizontal', 'route' => 'idiomas.store', 'method' => 'POST']) !!}
		@include('idiomas.partials.fields')		
		<div class="form-group">
	    	<div>				
				<button class="btn btn-primary" type="submit">
					<i class="fa fa-plus"></i> Registrar idioma</button>					
	        </div>
        </div>
	{!! Form:: close() !!}
</div>
@include('sweetalert::alert')
@endsection
