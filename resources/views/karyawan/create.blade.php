<x-app>

    {{-- form Create  --}}
    <x-slot:title>{{ $title }}</x-slot>

    {{-- data yang berhasil di buat akan dikirim ke store untuk divalidasi kemudian disimpan --}}
    <form method="POST" action="{{ route('karyawan.store') }}">
        @csrf
        {{-- untuk menampilkan label Nama pada form create --}}
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">

            {{-- jika validasi akan dikirim pesan --}}
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        {{-- untuk menampilkan label Nik pada form create --}}
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                value="{{ old('nik') }}">

            {{-- jika validasi akan dikirim pesan --}}
            @error('nik')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        {{-- tombol batal --}}
        <a class="btn btn-warning" href="{{ route('karyawan.index') }}" role="button">Cancel</a>
        {{-- tombol kirim --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-app>
