<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
		'name'=>'ahmad',
		'email'=>'ahmad@admin.com',
		'tel'=>'0627389901',
		'email_verified_at'=>now(),
		'password'=>Hash::make('admin'),
		'remember_token'=>Str::random(10),
		'admin'=> 1,
		]);
    }
}
