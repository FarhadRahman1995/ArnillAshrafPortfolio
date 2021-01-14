@extends('layouts.admin_layout')
@section('content')

    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Featured Posts</li>
            </ol>

            <form action="{{route('admin.homeposts.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PUT')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h4 class="mt-3">Background Image1</h4>
                    <img style="height: 20vh" src="{{url($homeposts->bc_img1)}}" alt="">
                    <input type="file" class="form-control" name="bc_img1" id="bc_img1">
                </div>
                <div class="form-group col-md-2 mt-2"></div>
                <div class="form-group col-md-3 mt-3">
                    <h4 class="mt-3">Background Image2</h4>
                    <img style="height: 20vh" src="{{url($homeposts->bc_img2)}}" alt="">
                    <input type="file" class="form-control" name="bc_img2" id="bc_img2">
                </div>
                <div class="form-group col-md-2 mt-2"></div>
                <div class="form-group col-md-3 mt-3">
                    <h4 class="mt-3">Background Image3</h4>
                    <img style="height: 20vh" src="{{url($homeposts->bc_img3)}}" alt="">
                    <input type="file" class="form-control" name="bc_img3" id="bc_img3">
                </div>
                <div class="form-group col-md-2 mt-2"></div>
                <div class="from-group col-md-3 mt-3">
                    <div>
                        <label for="title" class="mt-3"><h4>Title1</h4></label>
                        <input type="text" class="form-control" name="title1" id="title1" value="{{$homeposts->title1}}">
                    </div>
                </div>
                <div class="from-group col-md-3 mt-3">
                    <div>
                        <label for="title" class="mt-3"><h4>Title2</h4></label>
                        <input type="text" class="form-control" name="title2" id="title2" value="{{$homeposts->title2}}">
                    </div>
                </div>
                <div class="from-group col-md-3 mt-3">
                    <div>
                        <label for="title" class="mt-3"><h4>Title3</h4></label>
                        <input type="text" class="form-control" name="title3" id="title3" value="{{$homeposts->title3}}">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary mt-5">
            </form>
        </div>
    </main>

@endsection
