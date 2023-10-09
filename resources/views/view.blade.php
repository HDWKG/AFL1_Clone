
<x-frame>
    <x-slot:layout_pagetitle>
        Home
    </x-slot:layout_pagetitle>
    <x-navbar>
</x-navbar>
<h1 class="text-center">Data</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Handle</th>
            <th scope="col">Class</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $counter = 0;
        $dummyData = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'handle' => 'johndoe', 'class' => 'A'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'handle' => 'janesmith', 'class' => 'B'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'handle' => 'bobjohnson', 'class' => 'C'],
        ];
        @endphp
        @foreach ($dummyData as $data)
        @php
        $counter++;
        @endphp
        <tr>
            <th scope="row"> {{ $counter }}</th>
            <td>{{ $data['name'] }}</td>
            <td>{{ $data['email'] }}</td>
            <td>{{ '@' . $data['handle'] }}</td>
            <td>{{ $data['class'] }}</td>
            <td>
                <a href="{{ url('view_update', ['updateID' => $counter]) }}">
                    <button class="btn btn-warning">Update</button>
                </a>
                <a href="{{ url('controller', ['deleteID' => $counter]) }}">
                    <button class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



</x-frame>