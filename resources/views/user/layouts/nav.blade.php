<nav class="navbar navbar-expand-lg main-menu">


    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand bordered-btn " href="{{ route('home_page') }}">My Shop</a>

        <!-- Hamburger menu for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main navbar -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('home_page') }}" id="homeDropdown" role="button"
                        data-bs-toggle="dropdown">
                        Home
                    </a>
                    <ul class="dropdown-menu sub-menu">
                        <li><a class="dropdown-item" href="#">Slider Home</a></li>
                    </ul>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about_page') }}">About</a>
                </li>

                <!-- Pages -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button"
                        data-bs-toggle="dropdown">
                        Pages
                    </a>
                    <ul class="dropdown-menu sub-menu">
                        <li><a class="dropdown-item" href="{{ route('page_404') }}">404 Page</a></li>
                        <li><a class="dropdown-item" href="{{ route('about_page') }}">About</a></li>
                        <li><a class="dropdown-item" href="{{ route('cart_page') }}">Cart</a></li>
                        <li><a class="dropdown-item" href="{{ route('checkout_page') }}">Checkout</a></li>
                        <li><a class="dropdown-item" href="{{ route('contact_page') }}">Contact</a></li>
                        <li><a class="dropdown-item" href="{{ route('news_page') }}">News</a></li>
                        <li><a class="dropdown-item" href="{{ route('shop_page') }}">Shop</a></li>
                    </ul>
                </li>

                <!-- News -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('shop_page') }}" id="newsDropdown" role="button"
                        data-bs-toggle="dropdown">
                        News
                    </a>
                    <ul class="dropdown-menu sub-menu">
                        <li><a class="dropdown-item" href="{{ route('shop_page') }}">News</a></li>
                        <li><a class="dropdown-item" href="{{ route('single_news_page') }}">Single News</a></li>
                    </ul>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_page') }}">Contact</a>
                </li>

                <!-- Shop -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('shop_page') }}" id="shopDropdown" role="button"
                        data-bs-toggle="dropdown">
                        Shop
                    </a>
                    <ul class="dropdown-menu sub-menu">
                        <li><a class="dropdown-item" href="{{ route('shop_page') }}">Shop</a></li>
                        <li><a class="dropdown-item" href="{{ route('checkout_page') }}">Checkout</a></li>
                        <li><a class="dropdown-item" href="{{ route('single_product_page') }}">Single Product</a></li>
                        <li><a class="dropdown-item" href="{{ route('cart_page') }}">Cart</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Right Side: Icons + Auth -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- Shopping Cart -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart_page') }}">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>

                <!-- Search Icon -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </li>

                <!-- Auth Dropdown -->
                <!-- Auth Dropdown -->
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
