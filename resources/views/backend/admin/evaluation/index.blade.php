@extends('backend.layouts.master')

@section('content')

<main id="main" class="main">

<div class="pagetitle">

<h1> General Event Tables</h1>
  {{-- @if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
@endif --}}

  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">Evaluation</li>
    </ol>
  </nav>
</div><!-- End Page Title -->



<div class="col-md-12">
    <div class="col-12">
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
              <h3 class="card-title">Evaluation Table</h3>

                <div class="text-right">
                <a href="{{route('admin.evaluation.create')}}"><button class="btn btn-success">Add</button></a>
                </div>


              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                {{-- <th scope="col">Name</th> --}}
                <th scope="col">User</th>
                <th scope="col">Remark</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($leads as $lead)
              <tr>
                <td>{{$lead->id}}</td>
                {{-- <td>{{dd($lead->user)}}</td> --}}
                <td>{{$lead->user->fname}}</td>
                <td>{{$lead->remark}}</td>

            <td>
                <a href="{{route('admin.evaluation.edit',$lead->id)}}"> <button type="button" class="btn btn-info">Edit</button></a>
               <a href="{{route('admin.evaluation.delete',$lead->id)}}"> <button type="button" class="btn btn-danger">Delete</button></a>
            </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$leads->links()}}
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
          </main><!-- End #main -->


@endsection

