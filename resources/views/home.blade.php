@extends('layout.main')







@section('content')

 <div class="container">
    <h1>I Treni</h1>

            <table class="table ">
                <table class="table table-striped">
                    <thead>

                      <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione di partenza</th>
                        <th scope="col">Stazione di arrivo</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">Codice Treno</th>
                      </tr>
                    </thead>
                    <tbody>

                     @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{$train->agency}}</th>
                            <td>{{$train->departure_station}}</td>
                            <td>{{$train->arrival_station}}</td>
                            <td>{{$train->departure_time}}</td>
                            <td>{{$train->arrival_time}}</td>
                            <td>{{$train->train_code}}</td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>
            </table>

 </div>

@endsection
