<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * List of permissions to add initially
     *
     * @var array
     */
    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
       }

       $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@laravel.com',
            'password' => Hash::make('password')
       ]);

       $role = Role::create(['name' => 'Admin']);

       $permissions = Permission::pluck('id','id')->all();

       $role->syncPermissions($permissions);

       $user->assignRole([$role->id]);
    }
}
