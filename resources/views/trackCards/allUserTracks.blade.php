@extends('tracks')



@section('incrementCard')

$tracks _ {{$tracks}}
<div class="row">

@foreach ($tracker as $track)
	@if($track->type_id === 1)
	
  
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="card">

				<div class="trackTitle text-center"><h1>{{ $track->name }}</h1></div>
				<div class="row">
					<div class="text-center">
						<div class="trackerValue"><strong>{{$track->trackTotal}}</strong></div>
						<div class="arrow col">
							<strong><span class="arrow glyphicon glyphicon-triangle-top"></span></strong>
							<strong><span class="arrow glyphicon glyphicon-triangle-bottom"></span></strong>
						</div>
						<div class="row">
							<div class="col">
								<div class='trackerDate'>Last Update: {{$track->lastUpdate}}  </div>
							</div>
							<div class="col">
								<div class='editTrack'><a href='#'>Change</a></div>
								<div><a href="tracks/{{$track->id}} "> History</a></div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	@else

	  
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="card">

				<div class="trackTitle text-center"><h1>{{$track->name}}</h1></div>
	
				<div class="row">
					<div class="text-center">
						<div class="trackerValue"><strong>{{$track->trackTotal}}</strong></div>

						<div class="row">
							<div class="col">
								<div class='trackerDate'>  Last Update: {{$track->lastUpdate}} </div>
							</div>
							<div class="col">
								<div class='editTrack'><a href='#'>Set Total</a></div>
								<div><a href="tracks/{{$track->id}} "> History</a></div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>

	@endif

@endforeach
		</div>
@endsection