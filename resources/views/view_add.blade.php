
<x-frame>
    <x-slot:layout_pagetitle>
        Add New
    </x-slot:layout_pagetitle>
    <x-navbar>
</x-navbar>
<div class="card-body">
    <form method="POST" action="{{ url('controller') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="handle" class="form-label">Handle</label>
            <input type="text" class="form-control" id="handle" name="handle">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button name="button_reg" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</x-frame>