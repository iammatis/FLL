<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		$admin = new User();
        $admin->email         = 'test@test.com';
        $admin->full_name = 'Test Test'; // optional
        $admin->password  = bcrypt('test'); // optional
        $admin->save();
        /*----------  Admin Roles  ----------*/
        $role = Role::where('name', 'admin')->first();
        $admin->attachRole($role);

        $editor = new User();
        $editor->email         = 'editor@test.com';
        $editor->full_name = 'Editor Test'; // optional
        $editor->password  = bcrypt('test'); // optional
        $editor->save();
        /*----------  Editor Roles  ----------*/
        $role = Role::where('name', 'editor')->first();
        $editor->attachRole($role);

        $guest = new User();
        $guest->email         = 'guest@test.com';
        $guest->full_name = 'Guest Test'; // optional
        $guest->password  = bcrypt('test'); // optional
        $guest->save();
        /*----------  Guest Roles  ----------*/
        $role = Role::where('name', 'guest')->first();
        $guest->attachRole($role);

        $user = new User();
        $user->email         = 'user@test.com';
        $user->full_name = 'User Test'; // optional
        $user->password  = bcrypt('test'); // optional
        $user->save();
        /*----------  User Roles  ----------*/
        $role = Role::where('name', 'user')->first();
        $user->attachRole($role);

    }
}
