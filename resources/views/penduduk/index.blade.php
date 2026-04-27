<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('Penduduk.create') }}" role="button">Create</a>

    <table class="table table-bordered ">
        <thead class="table-secondary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>NIK</th>
                <th>Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Penduduks as $penduduk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penduduk->nama }} <a class="btn btn-warning float-end btn-sm"
                            href="{{ route('Penduduk.edit', $penduduk) }}" role="button">Edit</a>
                        <form action="{{ route('Penduduk.destroy', $penduduk) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger btn-sm d-inline"
                                onclick="return confirm('Apakah anda ingin menghapus data?')">Delete</button>
                        </form>
                    </td>
                    <td>{{ $penduduk->email }}</td>
                    <td>{{ $penduduk->nohp }}</td>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->kelamin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>
