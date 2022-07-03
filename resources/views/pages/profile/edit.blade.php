@extends('layouts.app1')

@section('content')

    <form class="user" action="{{ route('profile.update',['profile' => $profile->id]) }}" method="POST" enctype="multipart/form-data"
    >
    @csrf
    @method('PUT')

        <div class="form-group" >
            <div class="custom-file">
                <input type="file" class="custom-file-input " id="avatar" name="avatar" >
                <label for="avatar" class="custom-file-label">{{$profile->avatar}}</label>
            </div>

            <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" value="{{$profile->full_name}}">
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="Address" value="{{$profile->address}}">
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="date" class="form-control form-control-user" name="birthday" id="birthday" placeholder="Birthday" value="{{$profile->birthday}}">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>


@endsection
