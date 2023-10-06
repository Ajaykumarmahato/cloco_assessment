<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cloco Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
</head>

<body>
    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <li class="nav-link h3 text-white my-2">
                CLOCO
            </li>
            <a href="{{ route('home') }}" class="text-light nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Dashboard</span>
            </a>
            <a href="{{ route('home') }}" class="text-light nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Users</span>
            </a>
            <a class="text-light nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </ul>


    </div>

    <div class="p-1 my-container active-cont">
        <nav class="navbar top-navbar navbar-light bg-light px-5">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
            <div class="d-flex justify-content-center">
                <p>Welcome! {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
            </div>
        </nav>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="{{ asset('backend/js/custom.js') }}"></script>
    @stack('scripts')
</body>

</html>
