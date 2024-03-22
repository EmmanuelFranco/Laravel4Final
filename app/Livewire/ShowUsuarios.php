<?php

namespace App\Livewire;

use App\Models\ModelBitacoras;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowUsuarios extends Component
{
     
    protected $listeners = ['actualizarUsuarios'];

    public function eliminarUsuario($usuario){
        $usuario = User::find($usuario);
        $usuario->delete();

        ModelBitacoras::create([
            'descripcion_bitacora' => 'Se elimino un usuario nuevo '.$usuario['name'],
            'id_usuario' => Auth::user()->id
        ]);
   

    }

    public function render()
    {
        
        $usuarios = User::paginate(10);

        return view('livewire.show-usuarios',['usuarios'=> $usuarios]);
    }
}
