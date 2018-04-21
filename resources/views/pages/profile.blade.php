@extends('templates.layout')

@section('title','Aesthetic Profile')

@section('content')
<div class="row">
  {{-- Profile Box --}}
  <div class="col-lg-4">
    <div class="card card-profile">
      <div class="card-header" style="background-image: url(demo/photos/eberhard-grossgasteiger-311213-500.jpg);"></div>
      <div class="card-body text-center">
        <img class="card-profile-img" src="demo/faces/male/16.jpg">
        <h3 class="mb-3">{{ Auth::user()->name }}</h3>
        <p class="mb-4">
          <a href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a>
        </p>
        <button class="btn btn-outline-primary btn-sm" data-target="#myModal" data-toggle="modal">
          <span class="fe fe-edit"></span> Edit Profile
          @section('modalTitle','Test Modal')
          @section('modalContent','Hi! its your modal!')
        </button>
      </div>
    </div>
  </div>
  {{-- //End Profile Box --}}

  {{-- Right side card --}}
  <div class="col-lg-8">
    <div class="card">
      <div class="card-status bg-blue"></div>
      <div class="card-header">
        <h3 class="card-title">Activity</h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="container">
          <ul class="timeline">

            <li class="timeline-inverted">
              <div class="timeline-badge warning">2016</i>
              </div>
              <div class="timeline-panel">
                  <div class="timeline-heading">
                      <h4 class="timeline-title">Added</h4>
                  </div>
                  <div class="timeline-body">
                      <p>{{ Auth::user()->fullname }} Added at {{ Auth::user()->created_at }}</p>
                  </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  {{-- //End Right side card --}}

</div>
@endsection
