<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\IdiomaRepository;
use App\Http\Requests\IdiomaRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Messages\Mensaje;

class IdiomaController extends Controller
{
	private $repo;

	public function __construct(IdiomaRepository $repo)
	{
		$this->repo = $repo;
	}

    public function index()    
    {        
        $idiomas = $this->repo->obtenerTodos();         
    	return view('idiomas.index', compact('idiomas'));
    }

    public function create()    
    {        
    	return view('idiomas.create');
    }

    public function store(IdiomaRequest $request)
    {          
        $datos = $request->only(['nombre']);                
	    try 
	    {            
	        $this->repo->registrar($datos);                                      
            toast(Mensaje::IDIOMA_REGISTRADO_CON_EXITO,'success','top-right');	        
	    }
	    catch(Exception $e)
	    {   
            alert()->error(Mensaje::OOPS, Mensaje::IMPOSIBLE_REGISTRAR_IDIOMA);	    	
	    }   

        return back();     
    }

    public function edit($id)
    {
        $idioma = $this->repo->obtener($id);
        
        if (!$idioma) 
        {
            return back();            
        }

        return view('idiomas.edit', compact('idioma'));
    }

    public function update(IdiomaRequest $request)
    {
        $datos = $request->only(['nombre', 'id']);                       
        try
        {
            $this->repo->actualizar($datos);
            toast(Mensaje::IDIOMA_ACTUALIZADO_CON_EXITO,'success','top-right');
            return redirect()->route('idiomas.index');  
        }
        catch(Exception $e)
        {
            alert()->error(Mensaje::OOPS, Mensaje::IMPOSIBLE_ACTUALIZAR_IDIOMA);
            return back();
        }                                                   
    }    
}
