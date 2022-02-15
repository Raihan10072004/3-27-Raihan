@extends('layouts.main')

@section('container')
    <div class="tittle-top mb-5">
        <h2 class="fw-bold">Contacts Us</h2>
    </div>
    <form method="post" action="{{route('contacts.store')}}">
        {{csrf_field()}}
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="inputname" placeholder="nama" name="nama">
            <label for="imputname">nama</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="imputemail" placeholder="email" name="email">
            <label for="imputemail" class="form-label">email</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
            <label for="floatingTextarea2">Pesan</label>
        </div>
        <button type="submit" class="btn btn-primary">kirim</button>
  </form>
@endsection
