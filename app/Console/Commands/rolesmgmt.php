<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class rolesmgmt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles:management';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create roles and permissions';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $role = Role::create(['name' => 'client']);
        $permViewPayment = Permission::create(['name' => 'can manage']);
        $permViewPayment = Permission::create(['name' => 'view payments']);

        /*
       foreach (User::all() as $user) {
        Log::debug("Assigning roles to ". json_encode($user));

        $user->assignRole('client');

        if( ($user->email == "oumarous@gmail.com") || ($user->email == "makhtar.diouf@gmail.com")) {
            Log::debug("Assigning admin role to ". json_encode($user));

            $user->assignRole('admin');
        }
     }*/
    }
}
