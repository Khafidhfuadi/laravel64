@extends('layout')

@section('content')
<div class="card col-7">
    <div class="card-header bg-primary text-white">
      Menghitung Volume Kerucut
    </div>
    <div class="card-body">
      <h5 class="card-title">Dibutuhkan Jari-Jari dan Tinggi dari Kerucut</h5>
      <form action="/operasiKerucut" method="POST">
        @csrf
        @method("POST")
        <div class="form-group">
          <label for="jariKerucut">Jari-jari</label>
          <div class="row">
              <div class="col-10">
                <input type="number" class="form-control" name="jariKerucut">
              </div>
              <div class="col-2 p-0 mt-1"><h5>Cm</h5></div>
          </div>
        </div>
        <div class="form-group">
            <label for="tinggiKerucut">Tinggi</label>
            <div class="row">
                <div class="col-10">
                    <input type="number" class="form-control" name="tinggiKerucut">
                </div>
                <div class="col-2 p-0 mt-1">
                    <h5>Cm</h5>
                </div>
            </div>
          </div>
        <a class="btn btn-danger" href="{{'/kerucut'}}" role="button">Reset Number</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div class="mt-4 col-10">
        @if(session('info'))
        <div class="alert alert-info">
        {{session('info')}}
        </div>
        @endif
    </div>
    </div>
  </div>
@endsection
