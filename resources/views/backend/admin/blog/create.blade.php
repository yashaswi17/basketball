@extends('backend.layouts.master')

@section('content')
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
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/blog/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div> -->
                <div class="card-body">
                <div class="form-group">
                <label for="title"><b>Title:-<b></label>
                  
                    <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}">
                 
                </div>
                <div class="form-group">
      <label for="description"><b> Description:-</b></label>
    <textarea  class="form-control" id="description" name="description" placeholder="Write something.." cols="30"  value="{{old('description')}}">{!!old('description')!!}</textarea>
      </div>
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
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                <br>
                <div class="form-group">
                <label for="exampleInputFile">Category</label>
         <select  class="form-control" name="category_id" id="cars">
        @foreach($data as $d)
        <option value="{{$d->id}}">{{$d->title}}</option>
        @endforeach
      </select>

   

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