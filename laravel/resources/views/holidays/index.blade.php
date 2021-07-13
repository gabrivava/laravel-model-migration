@extends('layout.app')

@section('content')
   <div class="title m-b-md">
        Elenco Vacanze
    </div>

    <div class="links">
        <a href="{{ route('home')}}">home</a>
    </div> 

    <div class="vacanze">
        @foreach ($holidays as $holiday)
            <div class="vacanza">
                <div>
                    Destinazione: {{$holiday->destinazione}}
                </div>
                <div>
                    Descrizione: {{$holiday->descrizione}}
                </div>
                <div>
                    Alloggio: {{$holiday->alloggio}}
                </div>
                <div>
                    Durata: {{$holiday->durata}}
                </div>
                <div>
                    Prezzo: {{$holiday->prezzo}}€
                </div>
            </div>
            
        @endforeach
    </div>
@endsection