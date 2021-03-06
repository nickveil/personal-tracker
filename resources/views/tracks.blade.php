@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tracks
                    
                </div>
                <div class="margin">
                        <a class="navTitle trackHistory links linkNav pull-right" href="{{ url('/myStats') }}"><strong>Check my stats</strong></a>
                    </div>
                <div class="panel-body">
                    @yield('incrementCard') 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
