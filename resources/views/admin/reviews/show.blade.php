@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('admin.reviews.index')}}" class="btn btn-primary mb-3">Torna alle recensioni</a>
    <h1>Hai ricevuto una recensione da: {{$review->name}} {{$review->surname}}</h1>
    @for ($n = 1; $n <= 5; $n++)
        @if ($review->vote < $n)
            <i class="fa-star fa-regular"></i>
        @else
            <i class="fa-star fa-solid text-warning"></i> 
        @endif
    @endfor
    
    <h3>Testo della recensione:</h3>
    <p> {{$review->review_text}}</p>
    <h5>Recensione ricevuta in data {{$review->created_at}}</h5>
</div>
    

@endsection