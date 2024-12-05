<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>Create New Pasangan</h2>
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
            <form action="{{ route('pasangans.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_pekerja">ID Pekerja:</label>
                    <input type="text" name="id_pekerja" class="form-control" placeholder="ID Pekerja">
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
        </div>
    </div>
</div>
</x-app-layout>
