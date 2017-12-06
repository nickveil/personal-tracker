@extends('tracks')

@section('incrementCard')

<div class="row ">

@foreach ($tracker as $track)
	@if($track->type_id === 1)
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 flex-center">
			<div class="card">
				<form method="post" action="/tracks/{{$track->id}}">	
					{{ csrf_field() }}
					{{ method_field('delete') }} 
					<div><button class="delete" type="submit" name="delete" value="/{{$track->id}}" >X</button></div>
				</form>
				
				<div class="trackTitle text-center">{{ $track->name }}</div>
				<div class="row">
					<div class="text-center">
						<div class="trackerValue"><strong>{{$track->trackTotal}}</strong></div>
							<div class="row">
								<div class="col">
									<div class='trackerDate'>Last Update: {{$track->lastUpdate}}  </div>
								</div>

										
											<form method="post" action="/tracks">
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												<div class=" arrowCol">
													<button type="submit" name="button" value="{{$track->id}}" class="arrow glyphicon glyphicon-triangle-top"></button>
													<button type="submit" name="button" value="-{{$track->id}}" class="arrow glyphicon glyphicon-triangle-bottom"></button>
													</div>
											</form>
										


							<div class="col">
								<a href="tracks/{{$track->id}}"><div class="trackHistory"><strong> History</strong></div></a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	@else
  
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 flex-center">
			<div class="card">
				<form method="post" action="/tracks/{{$track->id}}">	
					{{ csrf_field() }}
					{{ method_field('delete') }} 
					<div><button class="delete" type="submit" name="delete" value="/{{$track->id}}">X</button></div>
				</form>	
				<div class="trackTitle text-center">{{$track->name}}</div>
				<div class="row">
					<div class="text-center">
						<div class="trackerValue"><strong>{{$track->trackTotal}}</strong></div>
						<div class="row">
							<div class="col">
								<div class='trackerDate'>Last Update: {{$track->lastUpdate}} </div>
							</div>
							<div class="col">
								<a href='tracks/{{$track->id}}/edit'><div class='editTrack'><strong>Set Total</strong></div></a>
								<a href="tracks/{{$track->id}} "><div class="trackHistory"><strong> History</strong></div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	@endif

@endforeach

	
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 flex-center">
		<a href="tracks/create">
			<div class="card">
				<div class="trackTitle text-center newTrackTitle">
					Add a New Track...
			<div class="row">
				<div class="text-center">
					<div class="trackerValue newTrackTitle"><strong>+</strong></div>
					</div>
				</div>
			</div>

		</div>
		</a>
	</div>
	
</div>
@endsection