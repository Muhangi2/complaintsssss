<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgba(14, 29, 52, 0.9);">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1><i class="display-5 text-light">CMS</i></h1>
        </a>
        {{-- 
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i> --}}
        <nav id="navbar" class="navbar">
            @if (Route::has('login'))
                <ul>
                    @auth
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                        <li><a href="{{ route('inbox.index') }}">Inbox</a></li>
                        <li><a href="{{ route('sent.index') }}">Sent</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    @else
                        <li><a class="get-a-quote" href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- End Header -->
