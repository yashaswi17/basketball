@extends('backend.layouts.master')

@section('content')

<main id="main" class="main">

<div class="pagetitle">
  <h1> General Blog Tables</h1>
  {{-- @if(session()->has('msg'))
    <div class="alert alert-success" class="close"  >
        {{ session()->get('msg') }}
    </div>
@endif --}}

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Blog</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<!--
<section class="section">
  <div class="row">
    <div class="col-lg-30">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Blogs Table</h5>

          <a href="{{route('admin.blog.create')}}"><button class="btn btn-success">Add</button></a>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
              <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->title}}</td>
                <td>{!!$d->description!!}</td>
                <td> <img src="{{asset('uploads/'.$d->image)}}" width="50px"  height="50px"></td>
                <td>
            <a href="{{route('admin.blog.edit',$d->id)}}"> <button type="button" class="btn btn-success">Edit</button></a></td>
          <td><a href="{{route('admin.blog.delete',$d->id)}}"> <button type="button" class="btn btn-danger">Delete</button></a> </td>

              </tr>
              @endforeach
            </tbody>
          </table>
          {{$data->links()}}

                 </div>
      </div>

    </div>
  </div>
</section> -->

</main><!-- End #main -->
<div class="col-md-12">
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

    @endif
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">Bordered Table</h3>

                <div class="text-right">
                <a href="{{route('admin.blog.create')}}"><button class="btn btn-success">Add</button></a>
                </div>


              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                  <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
              </tr>

                  </thead>
                  <tbody>
                    <tr>
                    @foreach($data as $d)
              <tr>
                <!-- <th scope="row">1</th> -->
                <td>{{$d->id}}</td>
                <td>{{$d->title}}</td>
                <td>{!!$d->description!!}</td>
                <td> <img src="{{asset('uploads/'.$d->image)}}" width="50px"  height="50px"></td>
                <td>
            <a href="{{route('admin.blog.edit',$d->id)}}"> <button type="button" class="btn btn-success">Edit</button></a><a href="{{route('admin.blog.delete',$d->id)}}"> <button type="button" class="btn btn-danger">Delete</button></a> </td>

              </tr>
              @endforeach
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> -->
            </div>
            <!-- /.card -->



          </div>

@endsection

