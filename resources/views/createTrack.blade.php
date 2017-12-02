@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"> New Track</div>
                
        <div class="panel-body"> 



        	<form class="form-horizontal" method="post" action="/tracks/newTrack">
        		{{ csrf_field() }}
        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					  <div class="form-group">
					    <label for="trackName" class="col-sm-2 control-label">Tracker Name</label>
					    <div class="col-sm-4">
					      <input type="text" class="form-control" name="trackName" id="trackName" placeholder="Meetings,Candy bars, etc... ">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <div class="checkbox-inline">
					        <label>
					          <input type="checkbox" name="trackType" value="1"> Incrementing Tracker
					        </label>
					      </div>
					      <div class="checkbox-inline">
					        <label>
					          <input type="checkbox" name="trackType" value="2"> Totals Tracker
					        </label>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default">Create Track</button>
					    </div>
					  </div>
					</form>


        </div>

      </div>
    </div>
  </div>
</div>


@endsection