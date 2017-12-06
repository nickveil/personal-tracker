@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tracks
                    <div class="margin">
                        <strong><a class="trackTitle links linkNav pull-right" href="{{ url('/myStats') }}">Check my stats</a></strong>
                    </div>
                </div>
                <div class="panel-body">
                    @yield('incrementCard') 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
