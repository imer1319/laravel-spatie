<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/***** -- Usuarios -- *****/
    	Permission::create([
    		'name' => 'users.index'
    	]);
    	Permission::create([
    		'name' => 'users.show'
    	]);
    	Permission::create([
    		'name' => 'users.edit'
    	]);
    	Permission::create([
    		'name' => 'users.destroy'
    	]);

    	/***** -- Roles -- *****/
    	Permission::create([
    		'name' => 'roles.index'
    	]);
    	Permission::create([
    		'name' => 'roles.show'
    	]);
    	Permission::create([
    		'name' => 'roles.create'
    	]);
    	Permission::create([
    		'name' => 'roles.edit'
    	]);
    	Permission::create([
    		'name' => 'roles.destroy'
    	]);

    	/***** -- Productos -- *****/
    	Permission::create([
    		'name' => 'products.index'
    	]);
    	Permission::create([
    		'name' => 'products.show'
    	]);
    	Permission::create([
    		'name' => 'products.create'
    	]);
    	Permission::create([
    		'name' => 'products.edit'
    	]);
    	Permission::create([
    		'name' => 'products.destroy'
    	]);
    }
}
