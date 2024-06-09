@extends('layout.master')

@section('title')
    Tambah Profile
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <form action="{{ route('profiles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur" required>
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" class="form-control" id="bio" name="bio" placeholder="Masukkan Bio" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
