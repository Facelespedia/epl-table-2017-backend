@extends('dashboard.layout.index')
@section('content')
  <div class="container-match row">
    <div class="col-md-4">
		  <input class="typeahead" type="text" placeholder="Team home">
    </div>
    <div class="col-md-4">
      <input class="typeahead" type="text" placeholder="Team Away">
    </div>
    <div class="col-md-4 middle-row">
      <a href="" class="btn btn-primary">Search</a>
    </div>
  </div>
@stop
