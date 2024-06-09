@extends('layout.master')

@section('title', 'Halaman Pemasok')

@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('pemasok.create') }}" class="btn btn-primary">Tambah Pemasok</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table_pemasok">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemasoks as $key=> $pemasok)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $pemasok->nama }}</td>
                        <td>
                            <a href="{{ route('pemasok.edit', $pemasok->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('pemasok.destroy', $pemasok->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pemasok ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#table_pemasok').DataTable();
    });
</script>
@endpush
