<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}        
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Maklumat Cuti</h1>
        <br>
        <form action="{{ route('cutis.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_pekerjas">Nama:</label>
                <select class="form-control" id="id_pekerjas" name="id_pekerjas" required>
                    @foreach($pekerjas as $pekerja)
                        <option value="{{ $pekerja->id }}">{{ $pekerja->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun:</label>
                <input type="number" class="form-control" id="tahun" name="tahun" required>
            </div>
            <div class="form-group">
                <label for="jenis_cuti">Jenis Cuti:</label>
                <input type="text" class="form-control" id="jenis_cuti" name="jenis_cuti" required>
            </div>
            <div class="form-group">
                <label for="jum_cutibersalin">Jumlah Cuti Bersalin:</label>
                <input type="number" class="form-control" id="jum_cutibersalin" name="jum_cutibersalin" required>
            </div>
            <div class="form-group">
                <label for="date_mulacuti">Tarikh Mula Cuti:</label>
                <input type="date" class="form-control" id="date_mulacuti" name="date_mulacuti" required>
            </div>
            <div class="form-group">
                <label for="date_tamatcuti">Tarikh Tamat Cuti:</label>
                <input type="date" class="form-control" id="date_tamatcuti" name="date_tamatcuti" required>
            </div>
            <div class="form-group">
                <label for="jumcuti">Jumlah Cuti:</label>
                <input type="number" class="form-control" id="jumcuti" name="jumcuti" required>
            </div>
            <div class="form-group">
                <label for="bil_cutidipohon">Bilangan Cuti Dipohon:</label>
                <input type="number" class="form-control" id="bil_cutidipohon" name="bil_cutidipohon" required>
            </div>
            <div class="form-group">
                <label for="bakicuti">Baki Cuti:</label>
                <input type="number" class="form-control" id="bakicuti" name="bakicuti" required>
            </div>
            <div class="form-group">
                <label for="bakikehadapan">Baki Kehadapan:</label>
                <input type="number" class="form-control" id="bakikehadapan" name="bakikehadapan" required>
            </div>
            <div class="form-group">
                <label for="status_permohonan">Status Permohonan:</label>
                <input type="text" class="form-control" id="status_permohonan" name="status_permohonan" required>
            </div>
            <div class="form-group">
                <label for="dokumen">Dokumen:</label>
                <input type="text" class="form-control" id="dokumen" name="dokumen">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- JavaScript to Calculate Total Leave Days -->
    <script>
        document.getElementById('date_mulacuti').addEventListener('change', calculateLeaveDays);
        document.getElementById('date_tamatcuti').addEventListener('change', calculateLeaveDays);

        function calculateLeaveDays() {
            const startDate = document.getElementById('date_mulacuti').value;
            const endDate = document.getElementById('date_tamatcuti').value;

            if (startDate && endDate) {
                const start = new Date(startDate);
                const end = new Date(endDate);
                const timeDiff = end - start;
                const daysDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24)) + 1; // Including the start date

                document.getElementById('bil_cutidipohon').value = daysDiff;
            }
        }
    </script>
</x-app-layout>
