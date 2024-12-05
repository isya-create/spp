<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
<div class="container mt-5">
    <h2>Create New Heir</h2>
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

    <form action="{{ route('heirs.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="id_pekerja">ID Pekerja:</label>
            <input type="text" name="id_pekerja" class="form-control" id="id_pekerja" required>
        </div>

        <div class="form-group">
            <label for="namawaris">Nama Waris:</label>
            <input type="text" name="namawaris" class="form-control" id="namawaris" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" class="form-control" id="alamat" required>
        </div>

        <div class="form-group">
            <label for="hubungan">Hubungan:</label>
            <input type="text" name="hubungan" class="form-control" id="hubungan" required>
        </div>

        <div class="form-group">
            <label for="notel">No Tel:</label>
            <input type="text" name="notel" class="form-control" id="notel" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</x-app-layout>