<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Senarai Pekerja</h1>
        <br>
        <a href="{{ route('pekerjas.create') }}" class="btn btn-primary mb-3">Daftar Rekod Baru</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>No. Kad Pengenalan</th>
                    <th>Pekerja ID</th>
                    <th>Nama</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pekerjas as $pekerja)
                    <tr>
                        <td>{{ $pekerja->id }}</td>
                        <td>{{ $pekerja->nric }}</td>
                        <td>{{ $pekerja->employeeID }}</td>
                        <td>{{ $pekerja->nama }}</td>
                        <td>
                            <a href="{{ route('pekerjas.show', $pekerja->id) }}" class="btn btn-info">Papar</a>
                            <a href="{{ route('pekerjas.edit', $pekerja->id) }}" class="btn btn-warning">Kemaskini</a>
                            <form action="{{ route('pekerjas.destroy', $pekerja->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="{{ route('pasangans.create', ['id_pekerja' => $pekerja->id]) }}" class="btn btn-success">Daftar Pasangan</a>
                            <a href="{{ route('heirs.create', ['id_pekerja' => $pekerja->id]) }}" class="btn btn-primary">Daftar Waris</a>
                            <!-- Butang Daftar Jawatan -->
                            <a href="{{ route('jawatans.create', ['id_pekerja' => $pekerja->id]) }}" class="btn btn-dark">Daftar Jawatan</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
