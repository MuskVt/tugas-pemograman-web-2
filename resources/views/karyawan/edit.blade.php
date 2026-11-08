<div>
    <x-app>

        {{-- form  Edit --}}
        <x-slot:title>{{ $title }}</x-slot>

        {{-- data yang berhasil diubah akan divalidasi lalu divalidasi kemudian disimpan --}}
        <form method="POST" action="{{ route('karyawan.update', $karyawan) }}">
            @csrf
            @method('PUT')

            {{-- untuk menampilkan Nama pada label di form create --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $karyawan->name) }}"> {{-- untuk memunculkan nama --}}

                {{-- jika validasi gagal akan dikirim pesan --}}
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>

            {{-- untuk menampilkan NIk pada label di form create --}}
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik"
                    name="nik" value="{{ old('nik', $karyawan->nik) }}"> {{-- untuk memunculkan nama --}}

                {{-- jika validasi gagal akan dikirim pesan --}}
                @error('nik')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>

            {{-- tombol kembali --}}
            <a class="btn btn-warning" href="{{ route('karyawan.index') }}" role="button">Cancel</a>

            {{-- Tombol Kirim/sumbit --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </x-app>

</div>
