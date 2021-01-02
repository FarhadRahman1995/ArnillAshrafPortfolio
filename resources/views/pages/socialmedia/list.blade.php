@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Social News</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Social News</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Iframe</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if (count($socialmedias) > 0)
                    @foreach ($socialmedias as $socialmedia)
                        <tr>
                            <th scope="row">{{$socialmedia->id}}</th>
                            <td>{{Str::limit(strip_tags($socialmedia->title),20)}}</td>
                            <td>{{$socialmedia->created_at}}</td>
                            <td>{{Str::limit(strip_tags($socialmedia->iframe),20)}}</td>
                            <td>
                                <div class="row">
                                    <div>
                                        <a href="{{route('admin.socialmedia.edit', $socialmedia->id)}}" class="btn btn-primary m-2">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{route('admin.socialmedia.destroy', $socialmedia->id)}}" method="POST">
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
