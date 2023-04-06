@extends('backend.layouts.master')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Event Elements</h1>
        <!-- validation error -->
        {{-- @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
      @endif --}}

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">View</li>
                <li class="breadcrumb-item active">Event</li>
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
                <h3 class="card-title">Create Event</h3>
              </div>

                        <!-- General Form Elements -->
                        <form action="{{route('admin.event.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="card-body">

                            <div class="form-group">
                                <label for="name"><b>Name:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                                <!-- </div> -->
                            </div>
                            <div class="form-group">
                                <label for="description"><b> Description:-</b></label>
                              <textarea  class="form-control" id="description" name="description" placeholder="Write something.." cols="30"  value="{{old('description')}}">{!!old('description')!!}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile" value="{{old('image')}}">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                      </div>
                                      <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                      </div>
                                    </div>
                                  </div>

                            <div class="form-group">
                                <label for="date"><b>Date:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="date" class="form-control" name="date" id="date" value="{{old('date')}}">
                                <!-- </div> -->
                            </div>
                            <div class="form-group">
                                <label for="place"><b>Place:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="text" class="form-control" name="place" id="place" value="{{old('place')}}">
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
