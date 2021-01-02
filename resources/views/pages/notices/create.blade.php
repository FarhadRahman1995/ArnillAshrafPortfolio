@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Create Notice List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create Notice List</li>
            </ol>
            <form action="{{route('admin.notices.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT')}}
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Big Image</h3>
                        <img style="height: 30vh" src="{{asset('assets/images/big_image.jpg')}}" class="img-thumbnail">
                        <input class="mt-3" type="file" name="big_image">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <h3>Small Image</h3>
                        <img style="height: 20vh" src="{{asset('assets/images/small_image.jpg')}}" class="img-thumbnail">
                        <input class="mt-3" type="file" name="small_image">
                    </div>
                    <div class="form-group col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text" class="form-control" id="title" name="title" value="">
                        </div>
                    </div>
                    <div class="form-group col-md-6 mt-3">
                        <h3>Description</h3>
                        <textarea class="form-control" name="description" rows="5"></textarea>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary my-5">

        </form>
        </div>
    </main>
@endsection
