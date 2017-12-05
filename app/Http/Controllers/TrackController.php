<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Event;

use Charts;

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
        
        // Pulls data from DB to populate Count and Last Update

        $events = \App\Event::all();
        

        foreach ($tracker as $track) {
        $trackUpdate = $events
                            ->where( 'tracker_id', $track->id )
                            ->max('date');

        if($trackUpdate <=Carbon::now('America/New_York') || $track->type_id=2){ //ISSUE 1:this works correctly
            $lastUpdate = $events
                                ->where( 'tracker_id', $track->id )
                                ->max('date');
            $trackTotal = $events
                                ->where( 'tracker_id', $track->id )
                                ->where( 'date', $lastUpdate)
                                ->sum( 'delta' );

        }
        else{

            $trackTotal = $events  // ISSUE 1:this does not work correctly
                                ->where( 'tracker_id', $track->id )
                                ->where( 'date', $lastUpdate)
                                ->sum('delta');
                                
            $lastUpdate = Carbon::now('America/New_York')->format('Y-m-d');
        }
        
        $track->trackTotal = $trackTotal;
        $track->lastUpdate = $lastUpdate;

        }

        return view('trackCards.allUserTracks',compact('tracker','todayTotals','trackTotal','lastUpdate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $backURL = url('tracks');
        return view('createTrack',compact('backURL'));
    }

    public function newTrack(Request $request)
    {
        $this->validate($request,[
            'trackName'=> 'required|max:30',
        ]);

        $backURL = url('tracks');
        $newTrack = new \App\Tracker;

        $user = \Auth::user()->id;

        $newTrack->name = $request->input('trackName');
        $newTrack->user_id = $user;

        $newTrack->type_id = $request->input('trackType');

        $newTrack->save();
        //return $newTrack;
        return redirect('/tracks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $value = $request->input('button');

        $newEvent = new \App\Event;

        $newEvent->tracker_id = abs($value);
        if ($request->input('button') > 0){
            $newEvent->delta = 1;
        }elseif ($request->input('button')< 0){
            $newEvent->delta = -1;
        }

        $newEvent->date = Carbon::now('America/New_York')->format('Y-m-d');
        $newEvent->time = Carbon::now('America/New_York')->toTimeString();
        $newEvent->created_at = Carbon::now();
        $newEvent->updated_at = Carbon::now();

        //return $newEvent;
        $newEvent->save();
        return redirect('/tracks');
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
        $events = \App\Event::all()->where('tracker_id',$id);
        

        $eventDelta = \App\Event::where('tracker_id', $id)
                ->orderBy('date','asc')
                ->groupBy('date')
                ->selectRaw('sum(delta) as delta, date')
                ->pluck('delta');

        $eventLabel = \App\Event::where('tracker_id', $id)
                ->orderBy('date','asc')
                ->groupBy('date')
                ->selectRaw('sum(delta) as delta, date')
                ->pluck('date');
    
        $trackTotal = $events->where('tracker_id', $id)->sum('delta');
        $lastWeekTotals = $events->where('tracker_id', $id)->where('date', '>',Carbon::now()->subDays(7))->where('date', '<',Carbon::now())->sum('delta');
       
        // Need graph info
        $chart = Charts::multi('line', 'morris') // Charts (https://erik.cat/projects/Charts/docs/5

            ->elementLabel($trackName->name)
            ->title($trackName->name)
            // A dimension of 0 means it will take 100% of the space
            ->template("green-material")
            ->labels($eventLabel)
            ->dataset($trackName->name,$eventDelta);
    

        return view('display', compact('backURL','trackName','trackTotal','lastWeekTotals','chart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $backURL = url('tracks');

        $user = \Auth::user()->id;
        $tracker = \App\Tracker::all()->where('user_id',$user);
        $trackName = $tracker->where('id', $id)->first();
        $today = Carbon::now('America/New_York')->format('m-d-Y');

        return view('edit',compact('id','backURL','trackName','today'));
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
        
        $this->validate($request,[
            'count'=> 'required|integer|min:0',
            'userDate' => 'required|date|before:today'
            
        ]);

        $newEvent = new \App\Event;

        $user = \Auth::user()->id;
        $tracker = \App\Tracker::all()->where('user_id',$user);
        $trackName = $tracker->where('id', $id)->first();

        $today = Carbon::now()->format('m-d-Y');

        $newEvent->tracker_id = $id;
        $newEvent->delta = $request->input('count');
        $newEvent->date = $request->input('userDate');
        $newEvent->time = Carbon::now('America/New_York')->toTimeString();
        $newEvent->created_at = Carbon::now();
        $newEvent->updated_at = Carbon::now();

        //return $newEvent;
        $newEvent->save();
        return redirect('/home');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $track = \App\Tracker::find($id);
        $track->delete();

        return redirect('/tracks');
    }
}
