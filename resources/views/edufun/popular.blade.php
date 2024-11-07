@extends('layout.master')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <h2 style="margin-left: 20px;">Popular Articles</h2>
    <br>
    @foreach ($articles as $card)
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3 border-0" style="background-color: #E5FDEF; width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('img/'.$card->image_path.'.jpg') }}" 
                                 class="img-fluid rounded" 
                                 style="width: 100%; height: auto; border-radius: 15px;" >
                        </div>
                        <div class="col-md-8 d-flex flex-column">
                            <div class="card-body flex-grow-1">
                                <h5 class="card-title">{{$card->title}}</h5>
                                <p class="card-text"><small class="text-muted">{{$card->created_at->format('d F Y')}} | by {{explode(' ', $card->writer->name)[0]}} | Views: {{$card->view}}</small></p>
                                <p class="card-text">{{ Str::limit($card->description, 99) }}</p>
                            </div>
                            <div class="mt-auto d-flex justify-content-end"> 
                                <a href="{{route('article.page', ['articleId' => $card->id])}}" class="btn btn-outline-primary rounded-pill" style="width: 250px;">Read More...</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
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