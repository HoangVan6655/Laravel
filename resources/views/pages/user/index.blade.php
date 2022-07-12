@extends('layouts.appdashboard')

@section('content')
{{--        <ul>--}}
{{--            @foreach($users as $user)--}}
{{--                <li>--}}
{{--                    <a href="/profile/{{$user->id}}">{{$user->name}}</a>--}}
{{--                    <a href="/profile/{{$user->id}}/edit" class="btn btn-primary" role="button">edit</a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}

<div class="card ">
    <div class="card-header">
        <h4 class="card-title"> User Profile</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table tablesorter " id="">
                <thead class=" text-primary">
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Status
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            {{$user->id}}
                        </td>
                        <td>
                            <a href="/profile/{{$user->id}}">{{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            <label class="badge badge-danger">active</label>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
