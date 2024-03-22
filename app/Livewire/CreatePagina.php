<?php

namespace App\Livewire;

use App\Models\ModelBitacoras;
use App\Models\ModelPaginas;
use Illuminate\Support\Facades\Auth;
use Livewire\Component; 

class CreatePagina extends Component
{ 
    public $open = false;

    public $nombre_pagina;
    public $descripcion_pagina;
    public $url_pagina;

    protected $rules = [
        'nombre_pagina' => 'required',
        'url_pagina' => 'required',
    ];

    public function save(){

     $this->validate();

        $pagina = ModelPaginas::create([
            'nombre_pagina' => $this->nombre_pagina,
            'descripcion_pagina' => $this->descripcion_pagina,
            'url_pagina' => $this->url_pagina,
            'estado' => 0
        ]);

        ModelBitacoras::create([
            'descripcion_bitacora' => 'Se creo una pagina '.$pagina->nombre_pagina,
            'id_usuario' => Auth::user()->id
        ]);

        $this->reset(['nombre_pagina','descripcion_pagina','url_pagina','open']);
        $this->dispatch('showPaginas');
    }

    public function render()
    {
        return view('livewire.create-pagina');
    }
}
