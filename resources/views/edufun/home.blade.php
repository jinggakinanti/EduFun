@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12" style="margin: 0; padding: 0;">
            <br>
            <br>
            <br>
            <img src="{{ asset('img/learning.jpg') }}" class="img-fluid">
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