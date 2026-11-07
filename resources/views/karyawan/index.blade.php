<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('karyawan.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($karyawans as $karyawan)
            <li class="list-group-item">{{ $loop->iteration }}. {{ $karyawan->nik }} -- {{ $karyawan->name }}
                <a class="btn btn-warning btn-sm" href="{{ route('karyawan.edit', $karyawan) }}" role="button">
                    Edit
                </a>

            </li>
        @endforeach
    </ul>

</x-app>
