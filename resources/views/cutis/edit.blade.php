<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}        
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Kemaskini Maklumat Cuti</h1>
        <br>
        <form action="{{ route('cutis.update', $cuti->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_pekerjas">Nama:</label>
                <select class="form-control" id="id_pekerjas" name="id_pekerjas" required disabled>
                    @foreach($pekerjas as $pekerja)
                        <option value="{{ $pekerja->id }}" {{ $pekerja->id == $cuti->id_pekerjas ? 'selected' : '' }}>{{ $pekerja->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun:</label>
                <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $cuti->tahun }}" required disabled>
            </div>
            <div class="form-group">
                <label for="jenis_cuti">Jenis Cuti:</label>
                {{-- <input type="text" class="form-control" id="jenis_cuti" name="jenis_cuti" value="{{ $cuti->jenis_cuti }}" required> --}}
                <select class="form-control" name="jenis_cuti" id="jenis_cuti" required>
                    <option @if(old('jenis_cuti', $cuti->jenis_cuti) == '1') selected @endif value="1">CUTI REHAT</option>
                    <option @if(old('jenis_cuti', $cuti->jenis_cuti) == '2') selected @endif value="2">CUTI SAKIT / MEDICAL LEAVE</option>
                    <option @if(old('jenis_cuti', $cuti->jenis_cuti) == '3') selected @endif value="3">CUTI BERSALIN</option>
                    <option @if(old('jenis_cuti', $cuti->jenis_cuti) == '4') selected @endif value="4">CUTI GANTI OT</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jum_cutibersalin">Jumlah Cuti Bersalin:</label>
                <input type="number" class="form-control" id="jum_cutibersalin" name="jum_cutibersalin" value="{{ $cuti->jum_cutibersalin }}" required>
            </div>
            <div class="form-group">
                <label for="date_mulacuti">Tarikh Mula Cuti:</label>
                <input type="date" class="form-control" id="date_mulacuti" name="date_mulacuti" value="{{ $cuti->date_mulacuti }}" required>
            </div>
            <div class="form-group">
                <label for="date_tamatcuti">Tarikh Tamat Cuti:</label>
                <input type="date" class="form-control" id="date_tamatcuti" name="date_tamatcuti" value="{{ $cuti->date_tamatcuti }}" required>
            </div>
            <div class="form-group">
                <label for="jumcuti">Jumlah Cuti:</label>
                <input type="number" class="form-control" id="jumcuti" name="jumcuti" value="{{ $cuti->jumcuti }}" required>
            </div>
            <div class="form-group">
                <label for="bil_cutidipohon">Bilangan Cuti Dipohon:</label>
                <input type="number" class="form-control" id="bil_cutidipohon" name="bil_cutidipohon" value="{{ $cuti->bil_cutidipohon }}" required>
            </div>
            <div class="form-group">
                <label for="bakicuti">Baki Cuti:</label>
                <input type="number" class="form-control" id="bakicuti" name="bakicuti" value="{{ $cuti->bakicuti }}" required>
            </div>
            {{-- <div class="form-group">
                <label for="bakikehadapan">Baki Kehadapan:</label>
                <input type="number" class="form-control" id="bakikehadapan" name="bakikehadapan" value="{{ $cuti->bakikehadapan }}" required>
            </div> --}}            
            <div class="form-group">
                <label for="status_permohonan">Status Permohonan:</label>
                {{-- <input type="text" class="form-control" id="status_permohonan" name="status_permohonan" value="{{ $cuti->status_permohonan }}" required> --}}
                <select class="form-control" name="status_permohonan" id="status_permohonan" disabled>
                    <option @if(old('status_permohonan', $cuti->status_permohonan) == '1') selected @endif value="1">MOHON</option>
                    <option @if(old('status_permohonan', $cuti->status_permohonan) == '2') selected @endif value="2">LULUS</option>
                    <option @if(old('status_permohonan', $cuti->status_permohonan) == '3') selected @endif value="3">TIDAK LULUS</option>
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="dokumen">Dokumen:</label>
                <input type="text" class="form-control" id="dokumen" name="dokumen" value="{{ $cuti->dokumen }}">
            </div> --}}

            <div class="form-group">
                <label for="dokumen">Dokumen:</label>
                <input type="file" class="form-control" id="dokumen" name="dokumen" value="{{ $cuti->dokumen }}">
            </div>
            <button type="submit" class="btn btn-primary">Kemaskini</button>
            <a href="{{ route('cutis.index') }}" class="btn btn-primary">Kembali</a>
        </form>
    </div>
</x-app-layout>
