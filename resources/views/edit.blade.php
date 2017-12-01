@extends('layouts.app')

@section('content')




<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Edit Track</div>

        <div class="panel-body"> 
        	<div class="row">

					 	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<div class="card align-center">

								<div class="trackTitle text-center"><h1>{{$trackName->name}}</h1></div>

								<div class="row center-block">
									<div class="form-group">
										<div class="numCol">
											<input type="text" class="form-control text-center num" id="{{$trackName->$id}}" placeholder="5">
										</div>
								<div class="row">
									<div class="numCol">
										<div class='trackerDate text-center'>  Last Update:  </div>
									</div>
								</div>	


									</div>
								</div>

							</div>

						</div>

					</div>
				</div>
				<div class='text-center'> <a href='{{ $backURL }}'>Cancel</a></div>
			</div>
		</div>
	</div>
</div>

@endsection
