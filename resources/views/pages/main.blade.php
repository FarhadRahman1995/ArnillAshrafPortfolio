@extends('layouts.admin_layout')
@section('content')

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>

            <form action="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h4 class="mt-3">Background Image</h4>
                    <img style="height: 20vh" src="{{url($main->bc_img)}}" alt="">
                    <input type="file" class="form-control" name="bc_img" id="bc_img">

                    <h4 class="mt-3">Logo Image</h4>
                    <img style="height: 10vh" src="{{url($main->logo_img)}}" alt="">
                    <input type="file" class="form-control" name="logo_img" id="logo_img">
                </div>
                <div class="form-group col-md-2 mt-2"></div>
                <div class="from-group col-md-3 mt-3">
                    <div>
                        <label for="title" class="mt-3"><h4>Title</h4></label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$main->title}}">
                    </div>
                    <div>
                        <label for="title" class="mt-3"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{$main->sub_title}}">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>
        </div>
    </main>

@endsection
