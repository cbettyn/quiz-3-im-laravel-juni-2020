@extends('layouts.master')

@section('konten')
<div class="card">
  <div class="card-body">
    <h5 class="card-title" style="margin-bottom:30px">{{ $artikel->judul}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">dibuat tanggal: {{ $artikel->created_at }}</h6>
    <h6 class="card-subtitle mb-2 text-muted">slug: {{ $artikel->slug }}</h6>
    <p class="card-text" style="margin-top:30px">{{ $artikel->isi }}</p>
    <p class="card-text"><small class="text-muted">Tanggal diperbarui: {{ $artikel->updated_at }}</small></p>
    @foreach($newtag as $t)
    <button type="button" class="btn btn-success">{{ $t }}</button>
    @endforeach
  </div>
</div>
@endsection
