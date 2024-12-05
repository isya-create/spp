<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}        
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Senarai Cuti Pekerja</h1>
        <br>
        <a href="{{ route('cutis.create') }}" class="btn btn-primary mb-3">Daftar Rekod Baru</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <!-- Search Form -->
        <form action="{{ route('cutis.index') }}" method="GET" class="mb-3 d-flex justify-content-end">
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
                    <th>Tarikh Mula</th>
                    <th>Tarikh Tamat</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cutis as $cuti)
                    <tr>
                        <td>{{ $cuti->id }}</td>
                        <td>{{ $cuti->pekerja->nama }}</td>
                        <td>{{ $cuti->date_mulacuti }}</td>
                        <td>{{ $cuti->date_tamatcuti }}</td>
                        <td>
                            <a href="{{ route('cutis.show', $cuti->id) }}" class="btn btn-info">Papar</a>
                            <a href="{{ route('cutis.edit', $cuti->id) }}" class="btn btn-warning">Kemaskini</a>
                            <form action="{{ route('cutis.destroy', $cuti->id) }}" method="POST" style="display:inline;">
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
            {{ $cutis->appends(['search' => request('search')])->links() }}
        </div>
    </div>
</x-app-layout>
