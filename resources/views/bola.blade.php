@extends('layout')

@section('content')
<div class="card col-7">
    <div class="card-header bg-primary text-white">
      Menghitung Volume Bola
    </div>
    <div class="card-body">
      <h5 class="card-title">Dibutuhkan Jari-Jari dan Tinggi dari Bola</h5>
      <form action="/operasiBola" method="POST">
        @csrf
        @method("POST")
        <div class="form-group">
          <label for="jariBola">Jari-jari</label>
          <div class="row">
              <div class="col-10">
                <input type="number" class="form-control" name="jariBola">
              </div>
              <div class="col-2 p-0 mt-1"><h5>Cm</h5></div>
          </div>
        </div>
        {{-- <a class="btn btn-danger" href="{{'/bola'}}" role="button">Reset Number</a> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div class="mt-4 col-10">
        @if(session('info'))
        <div class="alert alert-info">
        {{session('info')}}<sup>3</sup>
        </div>
        @endif
    </div>
    </div>
  </div>
@endsection
