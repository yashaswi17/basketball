@extends('backend.layouts.master')

@section('content')

<main id="main" class="main">

<div class="pagetitle">

<h1> General User Tables</h1>
  @if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-30">

      <div class="card lg-5">
        <div class="card-body">
          <h5 class="card-title">Users Table</h5>

          <!-- Default Table -->
          <a href="{{route('admin.user.create')}}"><button class="btn btn-success">Add</button></a>

          <table class="table">
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
      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection

