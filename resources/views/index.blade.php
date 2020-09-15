@extends('layout')
@section('content')
            <div class="card col-7">
                <div class="card-header bg-primary text-white">
                  Kalkulator Rumus
                </div>
                <div class="card-body">
                  <h5 class="card-title">Di web kalkulator rumus ini, terdapat 3 fitur yaitu :</h5>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{url('tabung')}}">Kalkulator Tabung</a></li>
                    <li class="list-group-item"><a href="{{url('bola')}}">Kalkulator Bola</a></li>
                    <li class="list-group-item"><a href="{{url('kerucut')}}">Kalkulator Kerucut</a></li>
                  </ul>
                </div>
              </div>
@endsection
