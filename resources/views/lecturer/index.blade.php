<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- Alert Success --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Button Create --}}
    <a class="btn btn-primary mb-3" href="{{ route('lecturer.create') }}">
        Create
    </a>

    {{-- Form Search --}}
    <form action="" method="GET">
        <div class="row g-2 mb-3 align-items-end">

            {{-- Input Search --}}
            <div class="col-md-4">
                <input type="text" class="form-control" name="keyword" placeholder="Search lecturer name ..."
                    value="{{ request('keyword') }}">
            </div>

            {{-- Select Department --}}
            <div class="col-md-4">
                <select class="form-select" name="department_id">
                    <option value="">All Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}"
                            {{ request('department_id') == $department->id ? 'selected' : '' }}>

                            {{ $department->name }}

                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Button --}}
            <div class="col-md-4">
                <button type="submit" class="btn btn-success w-100">
                    Search
                </button>
            </div>

        </div>
    </form>

    {{-- List Data --}}
    <ul class="list-group">
        @foreach ($lecturers as $lecturer)
            <li class="list-group-item">
                {{ $lecturers->firstItem() + $loop->index }}.
                {{ $lecturer->name }} -- {{ $lecturer->department->name }}

                {{-- Tombol dekat teks --}}
                <a href="{{ route('lecturer.edit', $lecturer) }}" class="btn btn-warning btn-sm ms-2">
                    Edit
                </a>

                <form action="{{ route('lecturer.destroy', $lecturer) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm ms-1" onclick="return confirm('Anda yakin?')">
                        Delete
                    </button>
                </form>
            </li>
        @endforeach
    </ul>

    {{-- Pagination --}}
    <div class="mt-3">
        {{ $lecturers->links() }}
    </div>
</x-app>
