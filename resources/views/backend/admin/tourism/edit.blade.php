@extends('backend.layouts.master')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>League Elements</h1>
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
                <li class="breadcrumb-item">View</li>
                <li class="breadcrumb-item active">Tournament</li>
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
              <h5 class="card-title">Tournament Form</h5>
              </div>

                        <!-- General Form Elements -->
                        <form action="{{route('admin.tourism.update',$tour->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                            <div class="form-group">
                                <label for="name"><b>Title:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="text" class="form-control" name="title" id="title" value="{{$tour->title}}">
                                <!-- </div> -->
                            </div>

                            <div class="form-group">
                                <label for="name"><b>Start Date:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="date" class="form-control" name="sdate" id="s-date" value="{{$tour->sdate}}">
                                <!-- </div> -->
                            </div>
                            <div class="form-group">
                                <label for="name"><b>End Date:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="date" class="form-control" name="edate" id="e-date" value="{{$tour->edate}}">
                                <!-- </div> -->
                            </div>
                            <div class="form-group">
                                <label for="name"><b>Place:-<b></label>
                                <!-- <div class="col-sm-10"> -->
                                    <input type="text" class="form-control" name="place" id="place" value="{{$tour->place}}">
                                <!-- </div> -->
                            </div>

                            <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
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
