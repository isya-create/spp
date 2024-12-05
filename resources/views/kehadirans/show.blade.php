<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}        
    </x-slot>
    <div class="container mt-5">
        {{-- <h1>Details of Kehadiran</h1> --}}
        <a href="{{ route('kehadirans.index') }}" class="btn btn-primary mb-3">Kembali</a>
        <div class="card">
            <div class="card-header">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">Kehadiran Information</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    {{-- <tr>
                        <th>ID</th>
                        <td>{{ $kehadiran->id }}</td>
                    </tr> --}}                    
                    <tr>
                        <th>Nama Pekerja</th>
                        <td>{{ $kehadiran->pekerja->nama }}</td>
                    </tr>
                    <tr>
                        <th>Pilihan Jam</th>
                        <td>{{ $kehadiran->pilihan_jam }}</td>
                    </tr>
                    <tr>
                        <th>Waktu Masuk</th>
                        <td>{{ $kehadiran->waktu_masuk }}</td>
                    </tr>
                    <tr>
                        <th>Waktu Keluar</th>
                        <td>{{ $kehadiran->waktu_keluar }}</td>
                    </tr>
                    <tr>
                        <th>Catatan</th>
                        <td>{{ $kehadiran->catatan }}</td>
                    </tr>
                    {{-- <tr>
                        <th>Created At</th>
                        <td>{{ $kehadiran->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $kehadiran->updated_at }}</td>
                    </tr> --}}                    
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
