@extends('layouts.master')

@section('contenido')		
<h4>Actualizar idioma</h4>	
<p class="pb-2">A continuación podrás actualizar el idioma seleccionado. Recuerda que no está permitido duplicar idiomas.</p>
<hr/>
<div>
	{!! Form::model($idioma, ['class' => 'form-horizontal', 'route' => 'idiomas.update', 'method' => 'PUT']) !!}
		@include('idiomas.partials.fields')		
		<div class="form-group">
	    	<div>				
				<button class="btn btn-primary" type="submit">
					<i class="fas fa-check"></i> Guardar cambios</button>	
				<a class="btn btn-danger" href="javascript:history.back()">
					<i class="fas fa-times"></i> Cancelar</a>			
	        </div>
        </div>
	{!! Form:: close() !!}
</div>
@endsection
