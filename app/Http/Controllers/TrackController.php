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

        $user = \Auth::user()->id;
        $tracker = \App\Tracker::all()->where('user_id',$user);
        $existingTracks = $tracker->where('type_id',2)->first();
        if ($existingTracks == null){
            return view ('tracks');
        }
        // $trackName = $existingTracks->name;
        //$trackID = 
        return view('trackCards.allUserTracks',compact('tracker','trackName','user','existingTracks','tracks'));
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

        $user = \Auth::user()->id;
        $tracker = \App\Tracker::all()->where('user_id',$user);
        $events = \App\Event::all();
        $trackTotal = $events->where('tracker_id', $id)->sum('delta');
        // $minDateRange = $events->select('date',Carbon::now()->subDays(2))->get();
        // return $minDateRange; This didn't work
        
        
        $trackName = $tracker->where('id', $id)->first();
        // return $trackName;

        return view('display', compact('id','backURL','trackName','trackTotal'));
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
