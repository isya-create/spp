<x-app-layout>
    <x-slot name="header">
        {{-- 
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2> 
        --}}
    </x-slot>
    <div class="container mt-5">
        {{-- <h1>Details of Pekerja</h1> --}}
        <a href="{{ route('pekerjas.index') }}" class="btn btn-primary mb-3">Kembali</a>
        <div class="card">
            <div class="card-header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight"> Maklumat Pekerja </h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    {{-- 
                        <tr>
                            <th>ID</th>
                            <td>{{ $pekerja->id }}</td>
                        </tr> 
                    --}}
                    <tr>
                        <th>No. Kad Pengenalan</th>
                        <td>{{ $pekerja->nric }}</td>
                    </tr>
                    <tr>
                        <th>Pekerja ID</th>
                        <td>{{ $pekerja->employeeID }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $pekerja->nama }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $pekerja->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Jantina</th>
                        {{-- <td>{{ $pekerja->jantina }}</td>  --}}   
                        @if ($pekerja->jantina == 1)
                            <td>LELAKI</td>
                        @else
                            <td>PEREMPUAN</td>
                        @endif                                           
                    </tr>
                    <tr>
                        <th>Tarikh Lahir</th>
                        <td>{{ $pekerja->tarikhlahir }}</td>
                    </tr>
                    <tr>
                        <th>Agama</th>
                        {{-- <td>{{ $pekerja->agama }}</td> --}}
                        @if ($pekerja->agama == 1)
                            <td>ISLAM</td>
                        @elseif ($pekerja->agama == 2)
                            <td>KRISTIAN</td>
                        @elseif ($pekerja->agama == 3)
                            <td>BUDDHA</td>
                        @elseif ($pekerja->agama == 4)
                            <td>HINDU</td>
                        @elseif ($pekerja->agama == 5)
                            <td>TIADA AGAMA</td>
                        @endif  
                    </tr>
                    <tr>
                        <th>Bangsa</th>
                        {{-- <td>{{ $pekerja->bangsa }}</td> --}}
                        @if ($pekerja->bangsa == 1)
                            <td>MELAYU</td>
                        @elseif ($pekerja->bangsa == 2)
                            <td>CINA</td>
                        @elseif ($pekerja->bangsa == 3)
                            <td>INDIA</td>
                        @elseif ($pekerja->bangsa == 4)
                            <td>LAIN-LAIN</td>                        
                        @endif  
                    </tr>
                    <tr>
                        <th>Kewarganegaraan</th>
                        <td>{{ $pekerja->kewarganegaraan }}</td>
                    </tr>
                    <tr>
                        <th>Status Perkahwinan</th>
                        {{-- <td>{{ $pekerja->statusperkahwinan }}</td> --}}
                        @if ($pekerja->statusperkahwinan == 1)
                            <td>BUJANG</td>
                        @elseif ($pekerja->statusperkahwinan == 2)
                            <td>BERKAHWIN</td>
                        @elseif ($pekerja->statusperkahwinan == 3)
                            <td>DUDA / JANDA</td>                                            
                        @endif  
                    </tr>
                    <tr>
                        <th>No Tel</th>
                        <td>{{ $pekerja->notel }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $pekerja->email }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        {{-- <td>{{ $pekerja->status }}</td> --}}
                        @if ($pekerja->status == 1)
                            <td>AKTIF</td>
                        @elseif ($pekerja->status == 2)
                            <td>TIDAK AKTIF</td>                                                                    
                        @endif 
                    </tr>
                    {{-- <tr>
                        <th>Created At</th>
                        <td>{{ $pekerja->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $pekerja->updated_at }}</td>
                    </tr> --}}
                    
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
