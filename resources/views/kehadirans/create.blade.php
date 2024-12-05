<!DOCTYPE html>
<html>
<head>
    <title>Create Kehadiran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Create Kehadiran</h1>
        <form action="{{ route('kehadirans.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_pekerja">ID Pekerja:</label>
                <select class="form-control" id="id_pekerja" name="id_pekerja" required>
                    @foreach($pekerjas as $pekerja)
                        <option value="{{ $pekerja->id }}">{{ $pekerja->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pilihan_jam">Pilihan Jam:</label>
                <input type="text" class="form-control" id="pilihan_jam" name="pilihan_jam" required>
            </div>
            <div class="form-group">
                <label for="waktu_masuk">Waktu Masuk:</label>
                <input type="time" class="form-control" id="waktu_masuk" name="waktu_masuk" required>
            </div>
            <div class="form-group">
                <label for="waktu_keluar">Waktu Keluar:</label>
                <input type="time" class="form-control" id="waktu_keluar" name="waktu_keluar" required>
            </div>
            <div class="form-group">
                <label for="catatan">Catatan:</label>
                <textarea class="form-control" id="catatan" name="catatan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
