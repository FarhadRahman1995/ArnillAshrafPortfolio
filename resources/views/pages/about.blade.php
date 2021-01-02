@extends('layouts.admin_layout')
@section('content')

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
            <form action="{{route('admin.about.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h4 class="mt-3">About Image</h4>
                    <img style="height: 20vh" src="{{url($about->about_img)}}" alt="">
                    <input type="file" class="form-control" name="about_img" id="about_img">


                    <label for="description" class="mt-3"><h4>Description</h4></label>
                    <textarea name="description" id="description" cols="40" rows="5">{{$about->description}}</textarea>

                </div>
                <div class="form-group col-md-2 mt-2"></div>
                <div class="from-group col-md-3 mt-3">
                    <div>
                        <label for="title" class="mt-3"><h4>Title</h4></label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$about->title}}">
                    </div>
                    <div>
                        <label for="title" class="mt-3"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{$about->sub_title}}">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>
        </div>
    </main>

@endsection
