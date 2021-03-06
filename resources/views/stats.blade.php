@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">My Stats
          <div class="margin">
            <a class="navTitle trackHistory links linkNav pull-right" href="{{ $backURL }}"><strong>Back</strong></a>
          </div>
        </div>
        <div class="panel-body">
          <div class="container"> 
          	@foreach ($tracker as $track)
              <div class="row">
            		<h1>{{ $track->name }}</h1>
            		<h2>Overall:{{ $track->trackTotal }}</h2>
                <div class="row">
                  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 graph"> 
                    {!! $track->chart->html() !!}
                    {!! Charts::scripts() !!}
                    {!! $track->chart->script() !!} 
                  </div>
                </div>
                </div>
          	@endforeach
            <div class='text-center trackHistory'> <a href='{{ $backURL }}'>Back</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection