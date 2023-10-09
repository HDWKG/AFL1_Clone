
<x-frame>
    <x-slot:layout_pagetitle>
        Asspciate
    </x-slot:layout_pagetitle>
    <x-navbar>
</x-navbar>
<div class="card-body">
    <h1>Associate Employees with Classes</h1>
    <form method="POST" action="{{ url('controller') }}">
        @csrf
        <div class="mb-3">
            <label for="employee" class="form-label">Select Student:</label>
            <select class="form-select" id="employee" name="employee">
                <option value="">Select a Student</option>
                @php
                $students = [
                    1 => ['name' => 'John Doe'],
                    2 => ['name' => 'Jane Smith'],
                    3 => ['name' => 'Bob Johnson'],
                ];
                @endphp
                @foreach ($students as $i => $student)
                <option value="{{ $i }}">{{ $student['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Select Class:</label>
            <select class="form-select" id="class" name="class">
                <option value="">Select a Class</option>
                @php
                $classes = [
                    1 => 'Class A',
                    2 => 'Class B',
                    3 => 'Class C',
                ];
                @endphp
                @foreach ($classes as $i => $class)
                <option value="{{ $i }}">{{ $class }}</option>
                @endforeach
            </select>
        </div>

        <button name="assoc" type="submit" class="btn btn-primary">Associate</button>
    </form>
    <br><br>
    <form method="POST" action="{{ url('controller') }}">
        @csrf
        <label for="class" class="form-label">Select Class:</label>
        <select class="form-select" id="class" name="class">
            <option value="">Select a Class</option>
            @php
            $classes = [
                1 => 'Class A',
                2 => 'Class B',
                3 => 'Class C',
            ];
            @endphp
            @foreach ($classes as $i => $class)
            <option value="{{ $i }}">{{ $class }}</option>
            @endforeach
        </select>
        <br>
        <button name="update" type="submit" class="btn btn-warning">Update</button>
        <button name="delete" type="submit" class="btn btn-danger">Delete</button>
    </form>

    <br><br>
    <h1>Add New Class</h1>
    <form method="POST" action="{{ url('controller') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <button name="button_addClass" type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

</x-frame>