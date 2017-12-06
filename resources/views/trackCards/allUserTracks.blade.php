@extends('tracks')

@section('incrementCard')

<div class="row">

@foreach ($tracker as $track)
	@if($track->type_id === 1)
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
			<div class="card">
				<form method="post" action="/tracks/{{$track->id}}">	
					{{ csrf_field() }}
					{{ method_field('delete') }} 
					<div><button class="delete" type="submit" name="delete" value="/{{$track->id}}" >X</button></div>
				</form>
				
				<div class="trackTitle text-center"><h1>{{ $track->name }}</h1></div>
				<div class="row">
					<div class="text-center">
						<div class="trackerValue"><strong>{{$track->trackTotal}}</strong></div>
						<div class="arrowDiv col">
							<form method="post" action="/tracks">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" name="button" value="{{$track->id}}" class="arrow glyphicon glyphicon-triangle-top"></button>
								<button type="submit" name="button" value="-{{$track->id}}" class="arrow glyphicon glyphicon-triangle-bottom"></button>
							</form>
						</div>
						<div class="row">
							<div class="col">
								<div class='trackerDate'>Last Update: {{$track->lastUpdate}}  </div>
							</div>
							<div class="col">
								<div><a href="tracks/{{$track->id}}"><strong> History</a></strong></div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	@else
  
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
			<div class="card">
				<form method="post" action="/tracks/{{$track->id}}">	
					{{ csrf_field() }}
					{{ method_field('delete') }} 
					<div><button class="delete" type="submit" name="delete" value="/{{$track->id}}" >X</button></div>
				</form>	
				<div class="trackTitle text-center"><h1>{{$track->name}}</h1></div>
				<div class="row">
					<div class="text-center">
						<div class="trackerValue"><strong>{{$track->trackTotal}}</strong></div>
						<div class="row">
							<div class="col">
								<div class='trackerDate'>  Last Update: {{$track->lastUpdate}} </div>
							</div>
							<div class="col">
								<div class='editTrack'><a href='tracks/{{$track->id}}/edit'><strong>Set Total</a></strong></div>
								<div><a href="tracks/{{$track->id}} "><strong> History</a></strong></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endif

@endforeach

<div class="row">
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-2">
		
		<div class="card">
			<a href="tracks/create">
			<div class="trackTitle text-center newTrackTitle"><h1>Add a New Track...</h1></div>
			<div class="row">
				<div class="text-center">
					<div class="trackerValue"><strong>+</div>	
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection