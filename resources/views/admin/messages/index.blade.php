@extends('layouts.app')
@section('content')
  <div class="container">
    @if(session('danger'))
        <div class="container">
            <div class="alert alert-danger">
                <i class="fa-regular fa-trash-can"></i> {{ session('danger') }} 
            </div>
        </div>
    @endif
    <a href="{{route('admin.home', [Auth::user()->name])}}" class="btn btn-primary mb-3">Torna alla Home</a>
    <h2>I tuoi Messaggi:</h2>
    <table class="table table-dark">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Name</th>
              <th scope="col">Surname</th>
              <th scope="col">Email</th>
              <th scope="col">Ricevuto</th>
              <th scope="col" class="text-center">Gestisci</th>
            </tr>
          </thead>
        <tbody class="table-light text-dark">
        @foreach ($messages as $message)
        <tr>
          <th scope="row">{{$message->id}}</th>
          <td>{{$message->title}}</td>
          <td>{{$message->name}}</td>
          <td>{{$message->surname}}</td>
          <td>{{$message->email}}</td>
          <td>{{$message->created_at}}</td>
          <td class="text-center">
            <a href="{{route('admin.messages.show', ['message' => $message->id])}}" class="btn btn-success">Vedi</a>
            <form class="d-inline-block" action="{{route('admin.messages.destroy', ['message' => $message])}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection