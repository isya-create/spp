<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Waris
        </h2>
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Waris untuk Pekerja ID: {{ $id_pekerja }}</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('heirs.store') }}" method="POST">
            @csrf
            <input type="hidden" name="id_pekerja" value="{{ $id_pekerja }}">
            <div class="mb-3">
                <label for="namawaris" class="form-label">Nama Waris</label>
                <input type="text" name="namawaris" class="form-control" id="namawaris">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat"></textarea>
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
