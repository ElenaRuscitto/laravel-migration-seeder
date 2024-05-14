@extends('layout.main')


@section('title')
    Details
@endsection




@section('content')

    <div class="container">
        <h1 class="my-5">Biglietto</h1>
        <div class="card w-100 m-3">
            <div class="card-body">
              <h3 class="card-title text-center my-5 text-capitalize">Compagnia: {{ $train->agency }}</h3>

              <div class="d-flex ml-5 ">
                <p class="card-text text-capitalize"><strong>Stazione di partenza:</strong> {{$train->departure_station}}</p>

                <p class="card-text px-5"><strong>Orario di partenza:</strong> {{$train->departure_time}}</p>

                <p class="card-text px-5"><strong>Codice del treno:</strong> {{$train->train_code}}</p>
                <p class="card-text px-5"><strong>Numero di Carrozza:</strong> {{$train->number_carriages}}</p>
              </div>

              <div  class="d-flex  ml-5">
                <p class="card-text text-capitalize"><strong>Stazione di arrivo:</strong> {{$train->arrival_station}}</p>
                <p class="card-text px-5"><strong>Orario di partenza:</strong> {{$train->arrival_time}}</p>
              </div>


            </div>
            <div class="d-flex justify-content-center align-items-center my-5">
                <a href="https://www.trenitalia.com/" class="btn btn-primary">Acquista</a>
            </div>
        </div>
    </div>

@endsection
