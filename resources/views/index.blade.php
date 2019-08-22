@extends('home')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $key => $customer)
        <tr>
            <th scope="row">{{ ++$key }}</th>
            <td>{{$customer->first_name}}</td>
            <td>{{$customer->last_name}}</td>
            <td><a href="{{route("edit",$customer->id)}}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{route("delete",$customer->id)}}" class="btn btn-warning">delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{route('create')}}" class="btn btn-success">Create</a>
@endsection
