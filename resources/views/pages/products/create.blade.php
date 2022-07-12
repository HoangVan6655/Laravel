@extends('layouts.appdashboard')
@section('content')
    <section class="content-header">
        <h1>
            Thêm Sản Phẩm
        </h1>
    </section>
    <section class="content">
        <form action="{{ route('products.store')}}" method="POST">
            {{ csrf_field() }}
            @if(count($errors) >0)
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="box">
                <div class="box-body row">
                    <div class="form-group col-md-12">
                        <label>Tên Sản Phẩm</label>
                        <input type="text" name="txtName" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Số Lượng Sản Phẩm</label>
                        <input type="text" name="txtSlug" class="form-control"  value="{{ old('quantity') }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label>Giá Sản Phẩm</label>
                        <textarea name="txtDesc" class="form-control">{{ old('price') }}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Mô Tả Sản Phẩm</label>
                        <textarea name="txtDesc" class="form-control">{{ old('describe') }}</textarea>
                    </div>

                </div>
                <div class="box-footer row">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>
                        <span>Save and back</span>
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection
