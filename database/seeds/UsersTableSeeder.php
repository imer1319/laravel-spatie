<?php
use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
        	'name' => 'Administrador'
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
        $user = User::find(1);
        $user->assignRole('Administrador');
        
        factory(App\User::class, 20)->create();
    }
}
