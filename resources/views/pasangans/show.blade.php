<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>Show Pasangan Details</h2>
            <div class="card">
                <div class="card-header">
                    <h3>Pasangan Information</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Pekerja:</strong>
                        <p>{{ $pasangan->id_pekerja }}</p>
                    </div>
                    <div class="form-group">
                        <strong>NRIC Pasangan:</strong>
                        <p>{{ $pasangan->nricpasangan }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Nama Pasangan:</strong>
                        <p>{{ $pasangan->namapasangan }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Hubungan:</strong>
                        <p>{{ $pasangan->hubungan }}</p>
                    </div>
                    <div class="form-group">
                        <strong>No Tel:</strong>
                        <p>{{ $pasangan->notel }}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{ route('pasangans.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
