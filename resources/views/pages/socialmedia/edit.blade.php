@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action="{{route('admin.socialmedia.update', $socialmedia->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$socialmedia->title}}">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Iframe</h3>
                        <input type="text" class="form-control" id="iframe" name="iframe" value="{{$socialmedia->iframe}}">
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
        </div>
        </form>
    </main>
@endsection
