@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home_admin.css') }}">
@endsection

@section('content')
    <div class="container">
        @include('components.messages')

        <div class="d-flex align-items-center justify-content-center mt-3">
            <!-- Mostra sempre la foto del profilo -->
            <div class="d-flex align-items-center justify-content-center mt-3">
                @foreach (Auth::user()->sponsorships as $sponsorship)
                    @if ($sponsorship->name == 'Base')
                        <div class="eb_square_sponsor_base rounded-circle">
                    @elseif ($sponsorship->name == 'Medium')
                        <div class="eb_square_sponsor_medium rounded-circle">
                    @elseif ($sponsorship->name == 'Pro')
                        <div class="eb_square_sponsor_pro rounded-circle">
                    @else
                        <div class="eb_square rounded-circle">
                    @endif

                        @if (Auth::user()->profile_pic)
                            <img class="rounded-circle" src="{{ asset('storage/' . Auth::user()->profile_pic) }}" />
                        @else
                            <img class="rounded-circle" src="{{ asset('images/avatar.png') }}">
                        @endif
                    </div>

                    @if ($sponsorship->name == 'Base')
                        <div style="height: 3px; width:40px;" class="bg-primary"></div>
                    @elseif ($sponsorship->name == 'Medium')
                        <div style="height: 3px; width:40px;" class="bg-success"></div>
                    @elseif ($sponsorship->name == 'Pro')
                        <div style="height: 3px; width:40px; background-color: #efb810;"></div>
                    @else
                        <div class="d-none"></div>
                    @endif

                    <!-- Logica per la sponsorizzazione -->
                    @if (now()->between($sponsorship->pivot->starts_at, $sponsorship->pivot->ends_at))
                        @if ($sponsorship->name == 'Base')
                            <div class="sponsorship-info bg-primary text-white p-3 rounded">
                        @elseif ($sponsorship->name == 'Medium')
                            <div class="sponsorship-info bg-success text-white p-3 rounded">
                        @elseif ($sponsorship->name == 'Pro')
                            <div class="sponsorship-info text-white p-3 rounded" style="background-color: #ffbf00;">
                        @endif
                            <p class="m-0">Livello: {{ $sponsorship->name }}</p>
                            @php
                                $remainingTime = now()->diffInHours($sponsorship->pivot->ends_at);
                                $days = floor($remainingTime / 24);
                                $hours = $remainingTime % 24;
                                $giorno;
                                if ($days < 2) {
                                    $giorno = 'giorno';  # code...
                                }else{
                                    $giorno = 'giorni';
                                }
                            @endphp
                            <p class="m-0">Tempo rimanente: {{ $days }} {{ $giorno }} e {{ $hours }} ore</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <!-- Altri contenuti della pagina -->
        <h2 class="text-center mt-2 text-dark font-weight-bold">Benvenuto Dr. {{ Auth::user()->name }} {{ Auth::user()->surname }}</h2>
        <div class="row mt-3">
            <!-- Specializzazioni -->
            <div class="col-12 col-md-5 my-2 p-3 my-radius-bg">
                <h5 class="font-weight-bold text-center">Le Tue Specializzazioni</h5>
                <div class="d-flex flex-wrap">
                    @foreach (Auth::user()->specializations as $specialization)
                        <span class="list-unstyled mr-3">{{ $specialization->name }}</span>
                    @endforeach
                </div>
            </div>
            <!-- Servizi offerti -->
            <div class="col-12 col-md-5 my-2 my-radius-bg offset-md-2 p-3">
                @if (Auth::user()->services)
                    <h5 class="text-center font-weight-bold">Prestazioni offerte</h5>
                    <p>{{ Auth::user()->services }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 my-2 my-radius-bg p-3">
                <div class="text-center">
                    <h5 class="mb-4">Hai ricevuto {{ count(Auth::user()->reviews) }} recensioni</h5>
                    <a href="{{ route('admin.reviews.index', [Auth::user()->name]) }}" class="btn eb_btn">Vedi Recensioni</a>
                </div>
            </div>
            <div class="col-12 col-md-5 offset-md-2 my-2 my-radius-bg p-3">
                <div class="text-center">
                    <h5 class="mb-4">Hai ricevuto {{ count(Auth::user()->messages) }} messaggi</h5>
                    <a href="{{ route('admin.messages.index', [Auth::user()->name]) }}" class="btn eb_btn">Vedi Messaggi</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-2 my-radius-bg p-3 text-center">
                @if (Auth::user()->cv)
                    <a class="btn eb_btn mt-3" href="{{ asset('storage/' . Auth::user()->cv) }}" download>Download CV</a>
                @else
                    <h5 class="pt-2 font-weight-bold">Nessun CV caricato!</h5>
                @endif
            </div>
        </div>
    </div>
@endsection
