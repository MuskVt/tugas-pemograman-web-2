<div>
    <x-app>

        {{-- form  Edit --}}
        <x-slot:title>{{ $title }}</x-slot>

        {{-- data yang berhasil diubah akan divalidasi lalu divalidasi kemudian disimpan --}}
        <form method="POST" action="{{ route('karyawan.update', $karyawan) }}">
            @csrf
            @method('PUT')

            {{-- untuk menampilkan Nama pada label di form Edit --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $karyawan->name) }}"> {{-- untuk memunculkan nama --}}

                {{-- jika validasi gagal akan dikirim pesan --}}
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>

            {{-- untuk menampilkan NIk pada label di form Edit --}}
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik"
                    name="nik" value="{{ old('nik', $karyawan->nik) }}"> {{-- untuk memunculkan nama --}}

                {{-- jika validasi gagal akan dikirim pesan --}}
                @error('nik')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>

            {{-- untuk menampilkan label jenis kelamin pada form Edit --}}
            {{-- === ini fungsinya adalah agar membandingkan nilaidata, tanpa konverensi --}}
            <div class="form-floating mb-3">
                <select class="form-select @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin">
                    <option value="" disabled @selected(old('kelamin', $karyawan->kelamin) === null)>Pilih Jenis Kelamin</option>
                    <option value="laki-laki" @selected(old('kelamin', $karyawan->kelamin) === 'laki-laki')>Laki-Laki</option>
                    <option value="perempuan" @selected(old('kelamin', $karyawan->kelamin) === 'perempuan')>Perempuan</option>
                </select>
                <label for="kelamin">Pilih Jenis Kelamin</label>

                @error('kelamin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- untuk menampilkan label Jabatan pada form Edit --}}
            <div class="form-floating mb-3">
                <select class="form-select @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan">

                    <option value="" disabled @selected(old('jabatan', $karyawan->jabatan) === null)>Pilih Jenis Jabatan</option>
                    <option value="Manejer Produksi" @selected(old('jabatan', $karyawan->jabatan) === 'Manejer Produksi')>Manejer Produksi</option>
                    <option value="Kepala Pabrik" @selected(old('jabatan', $karyawan->jabatan) === 'Kepala Pabrik')>Kepala Pabrik</option>
                    <option value="Kepala Gudang" @selected(old('jabatan', $karyawan->jabatan) === 'Kepala Gudang')>Kepala Gudang</option>
                    <option value="Pekerja Produksi" @selected(old('jabatan', $karyawan->jabatan) === 'Pekerja Produksi')>Pekerja Produksi</option>
                    <option value="Pekerja Gudang" @selected(old('jabatan', $karyawan->jabatan) === 'Pekerja Gudang')>Pekerja Gudang</option>
                </select>
                <label for="jabatan">Pilih Jenis Jabatan</label>

                @error('jabatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- untuk menampilkan tanggal bergabung pada form Edit --}}
            <div class="form-floating mb-3">
                <input type="date" class="form-control @error('tglgabung') is-invalid @enderror"
                    id="floatingTglGabung" name="tglgabung" value="{{ old('tglgabung', $karyawan->tglgabung) }}">
                <label for="floatingTglGabung">Tanggal Bergabung</label>

                @error('tglgabung')
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
