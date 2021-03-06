<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/blog">Blog</a>
                </li>
            <li class="nav-item">
            <a class="nav-link active" href="/about">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="/contact">Contact</a>
            </li>
            
            @if(Auth::check())
            <li  class="nav-item dropdown " >
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Hello {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('posts.index')}}">Posts</a></li>
            <li><a class="dropdown-item" href="">o actiune viitoare</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="#" onclick="document.getElementById('logout-form').submit();" class="dropdown-item"> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form></li>
            @else
            <a href="{{route('login')}}" class="btn btn-default">Login</a>
            <a href="{{route('register')}}" class="btn btn-default">Register here</a>

            @endif
    </div>
</nav>