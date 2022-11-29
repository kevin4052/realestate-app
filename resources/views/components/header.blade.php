<header class="header">
    <div class="container">
        <a class="header__logo" href="/">Hernandez Realty</a>

        <div class="header__menu">
            <a href="/realestate/home/sale" class="header__menu-link @if(request()->routeIs('listings.index')) header__menu-link--active @endif">Listing</a>
            <a href="#" class="header__menu-link @if(request()->routeIs('property')) header__menu-link--active @endif">Property</a>
            <a href="#" class="header__menu-link @if(request()->routeIs('pages')) header__menu-link--active @endif">Pages</a>
        </div>

        <div class="header__account">
            @if (Route::has('login'))
                    @auth
                        <div class="header__account-link">                        
                            <a href="{{ route('show-status') }}">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </div>
                        <div class="header__account-link">
                            <a href="{{ route('account') }}">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                        {{-- <div class="header__account-link">
                            <a href="{{ url('/dashboard') }}" >Dashboard</a>
                        </div> --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="header__account-link--anchor">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log Out</a>
                            </div>
                        </form>
                    @else
                    <div class="header__account-link--anchor">
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                        @if (Route::has('register'))
                            <div class="header__account-link--anchor">
                                <a href="{{ route('register') }}" >Register</a>
                            </div>
                        @endif
                    @endauth
            @endif
        </div>
    </div>
</header>