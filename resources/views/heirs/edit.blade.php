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
    @if ($heir)
    <form action="{{ route('heirs.update', $heir->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id_pekerja">ID Pekerja:</label>
            <input type="text" name="id_pekerja" value="{{ $heir->id_pekerja }}" class="form-control" id="id_pekerja" required>
        </div>

        <div class="form-group">
            <label for="namawaris">Nama Waris:</label>
            <input type="text" name="namawaris" value="{{ $heir->namawaris }}" class="form-control" id="namawaris" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="{{ $heir->alamat }}" class="form-control" id="alamat" required>
        </div>

        <div class="form-group">
            <label for="hubungan">Hubungan:</label>
            <input type="text" name="hubungan" value="{{ $heir->hubungan }}" class="form-control" id="hubungan" required>
        </div>

        <div class="form-group">
            <label for="notel">No Tel:</label>
            <input type="text" name="notel" value="{{ $heir->notel }}" class="form-control" id="notel" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @else
        <p>No pasangan data available.</p>
    @endif
