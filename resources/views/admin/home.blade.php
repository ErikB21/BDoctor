@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home_admin.css')}}">
@endsection

@section('content')
    <div class="container">
        @if(session('success'))
            <div class="container">
                <div class="alert alert-success">
                    <i class="fa-solid  fa-circle-check"></i> {{ session('success') }} 
                </div>
            </div>
        @endif
        <div class="d-flex align-items-center justify-content-center eb_square m-auto rounded-circle">
            @if (Auth::user()->profile_pic) 
                <img class="rounded-circle" src="{{ asset('storage/' .  Auth::user()->profile_pic) }}"/>
            @else
                <img class="rounded-circle" src="{{asset('images/avatar.png')}}">   
            @endif
        </div>
        <h1 class="text-center mt-2">Benvenuto Dr. {{Auth::user()->name}} {{Auth::user()->surname}}</h1>
        <span class="d-block text-center"><span class="font-weight-bold">Mail:</span> {{Auth::user()->email}}</span>
        <div class="row mt-3">
            {{-- -------------- --}}
            <div class="col-12 col-md-5 my-2 p-3 my-radius-bg">
                <h5 class="font-weight-bold text-center">Le Tue Specializzazioni</h5>
                <div class="d-flex flex-wrap">
                    @foreach (Auth::user()->specializations as $specialization)
                        <span class="list-unstyled mr-3">{{ $specialization->name }} </span>
                    @endforeach
                </div>
            </div>
             {{-- -------------- --}}
            <div class="col-12 col-md-5 my-2 my-radius-bg  offset-md-2 p-3">
                @if (Auth::user()->services)
                    <h5 class="text-center font-weight-bold">Prestazioni offerte</h5>
                    <p>{{ Auth::user()->services }}</p>
                @endif
            </div>
        </div>
         {{-- -------------- --}}
        <div class="row">
            <div class="col-12 col-md-5 my-2 my-radius-bg  p-3">
                <div class="text-center">
                    <h5 class="mb-4">Hai ricevuto {{ count(Auth::user()->reviews) }} recensioni</h5>
                    <a href="{{route('admin.reviews.index', [Auth::user()->name])}}" class="btn eb_btn">Vedi Recensioni</a>
                </div>
            </div>
            <div class="col-12 col-md-5 offset-md-2 my-2 my-radius-bg  p-3">
                <div class="text-center">
                    <h5 class="mb-4">Hai ricevuto {{ count(Auth::user()->messages) }} messaggi</h5>
                    <a href="{{route('admin.messages.index', [Auth::user()->name])}}" class="btn eb_btn">Vedi Messaggi</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-2 my-radius-bg p-3 text-center"> 
                @if ( Auth::user()->cv)
                <a class="btn eb_btn mt-3" href="{{ asset('storage/' .  Auth::user()->cv) }}" download>Download CV</a>
                @else
                <h5 class="pt-2 font-weight-bold">Nessun CV caricato!</h5>  
                @endif
            </div>
        </div>
        <div class="mt-3 text-center">
            <a href="{{route('admin.edit')}}" class="btn eb_btn mx-3">Modifica Profilo</a>
            <a href="{{route('admin.sponsorship.index', [Auth::user()->name])}}" class="btn btn-success mx-3">Sponsorizza Profilo</a>
           <form class="d-inline-block mx-3" action="{{route('admin.destroy')}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina Profilo</button>
            </form>
        </div> 
    </div>
 
@endsection