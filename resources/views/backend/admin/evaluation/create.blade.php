@extends('backend.layouts.master')

@section('content')
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
                <h3 class="card-title">Create Evaluation</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/evaluation/store')}}" method="POST" >

                @csrf
                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div> -->
                <div class="card-body">



                <div class="form-group">
                <label for="user_id">User</label>
         <select  class="form-control" name="user_id" id="cars">
            <option value="">select user</option>
        @foreach($user as $d)
        <option value="{{$d->id}}">{{$d->fname}}</option>
        @endforeach
      </select>



    </div>
    <div class="form-group">
        <label for="remark"><b>Remark:-<b></label>

            <input type="text" class="form-control" name="remark" id="remark" value="{{old('remark')}}">

        </div>
          <!-- <div class=""> -->
                  <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  <!-- </div> -->
                </div>



              </form>
              </div>
            </div>
            <!-- /.card -->


          </div>
</div>
</div>
</section>
@endsection
