<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class ShowRoles extends Component
{
    public function render()
    {
        $roles = Role::get();

        return view('livewire.show-roles',['roles'=>$roles]);
    }
}
