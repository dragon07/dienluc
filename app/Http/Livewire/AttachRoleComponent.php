<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class AttachRoleComponent extends Component
{
    public function render()
    {
        $roles = Role::all();

        return view('livewire.attach-role-component',compact('roles'));
    }
}
