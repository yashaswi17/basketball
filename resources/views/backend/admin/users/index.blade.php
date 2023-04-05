@extends('backend.layouts.master')

@section('content')

<main id="main" class="main">

<div class="pagetitle">

<h1> General User Tables</h1>
  {{-- @if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif --}}

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->


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
              <h3 class="card-title">Users Table</h3>

                <div class="text-right">
                <a href="{{route('admin.user.create')}}"><button class="btn btn-success">Add</button></a>
                </div>


              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($user as $u)
              <tr>
                <!-- <th scope="row">1</th> -->
                <td>{{$u->id}}</td>
                <td>{{$u->fname}}</td>
                <td>{{$u->lname}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->roles}}</td>
            <td>
                <a href="{{route('admin.user.edit',$u->id)}}"> <button type="button" class="btn btn-info">Edit</button></a>
               <a href="{{route('admin.user.delete',$u->id)}}"> <button type="button" class="btn btn-danger">Delete</button></a>
            </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$user->links()}}
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

