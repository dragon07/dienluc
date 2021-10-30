<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermission extends Component
{

    public $role,$permission;

    public function render()
    {
        // $role = null;
        if($this->role !=null){
            $this->permission = Role::findByName($this->role)->permissions;
        }
        $permissions = Permission::all();
        $roles = Role::all();
        $currentPermissions = $this->permission;

        return view('livewire.role-and-permission',compact('roles','permissions','currentPermissions'));
    }
    public function addOrRemove($permission)
    {
        # code...
        if($this->role !=null){

            $role = Role::findByName($this->role);
            if($role->permissions->where('id',$permission)->count() >0){
                // dd($role->permissions->where('id',$permission)->count());$role->revokePermissionTo($permission);
                $role->revokePermissionTo($permission);

            }else{
                $role->givePermissionTo($permission);
            }
            // $tooglePermission = Permission::findById($permission);
        }
    }
}
