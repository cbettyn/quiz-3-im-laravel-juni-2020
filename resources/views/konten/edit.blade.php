@extends('layouts.master')

@section('konten')
<h1 class="h3 mb-4 text-gray-800">Buat Artikel Baru</h1>

<div class="card">
  <div class="card-body">
    <form action="/artikel/{{ $artikel->id }}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="judul">Judul Artikel</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{ $artikel->judul }}" required>
      </div>
      <div class="form-group">
        <label for="isi">Isi Artikel</label>
        <textarea class="form-control" id="isi" name="isi" rows="3" required>{{ $artikel->isi }}</textarea>
      </div>
      <div class="form-group">
        <label for="tag">Tag</label>
        <input type="text" class="form-control" id="tag" name="tag" value="{{ $artikel->tag }}">
        <div style="font-size: 12px">
          Pisahkan tag dengan tanda koma (,)
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</div>
@endsection
