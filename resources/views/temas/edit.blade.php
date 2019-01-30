@extends('layouts.master')

@section('contenido')		
<h4>Actualizar tema</h4>	
<p class="pb-2">A continuación podrás actualizar el tema seleccionado. Recuerda que no está permitido duplicar temas.</p>
<hr/>
<div>
	{!! Form::model($tema, ['class' => 'form-horizontal', 'route' => 'temas.update', 'method' => 'PUT']) !!}
		@include('temas.partials.fields')		
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
