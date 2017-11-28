<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TrackerTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tracker_types')->insert([
        	'tracker_type' => 'Increment Counter'
        	]);

        DB::table('tracker_types')->insert([
        	'tracker_type' => 'Totaling Counter'
        	]);

        DB::table('tracker_types')->insert([
        	'tracker_type' => 'Categorical'
        	]);
    }
}
