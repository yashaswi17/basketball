@extends('backend.layouts.master')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Meeting Elements</h1>
        <!-- validation error -->
        {{-- @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif --}}


        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Edit</li>
                <li class="breadcrumb-item active">Meeting</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="content">
      <div class="container-fluid">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
          </ul>
        </div>
        @endif
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit  Meeting</h3>
              </div>

                        <!-- General Form Elements -->
                        <form action="{{route('admin.meeting.update',$leads->id)}}" method="POST" >
                            @csrf
                            <div class="card-body">

                            <div class="form-group">
                                <label for="title"><b>Title:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="text" class="form-control" name="title" id="name" value="{{$leads->title}}">
                                <!-- </div> -->
                            </div>
                            <div class="form-group">
                                <label for="description"><b> Description:-</b></label>
                              <textarea  class="form-control" id="description" name="description" placeholder="Write something.." cols="30"  value="{{old('description')}}">{{$leads->title}}</textarea>
                                </div>

                            <div class="form-group">
                                <label for="date"><b>Date:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="date" class="form-control" name="date" id="date" value="{{$leads->date}}">
                                <!-- </div> -->
                            </div>
                            <div class="form-group">
                                <label for="place"><b>Place:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="text" class="form-control" name="place" id="place" value="{{$leads->place}}">
                                <!-- </div> -->
                            </div>
                            <br>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
