@extends('layout.master')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <h1 style="margin-left: 20px;">{{ $category->subject }}</h1>
    <br>
    @include('layout.list', ['articles'=>$category->articles])
    
    <style>
        .btn-outline-primary {
    background-color: #001933; 
    border-color: #001933;
    color: white;
}

.btn-outline-primary:hover {
    background-color: white; 
    border-color: #001933;
    color: #001933; 
}
</style>
    </style>
@endsection


