@extends('templates.layout')

@section('title','Aesthetic Course')

@section('content')
<div class="row">
  {{-- Profile Box --}}
  <div class="col-lg-4">
    <div class="card card-profile">
      <div class="card-body">
        <!-- <img class="card-profile-img text-center" src="demo/faces/male/16.jpg"> -->
        <i class="fe fe-user" style="font-size: 5rem;margin-left: 30px;"> </i>
        <p class="mb-4">
          {{ Auth::user()->description }}
        </p>
        <h5>Hi, {{ Auth::user()->name }}. What you gonna do today?</h5>
        <ul>
            <li>
                <a href="#!" id="addcourse">Add Course</a>
            </li>
            <li>
                <a href="#!" id="viewschedule">View Schedule</a>
            </li>
            <li>
                <a href="#!" id="viewforum">View Forum</a>
            </li>
            <li>
                <a href="#!" id="tasklist">Task List</a>
            </li>
            <li>
                <a href="#!" id="quislist">Quis List</a>
            </li>
        </ul>
      </div>
    </div>
    <div class="card card-profile">
        <div class="card-body">
          <!-- <img class="card-profile-img text-center" src="demo/faces/male/16.jpg"> -->
          <p class="mb-4">
            {{ Auth::user()->description }}
          </p>
          <h5>{{ Auth::user()->name }}, in here, you can see more features. <br>Let's settle this!</h5>
          <ul>
              <li>
                  <a href="#!" id="addcourse">Friends</a>
              </li>
              <li>
                  <a href="#!" id="viewschedule">Achievements</a>
              </li>
              <li style="list-style:none;margin-left:-20px;">
                  <strong>
                      <i class="fe fe-star"> </i><a href="#!" id="viewforum" style="color: red">Pro Features</a>
                  </strong>
              </li>
              <li>
                  <a href="#!" id="tasklist">Logs</a>
              </li>
              <li>
                  <a href="#!" id="quislist">Games</a>
              </li>
          </ul>
        </div>
    </div>
  </div>
  {{-- //End Profile Box --}}

  {{-- Right side card --}}
  <div class="col-lg-8">
    <div class="card">
      <div class="card-status bg-blue"></div>
      <div class="card-header">
        <h3 class="card-title">Form</h3>
        <div class="card-options">
          <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
          <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
      </div>
      <div class="card-body">
        <div class="container">
            <form method="post" action="{{url('passports')}}" enctype="multipart/form-data">
                @csrf
                <h3>Still a dummy form</h3>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <label for="Name">Name:</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="Email">Email:</label>
                      <input type="text" class="form-control" name="email">
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="Number">Phone Number:</label>
                      <input type="text" class="form-control" name="number">
                    </div>
                  </div>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <input type="file" name="filename">
                 </div>
                </div>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="form-group col-md-4">
                    <strong>Date : </strong>
                    <input class="date form-control"  type="text" id="datepicker" name="date">
                 </div>
                </div>
                 <div class="row">
                  <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <lable>Passport Office</lable>
                        <select name="office">
                          <option value="Mumbai">Mumbai</option>
                          <option value="Chennai">Chennai</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Bangalore">Bangalore</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="form-group col-md-4" style="margin-top:60px">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
        </div>
      </div>
    </div>
  </div>
  {{-- //End Right side card --}}

  <script type="text/javascript">
      $(document).ready(function(){
          $('#addcourse').click(function() {
              $('.col-lg-8 .card').toggleClass('card-collapsed');
          });
      });
  </script>
</div>
@endsection
