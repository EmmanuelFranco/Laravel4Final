<?php

namespace App\Livewire;

use App\Models\ModelBitacoras;
use Livewire\Component;
use Livewire\WithPagination;

class ShowBitacoras extends Component
{
    use WithPagination;

    public function render()
    {
        $bitacoras = ModelBitacoras::paginate(10);

        return view('livewire.show-bitacoras',['bitacoras'=>$bitacoras]);
    }
}
