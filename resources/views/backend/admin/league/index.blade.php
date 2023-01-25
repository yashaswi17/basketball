@extends('backend.layouts.master')

@section('content')

<main id="main" class="main">

<div class="pagetitle">

<h1> General League Tables</h1>
  @if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">League</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-30">

      <div class="card lg-5">
        <div class="card-body">
          <h5 class="card-title">League Table</h5>

          <!-- Default Table -->
          <a href="{{route('admin.league.create')}}"><button class="btn btn-success">Add</button></a>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
                <th scope="col">Place</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($leads as $lead)
              <tr>
                <td>{{$lead->id}}</td>
                <td>{{$lead->name}}</td>
                <td> <img src="{{asset('uploads/'.$lead->image)}}" width="50px"  height="50px"></td>
                <td>{{$lead->date}}</td>
                <td>{{$lead->place}}</td>
            <td>
                <a href="{{route('admin.league.edit',$lead->id)}}"> <button type="button" class="btn btn-info">Edit</button></a>
               <a href="{{route('admin.league.delete',$lead->id)}}"> <button type="button" class="btn btn-danger">Delete</button></a>
            </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$leads->links()}}
        </div>
      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->

@endsection

