@extends('backend.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Category Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create BLog</h3>
              </div>

              <!-- General Form Elements -->
                  <!-- validation error -->
    @if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif

              <form action="{{url('admin/category/store')}}" method="POST" >
                @csrf
                
                <div class="card-body">
                <div class="form-group">
                
                <div class="row mb-3">
                <label for="title"><b>Title:-</b></label>
                  
                    <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
                  
                </div>
              
                <!-- <div class="row mb-3"> -->
                  <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  <!-- </div> -->
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
