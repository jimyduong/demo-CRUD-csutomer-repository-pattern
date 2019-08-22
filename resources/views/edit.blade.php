@extends('home')
@section('content')
    <form method="post" action="{{route('update',$customer->id)}}">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name"
                   value="{{$customer->first_name}}">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{$customer->last_name}}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
