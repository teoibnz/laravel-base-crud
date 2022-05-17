@extends("layouts.main")

@section("main-content")

<div class="container">
    <div class="row">
        
        <div class="col-12">
        @foreach($comics as $comic)
            <div class="col-4">
                <h1> {{ $comic->name }} </h1>
                <h1> {{ $comic->editor }} </h1>
                <h1> {{ $comic->author }} </h1>
                <h1> {{ $comic->price }} </h1>
                <img src="{{ $comic->cover_url }}" alt="">
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection