<?php

namespace App\Livewire;

use App\Models\ModelBitacoras;
use App\Models\ModelPaginas;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditPagina extends Component
{
    public $open =false;

    public $pagina;
    public $paginaConsultada;

    public $nombre_pagina;
    public $descripcion_pagina;
    public $url_pagina;

    public function mount(){
        $this->paginaConsultada = ModelPaginas::find($this->pagina);

        $this->nombre_pagina = $this->paginaConsultada->nombre_pagina;
        $this->descripcion_pagina = $this->paginaConsultada->descripcion_pagina;
        $this->url_pagina = $this->paginaConsultada->url_pagina;

    }

    public function save(){
        $updatePagina = ModelPaginas::find($this->pagina);
        $updatePagina->nombre_pagina =  $this->nombre_pagina ;
        $updatePagina->descripcion_pagina =  $this->descripcion_pagina ;
        $updatePagina->url_pagina =  $this->url_pagina ;
        $updatePagina->save();

        ModelBitacoras::create([
            'descripcion_bitacora' => 'Se actualizo la pagina '.$updatePagina->nombre_pagina,
            'id_usuario' => Auth::user()->id
        ]);

        $this->reset(['open']);

        $this->dispatch('showPaginas');

    }

    public function render()
    {
        return view('livewire.edit-pagina');
    }
}
