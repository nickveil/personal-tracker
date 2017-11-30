<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class TrackController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Current Tracks

        // Specifying current user tracks
        $user = \Auth::user()->id;
        $tracker = \App\Tracker::all()->where('user_id',$user);
        if ($tracker == null){ // to handle a new user condition
            return view ('tracks');
        }
        
        //

        $events = \App\Event::all();
        

        foreach ($tracker as $track) {
        $lastUpdate = $events->where( 'tracker_id', $track->id )->max('date');
        if($lastUpdate === Carbon::now()->format('Y-m-d')){
            $trackTotal = $events->where( 'tracker_id', $track->id )->where( 'date', $lastUpdate)->sum( 'delta' );
        }
        else{
            $trackTotal = $events->where( 'tracker_id', $track->id )->where( 'date', Carbon::now()->format('Y-m-d'))->sum( 'delta' );
        }
        $track->trackTotal = $trackTotal;
        $track->lastUpdate = $lastUpdate;
        }
        //dd($lastUpdate);
        $tracks =  1;
        //$events->where('tracker_id',2);
        //dd($tracker);

        // foreach($track in $tracker){
        //     $tracker_id = $track->type_id;
        // }
        // //return $tracker;
        // $trackTotal = $events->where('tracker_id',1)->where('date','2017-11-25')->sum('delta');
        // // $todayTotals = $events->where('tracker_id',2)->where('date','2017-11-25')->sum('delta');


        return view('trackCards.allUserTracks',compact('tracker','tracks','todayTotals','trackTotal','lastUpdate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $backURL = url('tracks');

        // Info for Track History (User auth and track name)
        $user = \Auth::user()->id;
        $tracker = \App\Tracker::all()->where('user_id',$user);
        $trackName = $tracker->where('id', $id)->first();

        // Total data (overall and weekly)
        $events = \App\Event::all();
        $trackTotal = $events->where('tracker_id', $id)->sum('delta');
        $lastWeekTotals = $events->where('tracker_id', $id)->where('date', '>',Carbon::now()->subDays(7))->where('date', '<',Carbon::now())->sum('delta');
        
        // Need graph info
        
        
        

        return view('display', compact('backURL','trackName','trackTotal','lastWeekTotals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
