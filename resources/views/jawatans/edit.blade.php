<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kemaskini Jawatan
        </h2>
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Kemaskini Jawatan untuk Pekerja ID: {{ $jawatan->id_pekerja }}</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('jawatans.update', $jawatan->id_pekerja) }}" method="POST">
            @csrf
            @method('PUT') <!-- Untuk HTTP PUT request -->

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="date_lapordiri" class="form-label">Tarikh Lapor Diri</label>
                    <input type="date" name="date_lapordiri" class="form-control" id="date_lapordiri" value="{{ old('date_lapordiri', $jawatan->date_lapordiri) }}">
                </div>
                <div class="col-md-6">
                    <label for="date_tempohcubaan" class="form-label">Tarikh Tempoh Cubaan</label>
                    <input type="date" name="date_tempohcubaan" class="form-control" id="date_tempohcubaan" value="{{ old('date_tempohcubaan', $jawatan->date_tempohcubaan) }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="jawatan" class="form-label">Jawatan</label>
                <input type="text" name="jawatan" class="form-control" id="jawatan" value="{{ old('jawatan', $jawatan->jawatan) }}">
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Gaji</label>
                <input type="number" name="salary" class="form-control" id="salary" value="{{ old('salary', $jawatan->salary) }}">
            </div>

            <div class="mb-3">
                <label for="noakaun" class="form-label">No Akaun</label>
                <input type="text" name="noakaun" class="form-control" id="noakaun" value="{{ old('noakaun', $jawatan->noakaun) }}">
            </div>

            <div class="mb-3">
                <label for="noepf" class="form-label">No. EPF</label>
                <input type="text" name="noepf" class="form-control" id="noepf" value="{{ old('noepf', $jawatan->noepf) }}">
            </div>

            <div class="mb-3">
                <label for="nosocso" class="form-label">No. Socso</label>
                <input type="text" name="nosocso" class="form-control" id="nosocso" value="{{ old('nosocso', $jawatan->nosocso) }}">
            </div>

            <div class="mb-3">
                <label for="jumlahcuti" class="form-label">Jumlah Cuti</label>
                <input type="number" name="jumlahcuti" class="form-control" id="jumlahcuti" value="{{ old('jumlahcuti', $jawatan->jumlahcuti) }}" disabled>
            </div>

            <button type="submit" class="btn btn-primary">Kemaskini</button>
            <a href="{{ route('pekerjas.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</x-app-layout>
