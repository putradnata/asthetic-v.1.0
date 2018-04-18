@extends('templates.layout')

  @section('title','Aesthetic Dashboard')

  @section('topbar')
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 ml-auto">
            <form class="input-icon my-3 my-lg-0">
              <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
              <div class="input-icon-addon">
                <i class="fe fe-search"></i>
              </div>
            </form>
          </div>
          <div class="col-lg order-lg-first">
            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
              <li class="nav-item">
                <a href="/home" class="nav-link active"><i class="fe fe-home"></i> Dashboard</a>
              </li>
              <li class="nav-item">
                <a href="/profile" class="nav-link"><i class="fe fe-user"></i> Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  @endsection

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
