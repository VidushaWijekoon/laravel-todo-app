<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Todo List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('todo') }}">Todo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('banner') }}">Banner</a>
                </li>
            </ul>
            <!-- Authentication -->
            @if (Auth()->user())
            <a class="mx-2" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out mx-2"></i>{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <span><a href="{{ route('login') }}" class="mx-2">Login</a></span>
            <span><a href="{{ route('login') }}" class="mx-2">Register</a></span>
            @endif
        </div>
    </div>
</nav>

<style>
    a {
        text-decoration: none;
        color: rgb(116, 29, 8)
    }
</style>