<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Kemaskini Maklumat Pekerja</h1>
        <br>

        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="peribadi-tab" data-toggle="tab" href="#peribadi" role="tab" aria-controls="peribadi" aria-selected="true">Maklumat Peribadi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pasangan-tab" data-toggle="tab" href="#pasangan" role="tab" aria-controls="pasangan" aria-selected="false">Maklumat Pasangan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="heir-tab" data-toggle="tab" href="#heir" role="tab" aria-controls="heir" aria-selected="false">Maklumat Waris</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="jawatan-tab" data-toggle="tab" href="#jawatan" role="tab" aria-controls="jawatan" aria-selected="false">Maklumat Jawatan</a>
            </li>
        </ul>
        <br>
        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <!-- Maklumat Peribadi -->
            <div class="tab-pane fade show active" id="peribadi" role="tabpanel" aria-labelledby="peribadi-tab">
                <form action="{{ route('pekerjas.update', $pekerja->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nric">No. Kad Pengenalan:</label>
                        <input type="text" class="form-control" id="nric" name="nric" value="{{ $pekerja->nric }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="employeeID">ID Pekerja:</label>
                        <input type="text" class="form-control" id="employeeID" name="employeeID" value="{{ $pekerja->employeeID }}" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $pekerja->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat" required>{{ $pekerja->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="jantina">Jantina:</label>
                        <select class="form-control" id="jantina" name="jantina" required>
                            @foreach($genders as $gender)
                                <option value="{{ $gender->id }}" {{ $pekerja->jantina == $gender->id ? 'selected' : '' }}>{{ $gender->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tarikhlahir">Tarikh Lahir:</label>
                        <input type="date" class="form-control" id="tarikhlahir" name="tarikhlahir" value="{{ $pekerja->tarikhlahir }}" required>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama:</label>
                        <select class="form-control" id="agama" name="agama" required>
                            @foreach($agamas as $agama)
                                <option value="{{ $agama->id }}" {{ $pekerja->agama == $agama->id ? 'selected' : '' }}>{{ $agama->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bangsa">Bangsa:</label>
                        <select class="form-control" id="bangsa" name="bangsa" required>
                            @foreach($bangsas as $bangsa)
                                <option value="{{ $bangsa->id }}" {{ $pekerja->bangsa == $bangsa->id ? 'selected' : '' }}>{{ $bangsa->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kewarganegaraan">Kewarganegaraan:</label>
                        <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="{{ $pekerja->kewarganegaraan }}" required>
                    </div>
                    <div class="form-group">
                        <label for="statusperkahwinan">Status Perkahwinan:</label>
                        <select class="form-control" id="statusperkahwinan" name="statusperkahwinan" required>
                            @foreach($maritals as $marital)
                                <option value="{{ $marital->id }}" {{ $pekerja->statusperkahwinan == $marital->id ? 'selected' : '' }}>{{ $marital->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="notel">No Tel:</label>
                        <input type="text" class="form-control" id="notel" name="notel" value="{{ $pekerja->notel }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $pekerja->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>                
                        <select class="form-control" id="status" name="status" required disabled>
                            @foreach($statuses as $status)
                                <option value="{{ $status->id }}" {{ $pekerja->status == $status->id ? 'selected' : '' }}>{{ $status->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Kemaskini</button>
                    <a href="{{ route('pekerjas.index') }}" class="btn btn-primary">Kembali</a>
                </form>
            </div>

            <!-- Maklumat Pasangan -->
            <div class="tab-pane fade" id="pasangan" role="tabpanel" aria-labelledby="pasangan-tab">
                @if ($pasangan)
                    <form action="{{ route('pasangans.update', $pasangan->id) }}" method="POST">
                        @include('pasangans.edit', ['pasangan' => $pasangan])
                    </form>
                @else
                        {{-- <p>No pasangan data available.</p> --}}
                    <form action="/updatePasangan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_pekerja">ID Pekerja:</label>
                            {{-- <input type="text" name="id_pekerja" class="form-control" placeholder="ID Pekerja"> --}}                            
                            <input type="text" class="form-control" id="id_pekerja" name="id_pekerja" value="{{ $pekerja->nama }}" required disabled>
                        </div>
                        <div class="form-group">
                            <label for="nricpasangan">NRIC Pasangan:</label>
                            <input type="text" name="nricpasangan" class="form-control" placeholder="NRIC Pasangan">
                        </div>
                        <div class="form-group">
                            <label for="namapasangan">Nama Pasangan:</label>
                            <input type="text" name="namapasangan" class="form-control" placeholder="Nama Pasangan">
                        </div>
                        <div class="form-group">
                            <label for="hubungan">Hubungan:</label>
                            <input type="text" name="hubungan" class="form-control" placeholder="Hubungan">
                        </div>
                        <div class="form-group">
                            <label for="notel">No Tel:</label>
                            <input type="text" name="notel" class="form-control" placeholder="No Tel">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                @endif
            </div>

            <!-- Maklumat Waris -->
            {{-- <div class="tab-pane fade" id="heir" role="tabpanel" aria-labelledby="heir-tab">    
                <form action="{{ route('heirs.update', $heir->id) }}" method="POST">            
                    @include('heirs.edit', ['heir' => $heir]) 
                </form>               
            </div>             --}}
        </form>
    </div>
</div>
</x-app-layout>