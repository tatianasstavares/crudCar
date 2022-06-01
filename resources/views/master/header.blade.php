<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/brands')}}">BrandList<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">

        <a class="nav-link" href="{{url('/brands/create')}}">AddBrand <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/cars')}}">CarList<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">

        <a class="nav-link" href="{{url('/cars/create')}}">AddCar <span class="sr-only">(current)</span></a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{url('/owns')}}">Owner</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/countries')}}">Countries</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/brands')}}">Brand</a> --}}
    {{-- </li> --}}

<form class="form-inline my-2 my-lg-0" method="GET" action="{{url('/brands')}}">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" autocomplete="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>