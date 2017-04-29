<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*=================================
        =            Web USERS            =
        =================================*/

        $guest = new Role();
        $guest->name         = 'guest';
        $guest->display_name = 'Guest'; // optional
        $guest->description  = 'User visiting the site'; // optional
        $guest->save();

        $user = new Role();
        $user->name         = 'user';
        $user->display_name = 'User'; // optional
        $user->description  = 'Registred user'; // optional
        $user->save();
        /*----------  User Permissions  ----------*/
        $perm = Permission::whereIn('name', ['create-coach', 'create-userAd'])->get();
        foreach ($perm as $per) {
            $user->attachPermission($per);
        }

        $coach = new Role();
        $coach->name         = 'coach';
        $coach->display_name = 'Coach'; // optional
        $coach->description  = 'Registred user that is also a coach'; // optional
        $coach->save();
        /*----------  Coach Permissions  ----------*/
        $perm = Permission::whereIn('name', ['create-team', 'create-coachAd'])->get();
        foreach ($perm as $per) {
            $coach->attachPermission($per);
        }

    	/*=====================================
        =         DashBoard USERS            =
        =====================================*/
        
        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->description  = 'User with universal access'; // optional
        $admin->save();
        /*----------  Admin Permissions  ----------*/
        $perm = Permission::whereIn('name', ['edit-teams', 'control-users', 'control-news', 'control-invoices'])->get();
        foreach ($perm as $per) {
            $admin->attachPermission($per);
        }

        $editor = new Role();
        $editor->name         = 'editor';
        $editor->display_name = 'Editor'; // optional
        $editor->description  = 'User can edit newss'; // optional
        $editor->save();
        /*----------  Editor Permissions  ----------*/
        $perm = Permission::whereIn('name', ['control-news', 'control-invoices'])->get();
        foreach ($perm as $per) {
            $editor->attachPermission($per);
        }

    }
}
