<?php

use Illuminate\Database\Seeder;
use App\User;
use App\TrackerType;

class TrackersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::where('name','Track User 1')->first();
        $user2 = User::where('name', 'Track User 2')->first();

        $type1 = TrackerType::where('tracker_type','Increment Counter')->first();
        $type2 = TrackerType::where('tracker_type','Totaling Counter')->first();
        $type3 = TrackerType::where('tracker_type','Categorical')->first();

        DB::table('trackers')->insert([
        	'name'=> 'Cups of Coffee',
        	'user_id' => $user1->id,
        	'type_id' => $type1->id
        ]);

        DB::table('trackers')->insert([
        	'name'=> 'Hours of Sleep',
        	'user_id' => $user1->id,
        	'type_id' => $type2->id
        ]);
    }
}
