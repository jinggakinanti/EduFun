<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container-fluid">
        <!-- Logo Section -->
        <div class="col-2 d-flex align-items-center">
            <a class="navbar-brand" href="{{route('home.page')}}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="60" height="54">
            </a>
        </div>

        <!-- Navigation Section -->
        <div class="col-10 d-flex justify-content-center ms-0">
            
                <ul class="navbar-nav ms-auto gap-5">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home.page') ? 'active' : '' }}" aria-current="active" href="{{route('home.page')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('category.page') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('category.page', 1)}}">Data Science</a></li>
                            <li><a class="dropdown-item" href="{{route('category.page', 2)}}">Network Security</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('writer.page') ? 'active' : '' }}" href="{{route('writer.page')}}">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('aboutus.page') ? 'active' : '' }}" href="{{route('aboutus.page')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('popular.page') ? 'active' : '' }}" href="{{route('popular.page')}}">Popular</a>
                    </li>
                </ul>
        </div>
    </div>
</nav>

<style>
        .navbar-nav .nav-link {
            color: #000; 
        }

        .navbar-nav .nav-link:hover {
            color: #3399FF; 
        }

        .navbar-nav .nav-link.active {
            color: #3399FF; 
        }

        .navbar-nav .nav-link {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>