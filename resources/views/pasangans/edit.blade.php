@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- @if ($pasangan) --}}
    <form action="{{ route('pasangans.update', $pasangan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_pekerja">ID Pekerja:</label>           
            <!-- Hidden input to store the id_pekerja value -->
            <input type="text" name="id_pekerja" value="{{ $pasangan->id_pekerja }}">
        
            <!-- Disabled input to display the pekerja name -->
            <input type="text" class="form-control" value="{{ $pekerja->firstWhere('id', $pasangan->id_pekerja)->nama ?? '' }}" placeholder="Nama Pekerja" disabled>
        </div>
        <div class="form-group">
            <label for="nricpasangan">NRIC Pasangan:</label>
            <input type="text" name="nricpasangan" value="{{ $pasangan->nricpasangan }}" class="form-control" placeholder="NRIC Pasangan">
        </div>
        <div class="form-group">
            <label for="namapasangan">Nama Pasangan:</label>
            <input type="text" name="namapasangan" value="{{ $pasangan->namapasangan }}" class="form-control" placeholder="Nama Pasangan">
        </div>
        <div class="form-group">
            <label for="hubungan">Hubungan:</label>
            {{-- <input type="text" name="hubungan" value="{{ $pasangan->hubungan }}" class="form-control" placeholder="Hubungan"> --}}
            <select class="form-control" id="hubungan" name="hubungan" required>
                @foreach($hubungans as $hubungan)
                    <option value="{{ $hubungan->id }}" {{ $pasangan->hubungan == $hubungan->id ? 'selected' : '' }}>{{ $hubungan->description }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="notel">No Tel:</label>
            <input type="text" name="notel" value="{{ $pasangan->notel }}" class="form-control" placeholder="No Tel">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{-- @else
        <p>No pasangan data available.</p>
@endif --}}
       

