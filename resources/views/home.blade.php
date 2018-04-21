@extends('templates.layout')

  @section('title','Aesthetic Dashboard')

  @section('content')
  {{-- Schedule --}}
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">University Schedule</h3>
      </div>
      <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap">
          <thead>
            <tr>
            <th class="w-1">No.</th>
            <th>Day</th>
            <th>Name</th>
            <th>SKS</th>
            <th colspan="2"><center>Time</center></th>
            <th><center>Room</center></th>
            <th>Semester</th>
          </tr>
          </thead>
        <tbody>
          @foreach($univSchedule as $uns)
          <tr>
            <td>{{ $uns->id }}</td>
            <td>{{ $uns->day }}</td>
            <td>{{ $uns->mataKuliah }}</td>
            <td>{{ $uns->SKS }}</td>
            <td>{{ $uns->startTime }}</td>
            <td>{{ $uns->endTime }}</td>
            <td>{{ $uns->room }}</td>
            <td align='center'>{{ $uns->semester }}</td>
          </tr>
          @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
