<?php

namespace App\Livewire;

use App\Models\ModelBitacoras;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EditarUsuario extends Component
{
    public $open = false;
    public $usuario;
    public $usuarioConsultado;
    public $name;
    public $email;
    public $password;

    public function mount(){
        $this->usuarioConsultado = User::find($this->usuario); 

        $this->name =  $this->usuarioConsultado->name;
        $this->email =  $this->usuarioConsultado->email;
     
    }

    public function save(){
        $usuarioEditado =  User::find($this->usuario); 
        $usuarioEditado->name = $this->name;
        $usuarioEditado->email = $this->email;
        if (isset($this->password)) {
            $usuarioEditado->password = Hash::make($this->password);
        }

        ModelBitacoras::create([
            'descripcion_bitacora' => 'Se edito un usuario nuevo '.$usuarioEditado['name'],
            'id_usuario' => Auth::user()->id
        ]);

        $this->reset(['open']);

        $this->dispatch('actualizarUsuarios');

        $usuarioEditado->save();
    }



    public function render()
    {
        return view('livewire.editar-usuario');
    }
}
