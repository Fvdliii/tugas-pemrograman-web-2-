<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>

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
                    <td>{{ $penduduk->nama }}</td>
                    <td>{{ $penduduk->email }}</td>
                    <td>{{ $penduduk->nohp }}</td>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->kelamin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>
