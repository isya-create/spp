<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}        
    </x-slot>
    <div class="container mt-5">
    {{-- <h1 class="font-semibold text-xl text-gray-800 leading-tight">Perincian Cuti Pegawai</h1>
        <br> --}}
        <a href="{{ route('cutis.index') }}" class="btn btn-primary mb-3">Kembali</a>
        <div class="card">
            <div class="card-header">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">Maklumat Cuti</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                   {{-- <tr>
                        <th>ID</th>
                        <td>{{ $cuti->id }}</td>
                    </tr> --}} 
                    <tr>
                        <th>Nama</th>
                        {{-- <td>{{ $cuti->id_pekerjas }}</td> --}}
                        @if ($cuti->id_pekerjas == 2)
                            <td>NUR HAZIRAH BINTI MOHAMAD AZAHARI</td>
                        @elseif ($cuti->id_pekerjas == 3)
                            <td>MOHAMAD FAHMI BIN MOHAMAD BAJURI</td>
                        @elseif ($cuti->id_pekerjas == 4)
                            <td>NOR SYAFAATUL BINTI MOHAMAD AZHAR</td>
                        @elseif ($cuti->id_pekerjas == 5)
                            <td>SITI NURSYAHIRAH BINTI RAHMAT</td>
                        @elseif ($cuti->id_pekerjas == 6)
                            <td>NURSYAFIQAH AINA BINTI KAMARUDDIN</td>
                        @elseif ($cuti->id_pekerjas == 7)
                            <td>NUR AISHAH MOHD RASHED</td>
                        @elseif ($cuti->id_pekerjas == 9)
                            <td>MUHAMMAD IQBAL BIN HASANAN</td>
                        @endif   
                    </tr>
                    <tr>
                        <th>Tahun</th>
                        <td>{{ $cuti->tahun }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Cuti</th>
                        {{-- <td>{{ $cuti->jenis_cuti }}</td> --}}
                        @if ($cuti->jenis_cuti == 1)
                                <td>CUTI REHAT</td>
                            @elseif ($cuti->jenis_cuti == 2)
                                <td>CUTI SAKIT / MEDICAL LEAVE</td>
                            @elseif ($cuti->jenis_cuti == 3)
                                <td>CUTI BERSALIN</td>
                            @elseif ($cuti->jenis_cuti == 4)
                                <td>CUTI GANTI OT</td>                        
                            @endif  
                    </tr>
                    <tr>
                        <th>Jumlah Cuti Bersalin</th>
                        <td>{{ $cuti->jum_cutibersalin }}</td>
                    </tr>
                    <tr>
                        <th>Tarikh Mula Cuti</th>
                        <td>{{ $cuti->date_mulacuti }}</td>
                    </tr>
                    <tr>
                        <th>Tarikh Tamat Cuti</th>
                        <td>{{ $cuti->date_tamatcuti }}</td>
                    </tr>
                    <tr>
                        <th>Jumlah Cuti</th>
                        <td>{{ $cuti->jumcuti }}</td>
                    </tr>
                    <tr>
                        <th>Bilangan Cuti Dipohon</th>
                        <td>{{ $cuti->bil_cutidipohon }}</td>
                    </tr>
                    <tr>
                        <th>Baki Cuti</th>
                        <td>{{ $cuti->bakicuti }}</td>
                    </tr>
                    {{--  
                    <tr>
                        <th>Baki Kehadapan</th>
                        <td>{{ $cuti->bakikehadapan }}</td>
                    </tr>                    
                    --}}                    
                    <tr>
                        <th>Status Permohonan</th>                        
                        {{-- <td>{{ $cuti->status_permohonan }}</td> --}}                         
                        @if ($cuti->status_permohonan == 1)
                            <td>MOHON</td>
                        @elseif ($cuti->status_permohonan == 2)
                            <td>LULUS</td>
                        @elseif ($cuti->status_permohonan == 3)
                            <td>TIDAK LULUS</td>                                              
                        @endif
                        
                    {{-- <tr>
                        <th>Dokumen</th>
                        <td>{{ $cuti->dokumen }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $cuti->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $cuti->updated_at }}</td>
                    </tr> --}}
                    
                </table>
                {{-- <form action="{{ route('cutis.destroy', $cuti->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form> --}}                
            </div>
        </div>
    </div>
</x-app-layout>
