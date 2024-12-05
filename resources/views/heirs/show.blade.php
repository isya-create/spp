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

    <div class="form-group">
        <label for="id_pekerja">ID Pekerja:</label>
        <input type="text" name="id_pekerja" value="{{ $heir->id_pekerja }}" class="form-control" id="id_pekerja" readonly>
    </div>

    <div class="form-group">
        <label for="namawaris">Nama Waris:</label>
        <input type="text" name="namawaris" value="{{ $heir->namawaris }}" class="form-control" id="namawaris" readonly>
    </div>

    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="{{ $heir->alamat }}" class="form-control" id="alamat" readonly>
    </div>

    <div class="form-group">
        <label for="hubungan">Hubungan:</label>
        <input type="text" name="hubungan" value="{{ $heir->hubungan }}" class="form-control" id="hubungan" readonly>
    </div>

    <div class="form-group">
        <label for="notel">No Tel:</label>
        <input type="text" name="notel" value="{{ $heir->notel }}" class="form-control" id="notel" readonly>
    </div>

    <a href="{{ route('heirs.index') }}" class="btn btn-primary">Back</a>