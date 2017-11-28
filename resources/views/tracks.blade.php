@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Current Tracks</div>

                <div class="panel-body">
                
                    <ul class="list-unstyled list-inline">
                        <li>@yield('totalsCard')</li>
                        <li>@yield('incrementCard')</li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
