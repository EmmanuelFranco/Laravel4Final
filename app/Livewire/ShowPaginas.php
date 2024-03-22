<?php

namespace App\Livewire;

use App\Models\ModelBitacoras;
use App\Models\ModelPaginas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPaginas extends Component
{
    use WithPagination;

    protected $listeners = ['showPaginas'];

    public function cambioEstado($idpagina,$dato){
        $pagina = ModelPaginas::find($idpagina);
        $pagina->estado = $dato;
        $pagina->save();

        $texto = "";

        if ($dato == 0) {
            $texto = "Se activo la pagina";
        }else{
            $texto = "Se inactivo la pagina"; 
        }

        ModelBitacoras::create([
            'descripcion_bitacora' => $texto.' '.$pagina->nombre_pagina,
            'id_usuario' => Auth::user()->id
        ]);
    }
 
    public function render()
    {
        $paginas = ModelPaginas::paginate(10);

        return view('livewire.show-paginas',['paginas' => $paginas]);
    }
}
