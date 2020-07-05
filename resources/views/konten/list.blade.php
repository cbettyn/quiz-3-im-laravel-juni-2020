@extends('layouts.master')

@section('konten')
<h1 class="h3 mb-4 text-gray-800">Daftar Artikel</h1>

<div class="card">
  <div class="card-body">
    <div style="margin-bottom: 15px">
      <a href="/artikel/create">
        <button type="button" class="btn btn-primary">Buat Artikel</button>
      </a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr style="text-align:center">
          <th scope="col" width="5%">#</th>
          <th scope="col" width="50%">Judul Artikel</th>
          <th scope="col" width="20%">Tanggal dibuat</th>
          <th scope="col" width="25%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($all as $no=>$data)
        <tr>
          <th scope="row" style="text-align:center">{{ ++$no }}</th>
          <td>{{ $data->judul }}</td>
          <td>{{ $data->created_at }}</td>
          <td>
            <a href="/artikel/{{ $data->id }}">
              <button type="button" class="btn btn-sm btn-light"><i class="far fa-eye"></i> Lihat</button>
            </a>
            <a href="/artikel/{{ $data->id }}/edit">
              <button type="button" class="btn btn-sm btn-light"><i class="far fa-edit"></i> Edit</button>
            </a>
            <form action="/artikel/{{ $data->id }}" method="post"  style="display:inline">
              @csrf
              @method('DELETE')
              <button onclick="return confirm('Anda yakin akan menghapus artikel ini?')" type="submit" class="btn btn-sm btn-danger">
                <i class="far fa-trash-alt"></i> Hapus
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
@endsection

@push('scripts')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush
