<?php

use Illuminate\Database\Seeder;
use App\User ;
use App\Role ;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();
        $role_adminResto  = Role::where('name', 'RestaurantAdmin')->first();
        $role_simpleUser  = Role::where('name', 'SimpleUser')->first();

        $user = new User() ;
        $user->password=bcrypt('123456');
        $user->name="safwane" ;
        $user->email="safwane.ettih@esprit.tn" ;
        $user->save();
        $user->roles()->attach($role_admin);

        $user1 = new User() ;
        $user1->password=bcrypt('123456');
        $user1->name="ghaith" ;
        $user1->email="ghaith.hammadi@esprit.tn" ;
        $user1->save() ;
        $user1->roles()->attach($role_adminResto) ;

        $user2 = new User() ;
        $user2->password=bcrypt('123456');
        $user2->name="chedli" ;
        $user2->email="chedli.lakhdar@esprit.tn" ;
        $user2->save() ;
        $user2->roles()->attach($role_simpleUser) ;


    }
}
