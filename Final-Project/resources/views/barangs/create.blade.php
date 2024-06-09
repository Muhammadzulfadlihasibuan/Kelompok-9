@extends('layout.master')

@section('title')
    Tambah barang
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <form action="{{ route('barangs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama barang" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') }}" placeholder="Masukkan stok barang" required>
                @error('stok')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}" placeholder="Masukkan harga barang" required>
                @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pemasok_id">Pilih Pemasok</label>
                <select class="form-control @error('pemasok_id') is-invalid @enderror" id="pemasok_id" name="pemasok_id" required>
                    <option value="">Pilih Pemasok</option>
                    @foreach ($pemasoks as $pemasok)
                        <option value="{{ $pemasok->id }}">{{ $pemasok->nama }}</option>
                    @endforeach
                </select>
                @error('pemasok_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
