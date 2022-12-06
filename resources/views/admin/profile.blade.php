@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('admin.home')}}" class="btn btn-primary mb-3">Torna alla Home</a>
        <h1>Dettagli Profilo</h1>

        
        <form action="{{route('admin.update')}}" method="POST" enctype="multipart/form-data" >

            @csrf
            @method('PUT')
            

            <div class="mb-3">

                {{-- PHONE --}}

                <label for="phone" class="form-label">Telefono</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{old('phone', $profileEdit['phone'])}}"/>

                @error('phone')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror

                {{-- ADDRESS --}}
                
                <label for="address" class="form-label mt-2">Indirizzo</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{old('address', $profileEdit['address'])}}"/>

                @error('address')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror

                {{-- PROFILE PIC --}}

                <div class="row d-flex my-2">
                    <div class="pic col-6">
                        <label for="profile_pic">Foto Profilo</label>
                        <div class="mb-2">
                            <input id="profile_pic" type="file" name="profile_pic" class="form-control-file @error('profile_pic') is-invalid @enderror">
                            @error('profile_pic')
                            <div class="d-block invalid-feedback">{{$message}}</div>
                            @enderror
                            
                            <div class="mt-2">
                            @if ($profileEdit['profile_pic'])
                                <img class="img-fluid" style="width:150px;" src="{{ asset('storage/' .  $profileEdit['profile_pic'])}}"/>
                                @else
                                <img src="{{asset('images/avatar.png')}}" class="img-fluid mb-2" style="width:150px;"/>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- CV --}}
                    <div class="cv col-6">
                        <label for="cv">Curriculum</label>
                        <div class="mb-2">
                            <input id="cv" type="file" name="cv" class="form-control-file @error('cv') is-invalid @enderror">
                            @error('cv')
                            <div class="d-block invalid-feedback">{{$message}}</div>
                            @enderror
                            
                            <div class="mt-2">
                                @if ($profileEdit['cv'])
                                    {{-- <iframe style="width:250px;" src="{{ asset('storage/' .  Auth::user()->cv) }}"></iframe> --}}
                                    <h5>Hai Caricato il Curriculum!</h5>   
                                @else
                                    <h5>Nessun Curriculum inserito!</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- SPECIALIZATION --}}  
                <div class="my-2">Seleziona la tua Specializzazione:</div>
                    <div class="row ml-1">
                    @foreach ($specializations as $specialization)
                    <div class="form-check col-3">
                        {{-- In caso di qualsiasi errore --}}
                        @if ($errors->any())
                        {{-- Se nell array old, è contenuto anche l'id corrente che sto ciclando, allora rendilo checked --}}
                            <input {{(in_array($specialization->id, old('specializations', [])))?'checked':''}} name="specializations[]" type="checkbox" class="form-check-input" id="specialization_{{$specialization->id}}" value="{{$specialization->id}}">
                            <label class="form-check-label" for="specialization_{{$specialization->id}}">{{$specialization->name}}</label>
                        @else
                        {{-- Di questo utente, di tutte le sue specializzazioni, controllo se all'interno è contenuta la spec. che sto ciclando, allora rendilo checked  --}}
                            <input {{(Auth::user()->specializations->contains($specialization))?'checked':''}} name="specializations[]" type="checkbox" class="form-check-input" id="specialization_{{$specialization->id}}" value="{{$specialization->id}}">
                            <label class="form-check-label" for="specialization_{{$specialization->id}}">{{$specialization->name}}</label>
                        @endif
                    </div>
                    @endforeach
                    @error('specializations')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- SERVICES --}}
                
                <label for="services" class="form-label">Prestazioni</label>
                <input type="text" class="form-control @error('services') is-invalid @enderror" id="services" name="services" value="{{old('services', $profileEdit['services'])}}"/>

                @error('services')
                    <div class='invalid-feedback alert alert-danger p-1'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Applica Modifiche</button>
            <a class="btn btn-primary d-inline-block" href="{{route('admin.home')}}">Annulla</a>
        </form>
    </div>

@endsection