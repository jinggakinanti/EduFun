@extends('layout.master')

@section('content')
    <div class="container-fluid" style="margin-left: 20px;">
        <div class="row" >
            <div class="col-12">
                <br>
                <br>
                <br>
                <br>
                <h2>{{$article->category->subject}}</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <img src="{{ asset('img/'.$article->image_path.'.jpg') }}" 
                class="img-fluid rounded" 
                style="max-width: 35%; height: auto; border-radius: 15px;">
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid" style="margin-left: 10px;">
        <div class="row">
            <div class="col-12">
                <h5>{{$article->title}}</h5>
                <p class="card-text"><small class="text-muted">{{$article->created_at->format('d F Y')}} | by {{explode(' ', $article->writer->name)[0]}}</small></p>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid justify-content-center" style="margin-left: 10px;">
        <div class="row">
            <div class="col-12">
                <p class="card-text">{{ $article->description}}{{ $article->description}}{{ $article->description}}</p>
                <p class="card-text">{{ $article->description}}{{ $article->description}}{{ $article->description}}</p>
            </div>
        </div>
    </div>
    
@endsection