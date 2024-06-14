@extends('layouts/main_second')
@section('title', 'Form Add Roti')
@section('artikel')
<div class="card">
    <div class="card-body">
        {{-- FORM ADD MOVIES DISISI--}}
        <form action="/Save_Roti" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Rasa</label>
                <select name="rasa" class="form-control">
                    <option value="0">--Pilih Rasa--</option>
                    <option value="Cokelat">Cokelat</option>
                    <option value="Maccha">Maccha</option>
                    <option value="Chessee">Chessee</option>
                    <option value="Strawberry">Strawberry</option>
                    <option value="Mocha">Mocha</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Red Velved">Red Velved</option>
                    <option value="Blue Berry">Blue Berry</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" min="15000" max="75000" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" min="0" max="100" name="stok" class="form-control" required>
            </div>
            <div class="form-group">
                   <label>Foto</label>
                <input type="file" name="foto" class="form-control-file" accept="image/*">
            </div>
            <div class="from-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

