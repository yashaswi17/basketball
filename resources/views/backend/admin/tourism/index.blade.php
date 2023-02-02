@extends('backend.layouts.master')

@section('content')

<main id="main" class="main">

<div class="pagetitle">

<h1> General Tournament Tables</h1>
  @if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Tournament</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-30">

      <div class="card lg-5">
        <div class="card-body">
          <h5 class="card-title">Tournament Table</h5>

          <!-- Default Table -->
          <a href="{{route('admin.tourism.create')}}"><button class="btn btn-success">Add</button></a>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Place</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($tours as $tour)
              <tr>
                <td>{{$tour->id}}</td>
                <td>{{$tour->title}}</td>
                <td>{{$tour->sdate}}</td>
                <td>{{$tour->edate}}</td>
                <td>{{$tour->place}}</td>
                <td> <img src="{{asset('uploads/'.$tour->image)}}" width="50px"  height="50px"></td>
            <td>
                <a href="{{route('admin.tourism.edit',$tour->id)}}"> <button type="button" class="btn btn-info">Edit</button></a>
               <a href="{{route('admin.tourism.delete',$tour->id)}}"> <button type="button" class="btn btn-danger">Delete</button></a>
            </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$tours->links()}}
        </div>
      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection

