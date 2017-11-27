@extends('tracks')

@section('totalsCard')

<div class="fluid-container">
	@include('trackCards.incrementCard')
  <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<div class="card">
					<div class="trackTitle text-center"><h1>Hours of Sleep</h1></div>
		
					<div class="row">
						<div class="text-center">
							<div class="trackerValue"><strong>7</strong></div>

							<div class='row'>
								<div class="col">
									<div class='trackerDate'>  Last Update: 11/26/17 </div>
								</div>
								<div class="col">
									<div class='editTrack'><a href='#'>Set Total</a></div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>







@endsection