@extends('layout.master')

@section('title', 'Halaman Kategori')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="table_kategori">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama User</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kategoris as $key => $kategori)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $kategori->nama }}</td>
                    <td>{{ $kategori->user->name }}</td>
                    <td>
                        <a href="{{ route('kategori.show', $kategori->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data kategori.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table_kategori').DataTable();
    });
</script>
@endpush
