<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}        
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Senarai Kehadiran</h1>
        <br>
        <a href="{{ route('kehadirans.create') }}" class="btn btn-primary mb-3">Daftar Rekod Baru</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <!-- Search Form -->
        <form action="{{ route('kehadirans.index') }}" method="GET" class="mb-3 d-flex justify-content-end">
            <div class="input-group" style="width: 300px;">
                <input type="text" name="search" class="form-control" placeholder="Cari..." value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>                    
                    <th>Waktu Masuk</th>
                    <th>Waktu Keluar</th>                    
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kehadirans as $kehadiran)
                    <tr>
                        <td>{{ $kehadiran->id }}</td>
                        <td>{{ $kehadiran->pekerja->nama }}</td>
                        <td>{{ $kehadiran->waktu_masuk }}</td>
                        <td>{{ $kehadiran->waktu_keluar }}</td>                        
                        <td>
                            <a href="{{ route('kehadirans.show', $kehadiran->id) }}" class="btn btn-info">Papar</a>
                            <a href="{{ route('kehadirans.edit', $kehadiran->id) }}" class="btn btn-warning">Kemaskini</a>
                            <form action="{{ route('kehadirans.destroy', $kehadiran->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $kehadirans->appends(['search' => request('search')])->links() }}
        </div>
    </div>
</x-app-layout>
