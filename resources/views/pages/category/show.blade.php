@extends('layouts.appdashboard')

@section('content')
    <p>Tên Danh Mục: {{$category->name}}</p>
    <p>Mô Tả Danh Mục: {{$category->description}}</p>

@endsection
