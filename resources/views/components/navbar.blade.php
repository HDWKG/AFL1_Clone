<style>
    .navbar-nav .nav-item.active a.nav-link {
        font-weight: bold;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::is('new') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/new') }}">New Member</a>
                </li>
                <li class="nav-item {{ Request::is('assoc') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/assoc') }}">Associate</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
