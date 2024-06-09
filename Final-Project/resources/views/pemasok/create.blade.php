@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tambah Nama Pemasok</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pemasok.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" id="nama" type="text" placeholder="Masukkan Pemasok" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('pemasok.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
