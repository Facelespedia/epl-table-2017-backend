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
      <div class="col-md-2 middle-row">
        <button id="search-schedule" class="btn btn-primary">Search</button>
      </div>
      <div class="col-md-2 middle-row">
        <button id="set-schedule" class="btn btn-danger">Set</button>
      </div>
    </div>
    <br/>
    <div id="data-match" class="box" style="display:none;">
      <div class="box">
        <div class="form-group row">
          <label for="match-id" class="col-2 col-form-label">Match ID : </label>
          <div class="col-10">
            <input class="form-control" type="text" id="match-id" disabled>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="form-group row">
          <label for="home-id" class="col-2 col-form-label">Team Home : </label>
          <div class="col-10">
            <input class="form-control" type="text" id="home-id" disabled>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="form-group row">
          <label for="away-id" class="col-2 col-form-label">Team Away : </label>
          <div class="col-10">
            <input class="form-control" type="text" id="away-id" disabled>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="form-group row">
          <label for="match-id" class="col-3 col-form-label">Date (Year/Month/Day) : </label>
          <div class="col-9">
            <div class="box">
              <div class="form-group row">
                  <div class="col-3">
                    <input class="form-control text-center" type="text" id="year">
                  </div>
                  <label class="middle-row">/</label>
                  <div class="col-3">
                    <input class="form-control text-center" type="text" id="month">
                  </div>
                  <label class="middle-row">/</label>
                  <div class="col-3">
                    <input class="form-control text-center" type="text" id="day">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="form-group row">
          <label for="match-id" class="col-3 col-form-label">Time (Hour/Minute) : </label>
          <div class="col-9">
           <div class="box">
              <div class="form-group row">
                  <div class="col-3">
                    <input class="form-control text-center" type="text" id="hour">
                  </div>
                  <label class="middle-row">/</label>
                  <div class="col-3">
                    <input class="form-control text-center" type="text" id="minute">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
@stop
