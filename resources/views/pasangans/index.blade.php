<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>Pasangans List</h2>
            <a class="btn btn-success mb-2" href="{{ route('pasangans.create') }}">Create New Pasangan</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>ID Pekerja</th>
                    <th>NRIC Pasangan</th>
                    <th>Nama Pasangan</th>
                    <th>Hubungan</th>
                    <th>No Tel</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($pasangans as $pasangan)
                <tr>
                    <td>{{ $pasangan->id }}</td>
                    <td>{{ $pasangan->id_pekerja }}</td>
                    <td>{{ $pasangan->nricpasangan }}</td>
                    <td>{{ $pasangan->namapasangan }}</td>
                    <td>{{ $pasangan->hubungan }}</td>
                    <td>{{ $pasangan->notel }}</td>
                    <td>
                        <form action="{{ route('pasangans.destroy', $pasangan->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('pasangans.show', $pasangan->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('pasangans.edit', $pasangan->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</x-app-layout>
