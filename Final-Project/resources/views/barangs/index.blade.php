@extends('layout.master')

@section('title')
Halaman Barang
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('barangs.create') }}" class="btn btn-primary">Tambah Barang</a>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="table_barang">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Nama Pemasok</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($barangs as $key => $barang)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->pemasok->nama }}</td>
                    <td>
                        <a href="{{ route('barangs.show', $barang->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data barang.</td>
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
            $('#table_barang').DataTable();
        });
    </script>
@endpush
