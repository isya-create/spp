<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Jawatan
        </h2>
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Jawatan untuk Pekerja ID: {{ $id_pekerja }}</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('jawatans.store') }}" method="POST">
            @csrf
            <input type="hidden" name="id_pekerja" value="{{ $id_pekerja }}">
            
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="date_lapordiri" class="form-label">Tarikh Lapor Diri</label>
                    <input type="date" name="date_lapordiri" class="form-control" id="date_lapordiri">
                </div>
                <div class="col-md-6">
                    <label for="date_tempohcubaan" class="form-label">Tarikh Tempoh Cubaan</label>
                    <input type="date" name="date_tempohcubaan" class="form-control" id="date_tempohcubaan">
                </div>
            </div>

            {{-- <div class="mb-3">
                <label for="id_departments" class="form-label">Jabatan</label>
                <select name="id_departments" class="form-select" id="id_departments">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div> --}}

            <div class="mb-3">
                <label for="jawatan" class="form-label">Jawatan</label>
                <input type="text" name="jawatan" class="form-control" id="jawatan">
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Gaji</label>
                <input type="number" name="salary" class="form-control" id="salary">
            </div>

            {{-- <div class="mb-3">
                <label for="id_banks" class="form-label">Bank</label>
                <select name="id_banks" class="form-select" id="id_banks">
                    @foreach($banks as $bank)
                        <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                    @endforeach
                </select>
            </div> --}}

            <div class="mb-3">
                <label for="noakaun" class="form-label">No Akaun</label>
                <input type="text" name="noakaun" class="form-control" id="noakaun">
            </div>

            <div class="mb-3">
                <label for="noepf" class="form-label">No. EPF</label>
                <input type="text" name="noepf" class="form-control" id="noepf">
            </div>

            <div class="mb-3">
                <label for="nosocso" class="form-label">No. Socso</label>
                <input type="text" name="nosocso" class="form-control" id="nosocso">
            </div>

            <div class="mb-3">
                <label for="jumlahcuti" class="form-label">Jumlah Cuti</label>
                <input type="number" name="jumlahcuti" class="form-control" id="jumlahcuti">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pekerjas.index') }}" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</x-app-layout>
