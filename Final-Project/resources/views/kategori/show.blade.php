@extends('layout.master')
@section('content')
    <h1>{{ $kategori->nama }}</h1>
    <p>User ID: {{ $kategori->user_id }}</p>
    <p>Barang ID: {{ $kategori->barang_id }}</p>
    <p>Created at: {{ $kategori->created_at }}</p>
    <p>Updated at: {{ $kategori->updated_at }}</p>
    <a href="{{ route('kategori.index') }}">Back to List</a>
@endsection
