<x-app>
    {{-- form Index --}}

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        {{-- jika berhasil akan mengirimkan pesan berasil --}}
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    {{-- untuk membuat tombol create yang akan membawa ke form Create --}}
    <a class="btn btn-primary mb-3" href="{{ route('karyawan.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($karyawans as $karyawan)
            {{-- untuk menampilakan data menggunakantabel/read menggunakan loop --}}
            <li class="list-group-item">{{ $loop->iteration }}. {{ $karyawan->nik }} -- {{ $karyawan->name }} --
                {{ $karyawan->kelamin }} -- {{ $karyawan->jabatan }} -- {{ $karyawan->tglgabung }}

                {{-- untuk membuat tombol edit di samping nama --}}
                <a class="btn btn-warning btn-sm" href="{{ route('karyawan.edit', $karyawan) }}" role="button">
                    Edit
                </a>

                {{-- jika berhasil akan dikirim ke form delete --}}
                <form action="{{ route('karyawan.destroy', $karyawan) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf

                    {{-- untuk membuat tombol hapus di samping nama --}}
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick= "return confirm('Anda Yakin')">Delete</button>
                </form>

            </li>
        @endforeach
    </ul>

</x-app>
