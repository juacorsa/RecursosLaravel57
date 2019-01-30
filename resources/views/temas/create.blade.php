@extends('layouts.master')

@section('contenido')		
<h4>Registrar un nuevo tema</h4>	
<p class="pb-2">A continuación podrás registrar un nuevo tema. Recuerda que no está permitido duplicar temas.</p>
<hr/>
<div>
	{!! Form::open(['class' => 'form-horizontal', 'route' => 'temas.store', 'method' => 'POST']) !!}
		@include('temas.partials.fields')		
		<div class="form-group">
	    	<div>				
				<button class="btn btn-primary" type="submit">
					<i class="fa fa-plus"></i> Registrar tema</button>					
	        </div>
        </div>
	{!! Form:: close() !!}
</div>
@include('sweetalert::alert')
@endsection
