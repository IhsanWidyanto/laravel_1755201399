@extends('layouts.app')
@section('tittle','Halaman Mahasiswa')
@section('content')
    <h1>Master Mahasiswa</h1>
    <table class="table table-striped" id="mhs-table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama_Lengkap</th>
                <th>Prodi</th>
                <th>Alamat</th>
            </tr>
        </thead>
    </table>
    <script>
$(function() {
    $('#mhs-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('mhs_list') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nim', name: 'nim' },
            { data: 'nama_lengkap', name: 'nama_lengkap' },
            { data: 'prodi', name: 'prodi' },
            { data: 'alamat', name: 'alamat' }
        ]
    });
});
</script>
@endsection