<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Blogger']);
        $permission = Permission::create(['name' => 'admin.home','description'=>'ver el dashboard'])->syncRoles([$role1, $role2]);

        $permission = Permission::create(['name' => 'admin.users.index','description'=>'ver listado de usuarios'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.users.edit','description'=>'asignar un rol'])->syncRoles([$role1]);
        // $permission = Permission::create(['name' => 'admin.users.update','description'=>''])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.categories.index','description'=>'ver listado de categorias'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.categories.create','description'=>'crear categorias'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.categories.edit','description'=>'editar categorias'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.categories.destroy','description'=>'eliminar categorias'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.tags.index','description'=>'ver listado de etiquetas'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.tags.create','description'=>'crear etiquetas'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.tags.edit','description'=>'editar etiquetas'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.tags.destroy','description'=>'eliminar etiquetas'])->syncRoles([$role1]);
        
        $permission = Permission::create(['name' => 'admin.posts.index','description'=>'ver listado de post'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.posts.create','description'=>'crear post'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.posts.edit','description'=>'editar post'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.posts.destroy','description'=>'eliminar post'])->syncRoles([$role1, $role2]);

        $permission = Permission::create(['name' => 'admin.roles.index','description'=>'ver listado de rol'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.roles.create','description'=>'crear rol'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.roles.edit','description'=>'editar rol'])->syncRoles([$role1 ]);
        $permission = Permission::create(['name' => 'admin.roles.destroy','description'=>'eliminar rol'])->syncRoles([$role1 ]);


    }
}
