<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Senarai Jawatan
        </h2>
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight mb-4">Senarai Jawatan</h1>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5>Maklumat Jawatan</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>ID Pekerja</th>
                            <th>Tarikh Lapor Diri</th>
                            <th>Jawatan</th>
                            <th>Gaji (RM)</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawatans as $jawatan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jawatan->id_pekerja }}</td>
                                <td>{{ $jawatan->date_lapordiri }}</td>
                                <td>{{ $jawatan->jawatan }}</td>
                                <td>{{ number_format($jawatan->salary, 2) }}</td>
                                <td>
                                    <a href="{{ route('jawatans.show', $jawatan->id_pekerja) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('jawatans.edit', $jawatan->id_pekerja) }}" class="btn btn-warning btn-sm">Kemaskini</a>
                                    <form action="{{ route('jawatans.destroy', $jawatan->id_pekerja) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Adakah anda pasti?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tiada rekod jawatan dijumpai.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('jawatans.create') }}" class="btn btn-success">Tambah Jawatan Baru</a>
        </div>
    </div>
</x-app-layout>
