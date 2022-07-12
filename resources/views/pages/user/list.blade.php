@extends('layouts.appdashboard')

@section('content')
{{--    <ul>--}}
{{--        @foreach($users as $user)--}}
{{--            <li>{{$user->name}}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}

    <div class="card ">
        <div class="card-header">
            <h4 class="card-title"> Users Table</h4>
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{$user->id}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
