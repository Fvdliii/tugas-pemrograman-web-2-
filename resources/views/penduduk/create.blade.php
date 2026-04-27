<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>

    <form method="POST" action="{{ route('Penduduk.store') }}">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                value="{{ old('nama') }}">

            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                name="email" value="{{ old('email') }}">

            @error('email')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nohp" class="form-label">No. Handphone</label>
            <input type="number" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp"
                value="{{ old('nohp') }}">

            @error('nohp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                value="{{ old('nim') }}">

            @error('nik')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">
            <label for="kelamin" class="form-label">Kelamin</label>
            <select class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin">
                <option value="">-- Pilih Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            @error('kelamin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-danger" href="{{ route('Penduduk.index') }}" role="button">Kembali</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-app>
