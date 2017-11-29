@extends('tracks')



@section('incrementCard')

@foreach ($tracker as $track)
	@if($track->type_id === 2)
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="card">
				<div class="trackTitle text-center"><h1>{{ $track->name }}</h1></div>
				<div class="row">
					<div class="text-center">
						<div class="trackerValue"><strong>3</strong></div>
						<div class="arrow col">
							<strong><span class="arrow glyphicon glyphicon-triangle-top"></span></strong>
							<strong><span class="arrow glyphicon glyphicon-triangle-bottom"></span></strong>
						</div>
						<div class="row">
							<div class="col">
								<div class='trackerDate'>  Last Update: 11/27/17 </div>
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
	</div>

	@else
	  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="card">
				<div class="trackTitle text-center"><h1>{{$track->name}}</h1></div>
	
				<div class="row">
					<div class="text-center">
						<div class="trackerValue"><strong>7</strong></div>

						<div class="row">
							<div class="col">
								<div class='trackerDate'>  Last Update: 11/26/17 </div>
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
	</div>
	@endif

@endforeach

@endsection