<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Track User 1',
        	'email'=> 'track.user1@mail.com',
        	'password' => bcrypt('tracker'),
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);

        DB::table('users')->insert([
        	'name' => 'Track User 2',
        	'email'=> 'track.user2@mail.com',
        	'password' => bcrypt('tracker'),
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);

        DB::table('users')->insert([
            'name' => 'Track User 3',
            'email'=> 'track.user3@mail.com',
            'password' => bcrypt('tracker'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
