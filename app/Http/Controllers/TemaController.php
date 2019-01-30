<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TemaRepository;
use App\Http\Requests\TemaRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Messages\Mensaje;

class TemaController extends Controller
{
	private $repo;

	public function __construct(TemaRepository $repo)
	{
		$this->repo = $repo;
	}

    public function index()    
    {        
        $temas = $this->repo->obtenerTodos();         
    	return view('temas.index', compact('temas'));
    }

    public function create()    
    {        
    	return view('temas.create');
    }

    public function store(TemaRequest $request)
    {          
        $datos = $request->only(['nombre']);                
	    try 
	    {            
	        $this->repo->registrar($datos);                                      
            toast(Mensaje::TEMA_REGISTRADO_CON_EXITO,'success','top-right');	        
	    }
	    catch(Exception $e)
	    {   
            alert()->error(Mensaje::OOPS, Mensaje::IMPOSIBLE_REGISTRAR_TEMA);	    	
	    }   

        return back();     
    }

    public function edit($id)
    {
        $tema = $this->repo->obtener($id);
        
        if (!$tema) 
        {
            return back();            
        }

        return view('temas.edit', compact('tema'));
    }

    public function update(TemaRequest $request)
    {
        $datos = $request->only(['nombre', 'id']);                       
        try
        {
            $this->repo->actualizar($datos);
            toast(Mensaje::TEMA_ACTUALIZADO_CON_EXITO,'success','top-right');
            return redirect()->route('temas.index');  
        }
        catch(Exception $e)
        {
            alert()->error(Mensaje::OOPS, Mensaje::IMPOSIBLE_ACTUALIZAR_TEMA);
            return back();
        }                                                   
    }    
    
}
