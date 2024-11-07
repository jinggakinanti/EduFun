@extends('layout.master')

@section('content')

    <div class="container-fluid">
        <div class="row" >
            <div class="col-12">
                <br>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-left: 20px;">
        <div class="row" >
            <div class="col-12">
                <br>
                <br>
                <br>
                <h1>Our Writers:</h1>
                <br>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row" >
        @foreach ($writers as $card)
            <div class="col-4">
                <br>
                <a href="{{ route('writerDetail.page', $card->id) }}">
                <img src="{{ asset('img/'.$card->image_path.'1.jpg') }}" class="img-fluid rounded-circle" style="width: 100%; height: auto; max-width: 300; max-height: 300; object-fit: cover;">
                </a>
                <h2 class="text-center">{{$card->name}}</h2>
                <h4 class="text-center"><small class="text-muted"></small>{{$card->specialty}}</h4>
                <br>
                <br>
            </div>
            @endforeach
        </div>
    </div>
@endsection