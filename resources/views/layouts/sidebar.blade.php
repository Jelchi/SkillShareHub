{{-- Menggunakan Komponen Offcanvas Bootstrap --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="mainSidebar" aria-labelledby="mainSidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mainSidebarLabel">
             <a class="navbar-brand" href="{{ url('/') }}">
                SkillShareHub
            </a>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        {{-- Navigasi disusun secara vertikal --}}
        <nav class="nav flex-column">
            <a class="nav-link" href="{{ route('home') }}">{{ __('navbar.home') }}</a>


            @auth
                {{-- HANYA TAMPIL SETELAH LOGIN --}}
                <hr> {{-- Pemisah visual --}}
                <a class="nav-link" href="{{ route('buyer') }}">{{ __('navbar.buyer') }}</a>
                <a class="nav-link" href="{{ route('seller') }}">{{ __('navbar.seller') }}</a>
                <a class="nav-link" href="{{ route('orders') }}">{{ __('navbar.my_order') }}</a>
                <a class="nav-link" href="{{ route('notification') }}">
                    {{ __('navbar.notification') }}
                    {{-- <span class="badge bg-danger">3</span> --}}
                </a>
                <a class="nav-link" href="{{ route('achievements') }}">{{ __('navbar.achievements') }}</a>
            @endauth


            <hr> {{-- Pemisah visual --}}
           
            @guest
                {{-- SEBELUM LOGIN --}}
                <a class="nav-link" href="{{ route('login') }}">{{ __('navbar.login') }}</a>
                <a class="nav-link" href="{{ route('register') }}">{{ __('navbar.register') }}</a>
            @else
                {{-- SETELAH LOGIN --}}
                <a class="nav-link" href="{{ route('profile.edit') }}">{{ __('navbar.profile') }}</a>


                {{-- Tautan Logout --}}
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
                    {{ __('navbar.logout') }}
                </a>
                <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </nav>
    </div>
</div>
