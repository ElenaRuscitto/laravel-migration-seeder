@extends('layout.main')

@section('title')
    Home
@endsection





@section('content')

 <div class="container">
    <h1 class="my-5 text-center">I Treni</h1>


                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th scope="col">Azienda</th>
                            <th scope="col">Stazione di partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Orario di partenza</th>
                            <th scope="col">Orario di arrivo</th>
                            <th scope="col">Codice Treno</th>
                            <th scope="col">Dettagli Treno</th>
                        </tr>

                    </thead>
                    <tbody>

                     @foreach ($trains as $train)
                        <tr>
                            <th scope="row" class="text-capitalize">{{$train->agency}}</th>
                            <td class="text-capitalize">{{$train->departure_station}}</td>
                            <td class="text-capitalize">{{$train->arrival_station}}</td>
                            <td>{{$train->departure_time}}</td>
                            <td>{{$train->arrival_time}}</td>
                            <td>{{$train->train_code}}</td>
                            <td><a href="{{ route('detail', ['id' => $train->id]) }}">
                                <i class="fa-solid fa-info ps-5"></i>
                            </a></td>
                        </tr>
                      @endforeach

                    </tbody>
                </table>


            {{$trains->links()}}
 </div>

@endsection
