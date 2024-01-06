<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    public function run()
    {
        //Define the permissions
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'create-booking-requests']);
        Permission::create(['name' => 'edit-booking-requests']);
        Permission::create(['name' => 'delete-booking-requests']);
        Permission::create(['name' => 'view-booking-requests']);

        // Define the roles
        $adminRole = Role::create(['name' => 'Admin']);
        $customerRole = Role::create(['name' => 'Customer']);

        // Assign permissions to roles
        $adminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'create-booking-requests',
            'edit-booking-requests',
            'delete-booking-requests',
            'view-booking-requests'
        ]);

        $customerRole->givePermissionTo([
            'create-booking-requests',
            'edit-booking-requests',
            'view-booking-requests'
        ]);
    }
}
