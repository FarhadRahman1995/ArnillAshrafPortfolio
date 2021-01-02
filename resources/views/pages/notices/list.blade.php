@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Notices</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Notices</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Big Image</th>
                    <th scope="col">Small Image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if (count($notices) > 0)
                    @foreach ($notices as $notice)
                        <tr>
                            <th scope="row">{{$notice->id}}</th>
                            <td>{{$notice->title}}</td>
                            <td>{{$notice->created_at}}</td>
                            <td>{{Str::limit(strip_tags($notice->description),20)}}</td>
                            <td>
                                <img style="height: 10vh" src="{{url($notice->big_image)}}" alt="big_image">
                            </td>
                            <td>
                                <img style="height: 7vh" src="{{url($notice->small_image)}}" alt="big_image">
                            </td>
                            <td>
                                <div class="row">
                                    <div>
                                        <a href="{{route('admin.notices.edit', $notice->id)}}" class="btn btn-primary m-2">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{route('admin.notices.destroy', $notice->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                @endif

                </tbody>
            </table>
    </main>
@endsection
