@extends('layouts/main_second')
@section('title', 'RotiRoyale')
@section('artikel')
<div class="card">
    <div class="card-header">
      <a href="/Roti_Royale/form-add-roti" class="btn btn-primary"><i class="bi bi-plus-square"></i> Roti_Royale</a>
    </div>
    <div class="card-body">
      @if (session('alert'))

      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('alert') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      @endif
      {{-- Tabel Disini --}}
      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Roti</th>
                <th>Rasa</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($rr as $idx =>$r)
          <tr>
            <td>{{ $idx+1 }}</td>
            <td>{{ $r->nama }}</td>
            <td>{{ $r->rasa }}</td>
            <td>{{ $r->harga }}</td>
            <td>{{ $r->stok }}</td>
            <td>
                <img src="{{ Storage::url($r->foto) }}" alt="{{ $r->foto }}" height="80" width="80">
            </td>
            <td>
                <a href="/Roti_Royale/form-edit-roti/{{ $r->id }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                <a href="/Delete/{{ $r->id }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
 </div>
@endsection
