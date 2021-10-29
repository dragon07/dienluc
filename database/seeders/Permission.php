<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission as Per;

class Permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Kế toán trưởng (C3)']);
        $role3 = Role::create(['name' => 'Kế toán (C4)']);
        $role4 = Role::create(['name' => 'HR']);

        $permission1 = Per::create(['name' => 'add']);
        $permission2 = Per::create(['name' => 'edit']);
        $permission3 = Per::create(['name' => 'view']);
        $permission4 = Per::create(['name' => 'delete']);
        // $permission = Per::create(['name' => 'edit']);
        $role1->givePermissionTo([$permission1,$permission2,$permission3,$permission4]);
        $role2->givePermissionTo([$permission2,$permission3,$permission4]);
        $role3->givePermissionTo([$permission1,$permission3]);
        $role4->givePermissionTo($permission3);
    }
}
