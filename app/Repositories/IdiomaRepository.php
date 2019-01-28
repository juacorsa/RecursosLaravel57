<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Idioma;

class IdiomaRepository 
{
	private $modelo;

	public function __construct(Idioma $modelo)
	{
		$this->modelo = $modelo;
	}

	public function obtenerTodos()
	{
		return $this->modelo->orderBy('nombre','asc')->get();
	}

	public function registrar(array $datos)
	{
        return $this->modelo->create($datos);
	}

	public function actualizar(array $datos)
	{		
		return $this->modelo->find($datos['id'])->update($datos);
	}

	public function obtener($id)
	{
		return $this->modelo->find($id);
	}
	
}