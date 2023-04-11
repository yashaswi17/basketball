@extends('backend.layouts.master')

@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"> View Attendance Of Student</h3>
          </div>
          <div class="panel-body">



            {{-- <form action="{{route('attendance.export',$users->id)}}" method="POST" enctype="multipart/form-data"> --}}
                <form action="">
              {{ csrf_field() }}

              {{-- <input type="hidden" name="id" value="{{$users->id}}"> --}}
              <input type="hidden" name="id" value="">

              <div class="row">
                <div class="col-md-12">
                    <label for="role">Select Month: <sup class="redstar">*</sup></label>
                  <select class="form-control js-example-basic-single" name="month" required id="monthselect">
                    <option value="none" selected disabled hidden>
                        {{-- {{ __('adminstaticword.SelectanOption') }} --}}
                        Select Month
                    </option>




                    <option value="01">Jan</option>
                        <option value="01">Feb</option>
                            <option value="03">March</option>
                                <option value="04">April</option>
                                    <option value="05">May</option>
                                        <option value="06">June</option>
                                            <option value="07">July</option>
                                                <option value="08">August</option>
                                                    <option value="09">Sept</option>
                                                        <option value="10">Oct</option>
                                                            <option value="11">Nov</option>
                                                                <option value="12">December</option>




                  </select>
                </div>
              </div>

              <br/>

               <div class="row">

                 <div class="col-md-2">
                     <b>Total Days : </b>
                     {{-- <button class="btn btn-xs btn-info" type="button">{{$totaldays}}</button> --}}
                     <button class="btn btn-xs btn-info" type="button">30</button>
                    </div>

                <div class="col-md-2">
                <b>Total Present : </b>
                {{-- <button class="btn btn-xs btn-success" type="button">{{$totalpresent}}</button> --}}
                <button class="btn btn-xs btn-success" type="button">12</button>
            </div>
                    <div class="col-md-2">
                       <b>Total Absent : </b>
                       {{-- <button class="btn btn-xs btn-danger" type="button">{{$totalabsent}}</button> --}}
                       <button class="btn btn-xs btn-danger" type="button">05</button>
                    </div>

               </div>

               <br/>

               <div class="row">

              <div class="container">

                 <div class="col-md-8">

               </div>

              </div>


               </div>




              <div class="row">
                 {{-- <div class="col-md-4 col-4">
                  <label for="lname">
                  Image
                  </label>
                <div class="edit-user-img">
                    {{-- <img src="{{ url('/images/user_img/'.$users->user_img) }}" class="img-fluid" alt="User Image"> --}}
                    {{-- <img src="" class="img-fluid" alt="User Image">
                </div>
                </div> --}}

                <div class="col-md-4 col-4">
                   <label for="fname">
                    {{-- {{ __('adminstaticword.FirstName') }}:<sup class="redstar">*</sup> --}}
                    First name<sup class="redstar">*</sup>
                </label>
                  {{-- <input value="" autofocus required name="fname" type="text" class="form-control" placeholder="Enter your first name" disabled="disabled" /> --}}
                  <input value="{{$user->fname}}" autofocus required name="fname" type="text" class="form-control" placeholder="Enter your first name" disabled="disabled" />
                </div>
                <div class="col-md-4 col-4">
                  <label for="lname">
                   Last name:<sup class="redstar">*</sup>
                  </label>
                  <input value="{{$user->lname}}" required name="lname" type="text" class="form-control" placeholder="Enter your last name" disabled="disabled" />
                </div>


              </div>
              <br>

              <div class="row">

                <div class="col-md-12">

                    <span style="font-family: Monaco, Menlo, Consolas, 'Courier New', monospace; font-size: 13px; line-height: 18px; white-space: pre-wrap; background-color: rgb(255, 255, 255);"><div id="demo"></div></span>


                </div>

              </div>








              <br>


              <div class="box-footer">
                {{-- <button type="button" class="btn btn-md btn-primary">
                  <i class="fa fa-plus-circle" onclick="alert('Updates Under Process')"></i> Export Report
                </button> --}}
              </form>
              {{-- <a href="{{ route('user.index') }}" title="Cancel and go back" class="btn btn-md btn-default btn-flat">
                    <i class="fa fa-reply"></i> {{ __('adminstaticword.Back') }}
                </a> --}}
              </div>
              <br>


          </div>
          <!-- /.panel body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>


@endsection
