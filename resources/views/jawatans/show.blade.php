<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Paparan Jawatan
        </h2>
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Maklumat Jawatan untuk Pekerja ID: {{ $jawatan->id_pekerja }}</h1>
        
        <div class="card mt-4">
            <div class="card-header bg-primary text-white">
                <h5>Maklumat Jawatan</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Tarikh Lapor Diri:</strong>
                        <p>{{ $jawatan->date_lapordiri }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Tarikh Tempoh Cubaan:</strong>
                        <p>{{ $jawatan->date_tempohcubaan ?? 'Tiada' }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>Jawatan:</strong>
                        <p>{{ $jawatan->jawatan }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Gaji:</strong>
                        <p>RM {{ number_format($jawatan->salary, 2) }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>No Akaun:</strong>
                        <p>{{ $jawatan->noakaun }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>No EPF:</strong>
                        <p>{{ $jawatan->noepf ?? 'Tiada' }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <strong>No Socso:</strong>
                        <p>{{ $jawatan->nosocso ?? 'Tiada' }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Jumlah Cuti:</strong>
                        <p>{{ $jawatan->jumlahcuti }} hari</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('jawatans.edit', $jawatan->id_pekerja) }}" class="btn btn-warning">Kemaskini</a>
            <a href="{{ route('jawatans.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</x-app-layout>
