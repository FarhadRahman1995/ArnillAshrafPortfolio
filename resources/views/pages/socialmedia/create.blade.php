@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Create Notice List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create Notice List</li>
            </ol>
            <form action="{{route('admin.socialmedia.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}
                <div class="row">
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text" class="form-control" id="title" name="title" value="">
                        </div>

                        <div class="mb-3">
                            <label for="iframe"><h4>Input Iframe</h4></label>
                            <input type="text" class="form-control" id="iframe" name="iframe">
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary my-5">
            </form>
        </div>

    </main>
@endsection
