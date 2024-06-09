@extends('layout.master')

@section('title')
    Detail
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="umur">Umur:</label>
            <p>{{ $profile->umur }}</p>
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <p>{{ $profile->bio }}</p>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <p>{{ $profile->alamat }}</p>
        </div>
    </div>
</div>
@endsection
