<?php

use App\Country;
use App\Covid19;
use App\Permission;
use App\Role;
use App\User;
use App\State;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Test assumes Super Admin should always be id 1
        $role =  Role::create(["role"=> 'Super Admin']);

        //Create permissions for Super admin role
        foreach (helper::instance()->appOperations() as $operation){
            Permission::create([
                "role_id" => $role->id,
                "permission" => $operation
            ]);
        }
        Role::create(["role"=> 'User']);


        factory(App\User::class)->states('admin')->create();
        factory(App\User::class,5)->create()->each(function ($user){
            $user->createToken('authToken')->plainTextToken;
        });

        factory(App\Country::class, 10)->create()->each(function ($country){
            factory(App\State::class,5)->create([
                "country_id" => $country->id
            ]);
            factory(App\President::class,5)->create([
                "country_id" => $country->id
            ]);
            factory(App\President::class)->create([
                "country_id" => $country->id,
                "appointment_end_date" => null
            ]);
            factory(App\Covid19::class)->create([
                "country_id" => $country->id
            ]);
        });






    }
}
