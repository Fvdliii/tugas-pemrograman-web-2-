<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>

    <ul class="list-group">
        @foreach ($Penduduks as $penduduk)
            <li class="list-group-item">{{ $loop->iteration }}. {{ $penduduk->nama }} -- {{ $penduduk->email }} --
                {{ $penduduk->nohp }} --
                {{ $penduduk->nik }} -- {{ $penduduk->kelamin }}</li>
        @endforeach

    </ul>
</x-app>
