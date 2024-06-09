@extends('layout.master')

@section('title')
    Edit Profile
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Profil</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('profiles.update', $profile->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ old('umur', $profile->umur) }}" required>
                @error('umur')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" value="{{ old('bio', $profile->bio) }}" required>
                @error('bio')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $profile->alamat) }}" required>
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
