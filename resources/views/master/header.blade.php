<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/brands')}}">BrandList<span class="sr-only">(current)</span></a>
    </li>
    @if (Auth::user() &&  Auth::user()->isAdmin == 1)
    <li class="nav-item active">

        <a class="nav-link" href="{{url('/brands/create')}}">AddBrand <span class="sr-only">(current)</span></a>
    </li>
    @endif
    <li class="nav-item active">


    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{url('/cars')}}">CarList<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">

        <a class="nav-link" href="{{url('/cars/create')}}">AddCar <span class="sr-only">(current)</span></a>
    </li>
    @guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
        </div>
    </li>
@endguest

<form class="form-inline my-2 my-lg-0" method="GET" action="{{url('/brands')}}">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" autocomplete="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   
</form>
</div>
</nav>
