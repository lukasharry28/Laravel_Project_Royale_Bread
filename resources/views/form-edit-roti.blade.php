@extends('layouts/main_second')
@section('title', 'Form Edit Roti')
@section('artikel')
<div class="card">
    <div class="card-body">
        {{-- FORM EDIT ROTI DISINI--}}
        <form action="/Update/{{ $rr->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" value="{{ $rr ->nama }}" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Rasa</label>
                <select name="rasa" class="form-control">
                    <option value="0">--Pilih Rasa--</option>
                    <option value="Cokelat" {{ ($rr->rasa == "Cokelat") ? "Selected":"" }}>Cokelat</option>
                    <option value="Maccha" {{ ($rr->rasa == "Maccha") ? "Selected":"" }}>Maccha</option>
                    <option value="Chessee" {{ ($rr->rasa == "Chessee") ? "Selected":"" }}>Chessee</option>
                    <option value="Strawberry" {{ ($rr->rasa == "Strawberry") ? "Selected":"" }}>Strawberry</option>
                    <option value="Mocha" {{ ($rr->rasa == "Mocha") ? "Selected":"" }}>Mocha</option>
                    <option value="Vanilla" {{ ($rr->rasa == "Vanilla") ? "Selected":"" }}>Vanilla</option>
                    <option value="Red Velved" {{ ($rr->rasa == "Red Velved") ? "Selected":"" }}>Red Velved</option>
                    <option value="Blue Berry" {{ ($rr->rasa == "Blue Berry") ? "Selected":"" }}>Blue Berry</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" min="15000" max="75000" name="harga" class="form-control" value="{{ $rr->harga }}" required>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" min="0" max="100" name="stok" class="form-control" value="{{ $rr->stok }}" required>
            </div>
            <div class="form-group">
                   <label>Foto</label>

                   <div class="form-group">
                    <img src="{{ asset('/storage/'.$rr->foto) }}" alt="{{ $rr->foto }}" height="80" width="80">
                </div>
                <input type="file" name="foto" class="form-control-file" accept="image/*">
            </div>
            <div class="from-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

