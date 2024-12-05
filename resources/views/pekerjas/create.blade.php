<x-app-layout>
    <x-slot name="header">
        {{-- 
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2> 
        --}}
    </x-slot>
    <div class="container mt-5">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Maklumat Pekerja</h1>
        <br>
        <form action="{{ route('pekerjas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nric">No. Kad Pengenalan:</label>
                <input type="text" class="form-control" id="nric" name="nric" required>
            </div>
            <div class="form-group">
                <label for="employeeID">Pekerja ID:</label>
                <input type="text" class="form-control" id="employeeID" name="employeeID" required oninput="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required oninput="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" required oninput="this.value = this.value.toUpperCase()"></textarea>
            </div>
            <div class="form-group">
                <label for="jantina">Jantina:</label>
                {{--<input type="text" class="form-control" id="jantina" name="jantina" required>--}}
                <select class="form-control" name="jantina" id="jantina">
                    <option value="">SILA PILIH</option>
                    <option value="1">LELAKI</option>
                    <option value="2">PEREMPUAN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tarikhlahir">Tarikh Lahir:</label>
                <input type="date" class="form-control" id="tarikhlahir" name="tarikhlahir" required>
            </div>
            <div class="form-group">
                <label for="agama">Agama:</label>
                {{--<input type="text" class="form-control" id="agama" name="agama" required>--}}
                <select class="form-control" name="agama" id="agama">
                    <option value="">SILA PILIH</option>
                    <option value="1">ISLAM</option>
                    <option value="2">KRISTIAN</option>
                    <option value="3">BUDDHA</option>
                    <option value="4">HINDU-LAIN</option>
                    <option value="5">TIADA AGAMA</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bangsa">Bangsa:</label>
                {{--<input type="text" class="form-control" id="bangsa" name="bangsa" required>--}}
                <select class="form-control" name="bangsa" id="bangsa">
                    <option value="">SILA PILIH</option>
                    <option value="1">MELAYU</option>
                    <option value="2">CINA</option>
                    <option value="3">INDIA</option>
                    <option value="4">LAIN-LAIN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan:</label>
                <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required oninput="this.value = this.value.toUpperCase()">
            </div>
            <div class="form-group">
                <label for="statusperkahwinan">Status Perkahwinan:</label> 
                {{--<input type="text" class="form-control" id="statusperkahwinan" name="statusperkahwinan" required>--}}               
                <select class="form-control" name="statusperkahwinan" id="statusperkahwinan">
                    <option value="">SILA PILIH</option>
                    <option value="1">BUJANG</option>
                    <option value="2">BERKAHWIN</option>
                    <option value="3">DUDA / JANDA</option>
                </select>                
            </div>
            <div class="form-group">
                <label for="notel">No Tel:</label>
                <input type="text" class="form-control" id="notel" name="notel" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                {{--<input type="text" class="form-control" id="status" name="status" required> --}}
                <select class="form-control" name="status" id="status">
                    <option value="">SILA PILIH</option>
                    <option value="1">AKTIF</option>
                    <option value="2">TIDAK AKTIF</option>
                </select>
        
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
