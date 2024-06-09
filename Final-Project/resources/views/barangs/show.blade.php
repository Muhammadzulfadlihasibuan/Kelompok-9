@extends('layout.master')

@section('title')
    Detail Barang
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama Barang:</label>
            <p>{{ $barang->nama }}</p>
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <p>{{ $barang->stok }}</p>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <p>{{ $barang->harga }}</p>
        </div>
        <div class="form-group">
            <label for="pemasok">Nama Pemasok:</label>
            <p>{{ $barang->pemasok->nama }}</p>
        </div>
    </div>
</div>
    <div>
        <a href="{{ route('barangs.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
