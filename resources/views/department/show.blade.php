<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- Button Back --}}
    <a class="btn btn-warning mb-3" href="{{ route('department.index') }}">
        Back
    </a>

    {{-- Department Detail --}}
    <h6>data department</h6>
    <ul class="list-group mb-3">

        <li class="list-group-item">
            <strong>Name:</strong> {{ $department->name }}
        </li>
        <li class="list-group-item">
            <strong>Created At:</strong>
            {{ $department->created_at->format('d M Y H:i') }}
        </li>
        <li class="list-group-item">
            <strong>Last Update:</strong>
            {{ $department->updated_at->format('d M Y H:i') }}
        </li>
    </ul>

    {{-- Lecturer --}}
    <h6>data lecturers</h6>
    <ul class="list-group mb-3">

        @foreach ($department->lecturer as $lecturer)
            <li class="list-group-item">{{ $lecturer->name }}</li>
        @endforeach

    </ul>
</x-app>
