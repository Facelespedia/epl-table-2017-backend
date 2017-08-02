@extends('dashboard.layout.index')
@section('content')
  <div class="container-match" style="height:100%;overflow:auto;">
    <table id="match-table" class="table box"style="height:50%;">
      <thead class="thead-inverse">
        <tr>
          <th class="text-center">Match ID</th>
          <th class="text-center">Date</th>
          <th class="text-center">Time</th>
          <th class="text-center">Team Home</th>
					<th class="text-center">Team Away</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
@stop
