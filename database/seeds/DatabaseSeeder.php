<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User','Administrador',1)->create();
        factory('App\User', 70)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
