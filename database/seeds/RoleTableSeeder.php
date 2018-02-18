<?php

use Illuminate\Database\Seeder;
use App\Role ;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_employee = new Role();
        $role_employee->name = 'Admin';
        $role_employee->description = 'an Admin user';
        $role_employee->save();

        $role_manager = new Role();
        $role_manager->name = 'RestaurantAdmin';
        $role_manager->description = 'an RestaurantAdmin user';
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = 'SimpleUser';
        $role_manager->description = 'a SimpleUser user';
        $role_manager->save();
    }
}
