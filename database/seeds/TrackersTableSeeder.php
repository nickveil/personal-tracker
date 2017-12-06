<?php

use Illuminate\Database\Seeder;
use App\User;
use App\TrackerType;

use Carbon\Carbon;
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
        $user3 = User::where('name', 'Track User 3')->first();

        $type1 = TrackerType::where('tracker_type','Increment Counter')->first();
        $type2 = TrackerType::where('tracker_type','Totaling Counter')->first();
        $type3 = TrackerType::where('tracker_type','Categorical')->first();

        DB::table('trackers')->insert([  //1
        	'name'=> 'Cold Calls',
        	'user_id' => $user1->id,
        	'type_id' => $type1->id,
            'deleted_at'=> null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('trackers')->insert([  //2
            'name'=> 'Follow Up Calls',
            'user_id' => $user1->id,
            'type_id' => $type1->id,
            'deleted_at'=> null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('trackers')->insert([  //3
        	'name'=> 'Call Minutes Per Day',
        	'user_id' => $user1->id,
        	'type_id' => $type2->id,
            'deleted_at'=> null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('trackers')->insert([  //4
            'name'=> 'Customer Meetings (hrs)',
            'user_id' => $user1->id,
            'type_id' => $type2->id,
            'deleted_at'=> null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('trackers')->insert([  //5
            'name'=> 'Sale Orders',
            'user_id' => $user1->id,
            'type_id' => $type1->id,
            'deleted_at'=> null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('trackers')->insert([  //6
            'name'=> 'Cups of Coffee',
            'user_id' => $user2->id,
            'type_id' => $type1->id,
            'deleted_at'=> null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('trackers')->insert([  //7
            'name'=> 'Hours of Sleep',
            'user_id' => $user2->id,
            'type_id' => $type1->id,
            'deleted_at'=> null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);


    }
}
