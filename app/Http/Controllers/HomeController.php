<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/tracks');
    }

    public function myStats()
    {
        $backURL = url('tracks');

        $user = \Auth::user()->id;
        $tracker = \App\Tracker::all()->where('user_id',$user);
        $events = \App\Event::all();
        
        foreach ($tracker as $track) {
           
            $trackTotal = $events
                            ->where('tracker_id',$track->id)
                            ->sum('delta');

            $track->trackTotal = $trackTotal;


            $eventDelta = \App\Event::where('tracker_id', $track->id)
                            ->orderBy('date','asc')
                            ->groupBy('date')
                            ->selectRaw('sum(delta) as delta, date')
                            ->pluck('delta');

            $eventLabel = \App\Event::where('tracker_id', $track->id)
                            ->orderBy('date','asc')
                            ->groupBy('date')
                            ->selectRaw('sum(delta) as delta, date')
                            ->pluck('date');


            $track->chart = Charts::multi('line', 'morris') // Charts (https://erik.cat/projects/Charts/docs/5

            ->elementLabel($track->name)
            ->title($track->name)
            // A dimension of 0 means it will take 100% of the space
            ->template("green-material")
            ->labels($eventLabel)
            ->dataset($track->name,$eventDelta);

        }

        
        

        return view('stats',compact('tracker','trackTotal','chart','graph','backURL'));
    }
}
