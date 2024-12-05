<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
    <div class="container mt-5">
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

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pekerja</th>
                <th>Nama Waris</th>
                <th>Alamat</th>
                <th>Hubungan</th>
                <th>No Tel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($heirs as $item)
                <tr>
                    <td>{{ $item->id_pekerja }}</td>
                    <td>{{ $item->namawaris }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->hubungan }}</td>
                    <td>{{ $item->notel }}</td>
                    <td>
                        <a href="{{ route('heirs.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('heirs.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>