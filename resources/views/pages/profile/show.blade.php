@extends('layouts.app')

@section('content')

{{--    <a href="{{ route('profile.edit',['profile' => $profile->id])}}">edit</a>--}}
<form class="user" action="{{ route('profile.update',['profile' => $profile->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Chỉnh Sửa Profile</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 pr-md-1">
                                <div class="form-group">
                                    <label>Họ và Tên</label>
                                    <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" value="{{$profile->full_name}}">
                                </div>
                            </div>
                            <div class="col-md-6 pl-md-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control form-control-user" id="email" placeholder="Email" value="{{$profile->email}}" v>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 pr-md-1">
                                <div class="form-group">
                                    <label>Địa Chỉ</label>
                                    <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="Address" value="{{$profile->address}}">
                                </div>
                            </div>

                            <div class="col-md-4 pl-md-1">
                                <div class="form-group">
                                    <label>Ngày Sinh</label>
                                    <input type="date" class="form-control form-control-user" name="birthday" id="birthday" placeholder="Birthday" value="{{$profile->birthday}}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" id="btn" class="btn btn-primary btn-block" value="Update" onclick="demo.showNotification('top','right')">Cập Nhật</button>
                    <script language="javascript">
                        var button = document.getElementById("btn");
                        button.onclick = function(){
                            alert("Đã cập nhật thành công thông tin người dùng!");
                        }
                    </script>
                    <x-package-alert type="danger"  message="demo component"/>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>

                        <a href="javascript:void(0)">
                            <img class="avatar" src="{{$profile->avatar}}" alt="...">
                            <h5 class="title">{{$profile->full_name}}</h5>
                        </a>
                        <p class="birthday">
                            {{$profile->birthday}}
                        </p>
                        <p class="address">
                            {{$profile->email}}
                        </p>
                        <p class="address">
                            {{$profile->address}}
                        </p>
                    </div>
                    </p>

                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook" >
                            <i class="fab fa-facebook"  ></i>
                        </button>

                        <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
