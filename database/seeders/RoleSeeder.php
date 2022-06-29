<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'client']);
        $permission = Permission::create(['name' => 'add listing']);
        $role->givePermissionTo($permission);

        $role = Role::create(['name' => 'staff']);
        $roleAdmin = Role::create(['name' => 'admin']);

        $permission = Permission::create(['name' => 'approve listing']);
        $permDisapprove = Permission::create(['name' => 'disapprove listing']);

        $role->givePermissionTo($permission);
        $role->givePermissionTo($permDisapprove);
        $roleAdmin->givePermissionTo($permission);
        $roleAdmin->givePermissionTo($permDisapprove);

        foreach (User::all() as $user) {
            Log::debug("Assigning roles to ". json_encode($user));

            $user->assignRole('client');

            if( ($user->email == "oumarous@gmail.com") || ($user->email == "makhtar.diouf@gmail.com")) {
                Log::debug("Assigning admin role to ". json_encode($user));

                $user->assignRole('admin');
            }
        }
    }
}
