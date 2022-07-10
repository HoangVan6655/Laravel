{{--@extends('layouts.app1')--}}
{{--@section('content')--}}
{{--    <section class="content-header">--}}
{{--        <h1>--}}
{{--            Chỉnh Sửa Sản Phẩm--}}
{{--        </h1>--}}
{{--    </section>--}}
{{--    <section class="content">--}}
{{--        <form class="products" action="{{ url('/products') }}/{{ $products ->id }}" method="POST" enctype="multipart/form-data">--}}
{{--            <input type="hidden" name="_method" value="PUT">--}}
{{--            {{ csrf_field() }}--}}
{{--            @if(count($errors) >0)--}}
{{--                <ul>--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <li class="text-danger">{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            @endif--}}
{{--            <div class="box">--}}
{{--                <div class="box-body row">--}}
{{--                    <div class="form-group col-md-12">--}}
{{--                        <label>Tên Sản Phẩm</label>--}}
{{--                        <input type="text" name="txtName" class="form-control" value="{{ $products->name }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-12">--}}
{{--                        <label>Số Lượng Sản Phẩm</label>--}}
{{--                        <input type="text" name="txtSlug" class="form-control"  value="{{ $products->quantity }}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-12">--}}
{{--                        <label>Giá Sản Phẩm</label>--}}
{{--                        <textarea name="txtDesc" class="form-control">{{ $products->price }}</textarea>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="box-footer row">--}}
{{--                    <button type="submit" class="btn btn-success">--}}
{{--                        <i class="fa fa-save"></i>--}}
{{--                        <span>Lưu và Quay Lại</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </section>--}}
{{--@endsection--}}


@extends('layouts.app1')

@section('content')

    <form class="user" action="{{ route('products.edit',['products' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group" >
{{--            <div class="custom-file">--}}
{{--                <input type="file" class="custom-file-input " id="avatar" name="avatar" >--}}
{{--                <label for="avatar" class="custom-file-label">{{$products->name}}</label>--}}
{{--            </div>--}}

            <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="Address" value="{{$product->name}}">
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="date" class="form-control form-control-user" name="birthday" id="birthday" placeholder="Birthday" value="{{$product->name}}">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>


@endsection
