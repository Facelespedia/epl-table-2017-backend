@extends('dashboard.layout.index')
@section('content')
  <div class="container-match">
    <div class="row">
      <div class="col-md-4">
        <input class="typeahead-home" type="text" placeholder="Team home">
      </div>
      <div class="col-md-4">
        <input class="typeahead-away" type="text" placeholder="Team Away">
      </div>
      <div class="col-md-4 middle-row">
        <a href="" id="search-schedule" class="btn btn-primary">Search</a>
      </div>
    </div>
    <br/>
    {{--  <div class="box">
      
    </div>  --}}
  </div>
@stop
