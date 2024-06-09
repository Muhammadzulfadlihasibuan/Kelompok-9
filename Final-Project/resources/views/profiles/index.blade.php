@extends('layout.master')

@section('title', 'Halaman Profile')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('profiles.create') }}" class="btn btn-primary">Tambah Profile</a>
    </div>
    <div class="card-body">
        <table class="table table-striped" id="table_profiles">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Alamat</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($profiles as $key => $profile)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $profile->umur }}</td>
                    <td>{{ $profile->bio }}</td>
                    <td>{{ $profile->alamat }}</td>
                    <td>
                        <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus profile ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data profile.</td>
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
        $('#table_profiles').DataTable();
    });
</script>
@endpush
