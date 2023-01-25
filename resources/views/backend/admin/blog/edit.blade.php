@extends('backend.layouts.master')

@section('content')
<main id="main" class="main">
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <div class="pagetitle">
      <h1>Blog Elements</h1>
                        <!-- validation error -->
    @if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif

      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Blogs</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-15">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blog Form</h5>

              <!-- General Form Elements -->
              <form action="{{route('admin.blog.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="title"><b>Title:-</b></label>
                  <!-- <div class="col-sm-10"> -->
                    <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}">
                  <!-- </div> -->
                </div><br>
                <div class="form-group">
      <label for="description"> <b>Description:-</b></label>
    <textarea  class="form-control" id="description" name="description" placeholder="Write something.."  value="{{$data->description}}">{!!$data->description!!}</textarea><br>
      </div>
                <!-- </div> -->
                <!-- <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div> -->
                <div class="row mb-3">
                  <label for="image"><b>Image:-</b></label>
                  <div class="col-sm-5">
                    <input class="form-control" type="file" id="formFile" name="image">
                  </div>
                </div>
                <div class="form-group">
    <select name="category_id" id="cars">
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}" {{ $cat->id == $data->category_id ? 'selected' : '' }}>{{ $cat->title }}</option>

        <!-- <option value="">{{$cat->title}}</option> -->
        @endforeach
      </select>

    </div>

                <!-- <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div> -->
                <!-- </div> -->
                <!-- <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control">
                  </div>
                </div> -->

                <!-- <div class="row mb-3">
                  <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                  </div>
                </div> -->
                <!-- <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
                </div> -->
                <!-- <fieldset class="row mb-3"> -->
                  <!-- <legend class="col-form-label col-sm-2 pt-0">Radios</legend> -->
                  <!-- <div class="col-sm-10"> -->
                    <!-- <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        First radio
                      </label>
                    </div> -->
                    <!-- <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Second radio
                      </label>
                    </div> -->
                    <!-- <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div> -->
                  <!-- </div> -->
                <!-- </fieldset> -->
                <!-- <div class="row mb-3"> -->
                  <!-- <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend> -->
                  <!-- <div class="col-sm-10"> -->

                    <!-- <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div> -->

                    <!-- <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                      <label class="form-check-label" for="gridCheck2">
                        Example checkbox 2
                      </label>
                    </div> -->

                  <!-- </div>
                </div> -->

                <!-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Disabled</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="Read only / Disabled" disabled>
                  </div>
                </div> -->

                <!-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div> -->

                <!-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Multi Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" multiple aria-label="multiple select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div> -->

                <!-- <div class="row mb-3"> -->
                  <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  <!-- </div> -->
                </div>
                <script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>

  </main>
@endsection
