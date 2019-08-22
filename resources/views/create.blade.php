@extends('home')
@section('content')
    <form method="post" action="{{route('store')}}">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name"
                   placeholder="Enter first name">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
