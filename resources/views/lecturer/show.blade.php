<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- Button Back --}}
    <a class="btn btn-warning mb-3" href="{{ route('lecturer.index') }}">
        Back
    </a>

    {{-- Lecturer Detail --}}
    <h6>data lecturer</h6>
    <ul class="list-group mb-3">

        <li class="list-group-item">
            <strong>Name:</strong> {{ $lecturer->name }}
        </li>
        <li class="list-group-item">
            <strong>Created At:</strong>
            {{ $lecturer->created_at->format('d M Y H:i') }}
        </li>
        <li class="list-group-item">
            <strong>Last Update:</strong>
            {{ $lecturer->updated_at->format('d M Y H:i') }}
        </li>
    </ul>


    </ul>
</x-app>
