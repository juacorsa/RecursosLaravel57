@extends('layouts.master')

@section('contenido')
<h4>Mantenimiento de idiomas</h4>
<p class="pb-2">A continuación podrás realizar un mantenimiento completo de los idiomas registrados en la 
base de datos. <span class="float-right"><a href="{{ route('idiomas.create') }}" class="btn btn-primary">
	<i class="fa fa-plus"></i> Registrar un nuevo idioma</a></span></p>
<hr/>
@hay($idiomas)
	<div class="row">
		<div class="col-md-4">	
			<div id="filtrar"></div>
			<table id="tabla" class="table table-bordered table-hover">
				<thead>
					<tr>
						<td class="w-60 font-weight-bold nosort">Editar</td>
						<td class="font-weight-bold">Idioma</td>
					</tr>
				</thead>
				<tbody id="tbody">
					@foreach ($idiomas as $idioma)
						<tr>
							<td>
								<a class="btn btn-primary" href="{{ route('idiomas.edit', $idioma) }}">
									<i class="fa fa-bars"></i>									
								</a>						
							</td>							
							<td class="align-middle">
								{{ $idioma->nombre }}
							</td>							
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@else
	Oops!!. No hay idiomas registrados.
@endhay
@include('sweetalert::alert')

@section('scripts')
@parent    	
	<script>
		$(document).ready(function () {
			$('#tabla').DataTable({	
	       		"initComplete": function(){
	          		$("#tabla_filter").detach().appendTo('#filtrar');
	       		},
				"stateSave" : true,
				"order": [[ 1, "asc" ]],
				"pagingType": "simple",			
				"info": false,			
				"bLengthChange": false,
				"columnDefs": [
					{ "width": "10px",  "targets": 0 },
					{ "targets": 'nosort', "orderable": false }
				],
				"language": {
					"search": "",
	            	"zeroRecords": "No hay registros",
	            	"paginate": {
	     		 		"previous": "Anterior",
	     		 		"next": "Siguiente"
	    			}
	        	}
			});	

			$('.dataTables_filter input[type="search"]').
	  			attr('placeholder','Filtrar un idioma ...').
	  			css({'width':'348px','display':'inline-block'});			

		});
	</script>
@endsection






	











@endsection
