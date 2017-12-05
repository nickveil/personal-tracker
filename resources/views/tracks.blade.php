@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    Current Tracks 

                      
                </div>
                
                
                <div class="panel-body">
                    <div class="margin">
                        <a class="trackTitle links linksNav pull-left" href="tracks/create"><strong>Create a new track</strong>
                        </a>
                        <strong><a class="trackTitle links linkNav pull-right" href="{{ url('/myStats') }}">Check my stats</a></strong>
                    </div>

                    @yield('incrementCard') 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
