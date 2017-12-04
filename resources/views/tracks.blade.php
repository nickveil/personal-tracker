@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Current Tracks
                    <div>
                        <a href="{{ url('/myStats') }}"> Check my stats...</a>
                    </div>
                </div>
                <a class="trackTitle" href="tracks/create"><strong>Create a new track...</strong></a>
                <div class="panel-body">
                    <ul class="list-unstyled list-inline">
                        <li>@yield('incrementCard')</li>
                        <li>@yield('totalsCard')</li>
                    </ul>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
