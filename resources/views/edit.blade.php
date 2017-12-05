@extends('layouts.app')

@section('content')




<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"> 
        	Edit {{$trackName->name}} Track
        </div>
        <div class="panel-body"> 
        	
									<form class="form-horizontal" method="post" action="/tracks/{{$trackName->id}}">
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
											<label for="trackName" class="col-sm-2 control-label">Update Value</label>
											<div class="col-sm-4">
												<input type="text" class="form-control text-center" name="count" id="count" placeholder="Total">
											</div>
										</div>
										<div class="form-group">
											<label for="userDate" class="col-sm-2 control-label">Update Date</label>
											<div class="col-sm-4">
												<input type="date" class="form-control text-center" name="userDate" id="userDate" placeholder="{{$today}}">
											</div>
										</div>


												<div class="form-group">
		                      <div class="col-sm-offset-2 col-sm-10">
		                        <button type="submit" name="submit" class="btn btn-default">
		                            Update Track
		                        </button>
		                      </div>
		                    </div>										
											</div>

									</form>

								<div class='text-center'>
									<a href='{{ $backURL }}'>Cancel</a>
								</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
