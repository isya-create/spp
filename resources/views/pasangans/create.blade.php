<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Pasangan
        </h2>
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Pasangan untuk Pekerja ID: {{ $id_pekerja }}</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pasangans.store') }}" method="POST">        
            @csrf
            <input type="hidden" name="id_pekerja" value="{{ $id_pekerja }}">
            <div class="mb-3">
                <label for="nricpasangan" class="form-label">No. Kad Pengenalan Pasangan</label>
                <input type="text" name="nricpasangan" class="form-control" id="nricpasangan">
            </div>
            <div class="mb-3">
                <label for="namapasangan" class="form-label">Nama Pasangan</label>
                <input type="text" name="namapasangan" class="form-control" id="namapasangan">
            </div>
            <div class="mb-3">
                <label for="hubungan" class="form-label">Hubungan</label>
                <input type="text" name="hubungan" class="form-control" id="hubungan">
            </div>
            <div class="mb-3">
                <label for="notel" class="form-label">No. Telefon</label>
                <input type="text" name="notel" class="form-control" id="notel">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pekerjas.index') }}" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</x-app-layout>
