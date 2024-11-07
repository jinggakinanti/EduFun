@extends('layout.master')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1">
            <img src="{{ asset('img/'.$writer->image_path.'1.jpg') }}" class="img-fluid rounded-circle" style="width: 100%; height: auto; max-width: 300; max-height: 300; object-fit: cover;">
            </div>
            <div class="col-5">
                <h1>{{$writer->name}}</h1>
                <h6>{{$writer->specialty}}</h6>
            </div>
        </div>
    </div>
    <br>
    @include('layout.list', ['articles'=>$articles])

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
@endsection