@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Hai ricevuto un messaggio da {{ $message->name }} {{ $message->surname }}</h1>
        <h2>Ricevuto in data {{$message->created_at}}</h2>
        <h4 class="text-secondary"><span class="text-dark">Oggetto:</span> {{$message->title}}</h4>
        <p class="text-secondary"><span class="font-weight-bold text-dark">Testo del messaggio:</span> {{$message->message_text}}</p>
        <a href="{{route('admin.messages.index')}}" class="card-link btn btn-primary">Torna ai Messaggi</a>
        <a href="mailto:{{ $message->email }}" class="btn btn-primary">Rispondi</a>
    </div>
@endsection