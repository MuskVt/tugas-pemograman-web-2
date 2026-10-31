<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <ul class="list-group">
        @foreach ($karyawans as $karyawan)
            <li class="list-group-item">{{ $loop->iteration }}. {{ $karyawan->nik }} -- {{ $karyawan->name }}</li>
        @endforeach
    </ul>

</x-app>
