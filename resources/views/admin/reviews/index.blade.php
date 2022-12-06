@extends('layouts.app')
@section('content')
  <div class="container">
    <a href="{{route('admin.home', [Auth::user()->name])}}" class="btn btn-primary mb-3">Torna alla Home</a>
    <h2>Le tue recensioni:</h2>
    <table class="table table-dark">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Cognome</th>
              <th scope="col">Voto</th>
              <th scope="col">Creata il</th>
              <th scope="col" class="text-center">Dettagli</th>
            </tr>
          </thead>
        <tbody class="table-light text-dark">
        @foreach ($reviews as $review)
        <tr>
        <th scope="row">{{$review->id}}</th>
          <td>{{$review->name}}</td>
          <td>{{$review->surname}}</td>
          <td>
            @for ($n = 1; $n <= 5; $n++)
                @if ($review->vote < $n)
                    <i class="fa-star fa-regular"></i>
                @else
                    <i class="fa-star text-warning fa-solid"></i> 
                @endif
            @endfor
          </td>
          <td>{{$review->created_at}}</td>
          <td class="text-center">
            <a href="{{route('admin.reviews.show', ['review' => $review->id])}}" class="btn btn-success">Vedi</a>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection