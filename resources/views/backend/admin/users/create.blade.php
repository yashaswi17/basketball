@extends('backend.layouts.master')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Users Elements</h1>
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
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-15">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Form</h5>

                        <!-- General Form Elements -->
                        <form action="{{route('admin.user.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="fname"><b>First Name:-<b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fname" id="fname" value="{{old('fname')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lname"><b>Last Name:-<b></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lname" id="lname" value="{{old('lname')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email"><b>Email:-<b></label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password"><b>Password:-<b></label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="roles"><b>Roles:-<b></label>
                                <div class="col-sm-1">
                                    <select class="form-control" name="roles">
                                        <option value="1">Admin</option>
                                        <option value="0">User</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
