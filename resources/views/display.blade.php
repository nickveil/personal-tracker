@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$trackName->name}} Track History</div>
                
                <div class="panel-body"> 
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="totalCard">
                                <div class="trackTitle text-center"><h2>Total {{$trackName->name}}</h2></div>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="trackerValue"><strong><h1>{{$trackTotal}}</h1></strong></div>
                                    </div>
                                    <div class='trackerDate'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="totalCard">
                                <div class="trackTitle text-center"><h2>{{$trackName->name}} Within the Week</h2></div>
                                <div class="row">
                                    <div class="text-center">
                                        <div class="trackerValue"><strong><h1>{{$lastWeekTotals}}</h1></strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col-lg-1 col-sm-offset-1 graph">
                                        {!! $chart->html() !!}
                                        {!! Charts::scripts() !!}
                                        {!! $chart->script() !!}
                            
                        </div>
                    </div>

                    <div class='text-center'> <a href='{{ $backURL }}'>Back</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
