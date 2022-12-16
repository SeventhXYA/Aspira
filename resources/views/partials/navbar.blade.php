<div class="navbar bg-base-100  ">
    @if (auth()->user()->level_id == 1)
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100   rounded-box w-52">
                    <li>
                        <a href="#">Self-Development</a>
                    </li>
                    <li>
                        <a href="#">Bisnis/Profit</a>
                    </li>
                    <li>
                        <a href="#">Kelembagaan</a>
                    </li>
                    <li>
                        <a href="#">Inovasi/Creativity</a>
                    </li>
                    <li><a href={{ route('datapengguna') }}>Data Pengguna</a></li>
                </ul>
            </div>
            <a href="/" class="btn btn-ghost normal-case text-xl">GEN:PERMATA</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal p-0 ">
                <li>
                    <a href="">
                        Long Term Target
                    </a>
                </li>
                <li>
                    <a>Weekly Plan</a>
                </li>
                <li>
                    <a>Self-Development</a>
                </li>
                <li>
                    <a>Bisnis/Profit</a>
                </li>
                <li>
                    <a>Kelembagaan</a>
                </li>
                <li>
                    <a>Inovasi/Creativity</a>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://placeimg.com/80/80/people" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100   rounded-box w-52">
                    <li>
                        <a class="justify-between" href={{ route('profile') }}>
                            Profil
                        </a>
                    </li>
                    <li>
                        <a>Rekap Daily</a>
                    </li>
                    <li>
                        <a>Rekap Weekly</a>
                    </li>
                    <li>
                        <a>Rekap LTT</a>
                    </li>
                    <li>
                        <a>
                            <form action={{ route('logout') }} method="POST">
                                @csrf
                                <button type="submit">
                                    Keluar
                                </button>
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    @endif
    @if (auth()->user()->level_id == 2)
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100   rounded-box w-52">
                    <li><a href={{ route('longterm') }}>Long Term Target</a></li>
                    <li><a href={{ route('weekly') }}>Weekly Plan</a></li>
                    <li>
                        <a href={{ route('dailysd') }}>Self-Development</a>
                    </li>
                    <li>
                        <a href={{ route('dailybp') }}>Bisnis/Profit</a>
                    </li>
                    <li>
                        <a href={{ route('dailykl') }}>Kelembagaan</a>
                    </li>
                    <li>
                        <a href={{ route('dailyic') }}>Inovasi/Creativity</a>
                    </li>
                </ul>
            </div>
            <a href="/" class="btn btn-ghost normal-case text-xl">GEN:PERMATA</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal p-0 ">
                <li>
                    <a href={{ route('longterm') }}>Long Term Target</a>
                </li>
                <li>
                    <a href={{ route('weekly') }}>Weekly Plan</a>
                </li>
                <li>
                    <a href={{ route('dailysd') }}>Self-Development</a>
                </li>
                <li>
                    <a href={{ route('dailybp') }}>Bisnis/Profit</a>
                </li>
                <li>
                    <a href={{ route('dailykl') }}>Kelembagaan</a>
                </li>
                <li>
                    <a href={{ route('dailyic') }}>Inovasi/Creativity</a>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://placeimg.com/80/80/people" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100   rounded-box w-52">
                    <li>
                        <a class="justify-between" href={{ route('profile') }}>
                            Profil
                        </a>
                    </li>
                    <li>
                        <a>Rekap Daily</a>
                    </li>
                    <li>
                        <a>Rekap Weekly</a>
                    </li>
                    <li>
                        <a>Rekap LTT</a>
                    </li>
                    <li>
                        <a>
                            <form action={{ route('logout') }} method="POST">
                                @csrf
                                <button type="submit">
                                    Keluar
                                </button>
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    @endif
</div>
