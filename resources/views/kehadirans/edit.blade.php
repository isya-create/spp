<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}        
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Kemaskini Maklumat Kehadiran</h1>
        <br>
        <form action="{{ route('kehadirans.update', $kehadiran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_pekerja">Nama:</label>
                <select class="form-control" id="id_pekerja" name="id_pekerja" required disabled>
                    @foreach($pekerjas as $pekerja)
                        <option value="{{ $pekerja->id }}" {{ $pekerja->id == $kehadiran->id_pekerja ? 'selected' : '' }}>{{ $pekerja->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pilihan_jam">Pilihan Jam:</label>
                {{-- <input type="text" class="form-control" id="pilihan_jam" name="pilihan_jam" value="{{ $kehadiran->pilihan_jam }}" required> --}}
                <select class="form-control" id="pilihan_jam" name="pilihan_jam" disabled>
                    <option @if(old('pilihan_jam', $kehadiran->pilihan_jam) == '1') selected @endif value="1">1 JAM</option>
                    <option @if(old('pilihan_jam', $kehadiran->pilihan_jam) == '2') selected @endif value="2">2 JAM</option>
                    <option @if(old('pilihan_jam', $kehadiran->pilihan_jam) == '3') selected @endif value="3">HALF DAY</option>
                </select>
            </div>
            <div class="form-group">
                <label for="waktu_masuk">Waktu Masuk:</label>
                <input type="datetime-local" class="form-control" id="waktu_masuk" name="waktu_masuk" value="{{ $kehadiran->waktu_masuk }}" required>
            </div>
            <div class="form-group">
                <label for="waktu_keluar">Waktu Keluar:</label>
                <input type="datetime-local" class="form-control" id="waktu_keluar" name="waktu_keluar" value="{{ $kehadiran->waktu_keluar }}" required>
            </div>
            <div class="form-group">
                <label for="catatan">Catatan:</label>
                <textarea class="form-control" id="catatan" name="catatan">{{ $kehadiran->catatan }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kemaskini</button>

            <a href="{{ route('kehadirans.index') }}" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</x-app-layout>
