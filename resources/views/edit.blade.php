@extends('layouts.app')

@section('content')




<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"> 
        	Edit Track
        </div>
        <div class="panel-body"> 
        	<div class="row">

					 	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
							<div class="card align-center">
								<div class="trackTitle text-center">
									<h1>{{$trackName->name}}</h1>
								</div>
								<div class="row center-block">
									<form method="post" action="/tracks/{{$trackName->id}}">
									@if(count($errors))
										<div class="alert alert-danger">
											<strong>Whoops!</strong> There were some problems with your input.
											<br/>
											<ul>
												@foreach($errors->all() as $error)
												<li>{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									@endif
										{{ csrf_field() }}
										{{ method_field('PUT') }}
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group">
											<div class="numCol">
												<input type="text" class="form-control text-center num" name="count" id="count" placeholder="Total">
											</div>
											<div class="row">
												<div class="numCol">
													<div class="form-group">
														
														<input type="date" class="form-control text-center date" name="userDate" id="userDate" placeholder="{{$today}}">
													</div>
												</div>
											</div>	
											<div class="row">
												<div class="form-group text-center">
		                      <div class="col-md-8 col-md-offset-4">
		                        <button type="submit" name="submit" class="btn btn-primary">
		                            Update Track
		                        </button>
		                      </div>
		                    </div>										
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class='text-center'>
						<a href='{{ $backURL }}'>Cancel</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
