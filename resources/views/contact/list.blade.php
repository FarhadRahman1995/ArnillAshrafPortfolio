@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Contact</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date & Time</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <th scope="row">{{$contact->id}}</th>
                            <td>{{$contact->created_at}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->message}}</td>
                            <td>
                                <div class="row">
{{--                                    <div>
                                        <a href="{{route('admin.blogs.edit', $blog->id)}}" class="btn btn-primary m-2">Edit</a>
                                    </div>
                                    <div>--}}
                                        <form action="{{route('admin.contact.destroy', $contact->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                                        </form>
                                    </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-warning" href="{{ route('export') }}">Export Data</a>
        </div>
    </main>



@endsection
