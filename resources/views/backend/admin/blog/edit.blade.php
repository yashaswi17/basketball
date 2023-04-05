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
              <form action="{{route('admin.blog.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div> -->
                <div class="card-body">
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
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile" value="{{$data->image}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                <label for="category_id">Category name</label>
       <select name="category_id" id="cars" class="form-control">
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}" {{ $cat->id == $data->category_id ? 'selected' : '' }}>{{ $cat->title }}</option>

        <!-- <option value="">{{$cat->title}}</option> -->
        @endforeach
      </select>

    </div>

          
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

</div>  </form><!-- End General Form Elements -->


            </div>
          </div>

        </div>


      </div>
    </section>

  </main>

   

    </div>
    <br>

              
                <!-- <div class=""> -->
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


              </form>
              </div>
            </div>
            <!-- /.card -->


          </div>
</div>
</div>
</section>
@endsection
