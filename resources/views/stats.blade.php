@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">My Stats</div>
        <div class="panel-body">
        <div class="container"> 
          <div class="row">
          	@foreach ($tracker as $track)
          		<h1>{{ $track->name }}</h1>
          		<h2>Overall Totals:{{ $track->trackTotal }}</h2>

          		 
                <div class="col-lg-12 col-sm-offset-1 graph"> 


                  {!! $track->chart->html() !!}
                  {!! Charts::scripts() !!}
                  {!! $track->chart->script() !!} 
                </div>
              </div>
          	@endforeach
          </div>
        </div>
      </div>
      </div>
      <div class='text-center'> <a href='{{ $backURL }}'>Back</a></div>
    </div>
  </div>
</div>
@endsection