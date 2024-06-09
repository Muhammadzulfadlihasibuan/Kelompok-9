@extends('layout.master')

@section('title', 'Edit Kategori')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Kategori</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $kategori->nama) }}" required>
            </div>
            <div class="form-group">
                <label for="user_id">User</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $kategori->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="barang_id">Barang</label>
                <select class="form-control" id="barang_id" name="barang_id" required>
                    @foreach ($barangs as $barang)
                        <option value="{{ $barang->id }}" {{ $kategori->barang_id == $barang->id ? 'selected' : '' }}>{{ $barang->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
