<?php

use Illuminate\Database\Seeder;
use App\Tracker;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(7,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-16 07:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-16 07:15:00')->toDateTimeString()
        ]);

        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-16 08:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-16 08:15:00')->toDateTimeString()
        ]);
        
        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(9,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-16 09:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-16 09:15:00')->toDateTimeString()
        ]);
        
        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(10,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-16 10:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-16 10:15:00')->toDateTimeString()
        ]);

        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,17),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-17 08:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-17 08:15:00')->toDateTimeString()
        ]);
        
        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,17),
            'time' => Carbon::createFromTime(9,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-17 09:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-17 09:15:00')->toDateTimeString()
        ]);
        
        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,17),
            'time' => Carbon::createFromTime(10,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-17 10:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-17 10:15:00')->toDateTimeString()
        ]);


        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 08:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 08:15:00')->toDateTimeString()
        ]);
        
        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(9,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 09:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 09:15:00')->toDateTimeString()
        ]);
        
        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(10,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 10:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 10:15:00')->toDateTimeString()
        ]);

        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => -1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 08:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 08:15:00')->toDateTimeString()
        ]);
        
        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(9,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 09:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 09:15:00')->toDateTimeString()
        ]);
        
        DB::table('events')->insert([
            'tracker_id' => 3,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(10,15,0,'America/New_York'),
            'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 10:15:00')->toDateTimeString(),
            'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', '2017-05-18 10:15:00')->toDateTimeString()
        ]);






        DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(7,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 5,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(7,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(7,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(8,55,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(8,57,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => -1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(8,57,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(12,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(13,30,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,16),
            'time' => Carbon::createFromTime(17,00,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,17),
            'time' => Carbon::createFromTime(6,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,17),
            'time' => Carbon::createFromTime(8,13,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 6,
            'date' => Carbon::createFromDate(2017,11,17),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,17),
            'time' => Carbon::createFromTime(9,02,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,17),
            'time' => Carbon::createFromTime(11,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,17),
            'time' => Carbon::createFromTime(15,00,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 5,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(7,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(7,50,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(9,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
 
                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(10,54,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(12,55,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(13,37,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,18),
            'time' => Carbon::createFromTime(16,53,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,19),
            'time' => Carbon::createFromTime(6,57,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,19),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 7,
            'date' => Carbon::createFromDate(2017,11,19),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,19),
            'time' => Carbon::createFromTime(10,00,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,19),
            'time' => Carbon::createFromTime(10,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,19),
            'time' => Carbon::createFromTime(14,23,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,20),
            'time' => Carbon::createFromTime(7,23,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 4,
            'date' => Carbon::createFromDate(2017,11,20),
            'time' => Carbon::createFromTime(8,00,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,20),
            'time' => Carbon::createFromTime(8,13,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,20),
            'time' => Carbon::createFromTime(10,55,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,20),
            'time' => Carbon::createFromTime(11,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 7,
            'date' => Carbon::createFromDate(2017,11,21),
            'time' => Carbon::createFromTime(7,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,21),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,21),
            'time' => Carbon::createFromTime(10,30,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 8,
            'date' => Carbon::createFromDate(2017,11,22),
            'time' => Carbon::createFromTime(7,25,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,22),
            'time' => Carbon::createFromTime(9,30,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,22),
            'time' => Carbon::createFromTime(11,20,10,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,22),
            'time' => Carbon::createFromTime(11,20,14,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => -1,
            'date' => Carbon::createFromDate(2017,11,22),
            'time' => Carbon::createFromTime(11,20,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,23),
            'time' => Carbon::createFromTime(6,17,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,23),
            'time' => Carbon::createFromTime(7,20,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 8,
            'date' => Carbon::createFromDate(2017,11,23),
            'time' => Carbon::createFromTime(7,55,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,23),
            'time' => Carbon::createFromTime(8,40,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,23),
            'time' => Carbon::createFromTime(10,20,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,23),
            'time' => Carbon::createFromTime(12,00,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,23),
            'time' => Carbon::createFromTime(13,00,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,23),
            'time' => Carbon::createFromTime(15,40,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 4,
            'date' => Carbon::createFromDate(2017,11,24),
            'time' => Carbon::createFromTime(7,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,24),
            'time' => Carbon::createFromTime(7,43,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,24),
            'time' => Carbon::createFromTime(7,45,18,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => -1,
            'date' => Carbon::createFromDate(2017,11,24),
            'time' => Carbon::createFromTime(7,45,45,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,24),
            'time' => Carbon::createFromTime(9,03,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,24),
            'time' => Carbon::createFromTime(11,20,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,24),
            'time' => Carbon::createFromTime(14,12,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,24),
            'time' => Carbon::createFromTime(16,40,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,24),
            'time' => Carbon::createFromTime(17,40,15,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,25),
            'time' => Carbon::createFromTime(7,55,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 5,
            'date' => Carbon::createFromDate(2017,11,25),
            'time' => Carbon::createFromTime(8,25,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,25),
            'time' => Carbon::createFromTime(9,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,25),
            'time' => Carbon::createFromTime(10,48,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,25),
            'time' => Carbon::createFromTime(12,21,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,25),
            'time' => Carbon::createFromTime(15,40,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,26),
            'time' => Carbon::createFromTime(7,13,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,26),
            'time' => Carbon::createFromTime(8,30,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 5,
            'date' => Carbon::createFromDate(2017,11,26),
            'time' => Carbon::createFromTime(8,35,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,26),
            'time' => Carbon::createFromTime(8,37,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => -1,
            'date' => Carbon::createFromDate(2017,11,26),
            'time' => Carbon::createFromTime(8,40,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,26),
            'time' => Carbon::createFromTime(10,55,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,26),
            'time' => Carbon::createFromTime(11,47,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,26),
            'time' => Carbon::createFromTime(13,30,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,27),
            'time' => Carbon::createFromTime(6,49,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,27),
            'time' => Carbon::createFromTime(7,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 6,
            'date' => Carbon::createFromDate(2017,11,27),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,27),
            'time' => Carbon::createFromTime(9,00,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,27),
            'time' => Carbon::createFromTime(10,12,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,27),
            'time' => Carbon::createFromTime(11,55,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,27),
            'time' => Carbon::createFromTime(17,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,28),
            'time' => Carbon::createFromTime(7,00,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 7,
            'date' => Carbon::createFromDate(2017,11,28),
            'time' => Carbon::createFromTime(8,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,28),
            'time' => Carbon::createFromTime(9,36,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,28),
            'time' => Carbon::createFromTime(12,11,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,28),
            'time' => Carbon::createFromTime(14,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,28),
            'time' => Carbon::createFromTime(17,11,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,28),
            'time' => Carbon::createFromTime(19,30,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('events')->insert([
            'tracker_id' => 2,
            'delta' => 8,
            'date' => Carbon::createFromDate(2017,11,29),
            'time' => Carbon::createFromTime(7,45,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,29),
            'time' => Carbon::createFromTime(8,36,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

                DB::table('events')->insert([
            'tracker_id' => 1,
            'delta' => 1,
            'date' => Carbon::createFromDate(2017,11,29),
            'time' => Carbon::createFromTime(10,15,0,'America/New_York'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
          ]);
    }
}
