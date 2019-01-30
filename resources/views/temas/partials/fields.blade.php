
<div class="form-group"> 	  
	<div class="error">			
		@if($errors->any())
			Atención, se han detectado los siguientes errores:			
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		@endif
	</div>
</div>

{!! Form::hidden('id', null) !!}

<div class="form-group">   		
	<label class="control-label">
		Tema
	</label>
	<div class="w-25">
		{!! Form::text('nombre', null, ['class' => 'form-control', 'autocomplete' => 'off', 'autofocus']) !!}  	
	</div>	
</div>

