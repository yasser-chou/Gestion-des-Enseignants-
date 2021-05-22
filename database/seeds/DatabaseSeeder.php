<?php

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
         $this->call(AdminSeeder::class);
		//factory(App\prof ::class,4)->create();
		//factory(App\User ::class,4)->create();
    }
}
