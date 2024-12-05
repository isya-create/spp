
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit Pasangan</h2>
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
            @if ($pasangan)
            <form action="{{ route('pasangans.edit', $pasangan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id_pekerja">ID Pekerja:</label>
                    {{-- <input type="text" name="id_pekerja" value="{{ $pasangan->id_pekerja }}" class="form-control" placeholder="ID Pekerja"> --}}
                    <select class="form-control" id="id_pekerja" name="id_pekerja" required>
                        @foreach($pekerjas as $pekerja)
                            <option value="{{ $pekerja->id }}" {{ $pekerja->id == $pasangan->id_pekerja ? 'selected' : '' }}>{{ $pekerja->nama }}</option>
                        @endforeach
                    </select>
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
        @else
            <p>No pasangan data available.</p>
        @endif
        </div>
    </div>
</div>

