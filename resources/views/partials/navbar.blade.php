<div class="navbar bg-neutral text-white">
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
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-neutral rounded-box w-52">
                    <li tabindex="0" class="lg:hidden">
                        <a class="justify-between">
                            Longterm Target
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral">
                            {{-- <li>
                                <a>Laporan Evaluasi</a>
                            </li> --}}
                            <li>
                                <a href={{ route('admin.pending') }}>Longterm Tertunda</a>
                            </li>
                            <li>
                                <a href={{ route('admin.approved') }}>Longterm Disetujui</a>
                            </li>
                            <li>
                                <a href={{ route('admin.declined') }}>Longterm Ditolak</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li tabindex="0" class="lg:hidden">
                        <a class="justify-between">
                            Weekly
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral">
                            <li>
                                <a>Ev. Self-Development</a>
                            </li>
                            <li>
                                <a>Ev. Bisnis & Profit</a>
                            </li>
                            <li>
                                <a>Ev. Kelembagaan</a>
                            </li>
                            <li>
                                <a>Ev. Inovasi & Creativity</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="{{ route('dailysd.viewadmin') }}">Self-Development</a>
                    </li>
                    <li>
                        <a href="{{ route('dailybp.viewadmin') }}">Bisnis/Profit</a>
                    </li>
                    <li>
                        <a href="{{ route('dailykl.viewadmin') }}">Kelembagaan</a>
                    </li>
                    <li>
                        <a href="{{ route('dailyic.viewadmin') }}">Inovasi/Creativity</a>
                    </li>
                    <li><a href="{{ route('datapengguna') }}">Data Pengguna</a></li>
                    <li>
                        <a href="{{ route('recordinterval') }}">Record Interval</a>
                    </li>
                </ul>
            </div>
            <a href="/" class="btn btn-ghost normal-case text-xl">GEN:PERMATA</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal p-0 ">
                <li>
                    <a href="{{ route('dailysd.viewadmin') }}">Self-Development</a>
                </li>
                <li>
                    <a href="{{ route('dailybp.viewadmin') }}">Bisnis/Profit</a>
                </li>
                <li>
                    <a href="{{ route('dailykl.viewadmin') }}">Kelembagaan</a>
                </li>
                <li>
                    <a href="{{ route('dailyic.viewadmin') }}">Inovasi/Creativity</a>
                </li>
                <li>
                    <a href="{{ route('datapengguna') }}">Data Pengguna</a>
                </li>
                <li>
                    <a href="{{ route('recordinterval') }}">Record Interval</a>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ is_null(auth()->user()->pict) ? 'img/user.jpg' : asset(auth()->user()->pict) }}"
                            alt="Profile Picture" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 hidden md:block shadow menu menu-compact dropdown-content bg-neutral rounded-box w-52">
                    <li>
                        <a href="{{ route('profile') }}">Profil</a>
                    </li>
                    {{-- <li>
                        <a>Ev. Self-Development</a>
                    </li>
                    <li>
                        <a>Ev. Bisnis & Profit</a>
                    </li>
                    <li>
                        <a>Ev. Kelembagaan</a>
                    </li>
                    <li>
                        <a>Ev. Inovasi/Creativity</a>
                    </li>
                    <li>
                        <a>Ev. Longterm Target</a>
                    </li> --}}
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
                <ul tabindex="0"
                    class="mt-3 p-2 lg:hidden shadow menu menu-compact dropdown-content bg-neutral rounded-box w-52">
                    <li>
                        <a href="{{ route('profile') }}">Profil</a>
                    </li>
                    <li>
                        <form action={{ route('logout') }} method="POST">
                            @csrf
                            <button type="submit">
                                Keluar
                            </button>
                        </form>
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
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-neutral rounded-box w-52">
                    <li><a href={{ route('longterm') }}>Long Term Target</a></li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Weekly
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral ">
                            <li><a href={{ route('weekly') }}>Weekly Plan</a></li>
                            {{-- <li><a href={{ route('weeklysd.evaluate') }}>Evaluasi Weekly SD</a></li>
                            <li><a href={{ route('weeklybp.evaluate') }}>Evaluasi Weekly BP</a></li>
                            <li><a href={{ route('weeklykl.evaluate') }}>Evaluasi Weekly KL</a></li>
                            <li><a href={{ route('weeklyic.evaluate') }}>Evaluasi Weekly IC</a></li> --}}
                        </ul>
                    </li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Self-Development
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral ">
                            <li><a href={{ route('dailysd') }}>Laporan Baru</a></li>
                            <li><a href={{ route('dailysd.history') }}>Riwayat</a></li>
                            <li><a href={{ route('dailysd.create2') }}>Format Lain</a></li>
                        </ul>
                    </li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Bisnis/Profit
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral ">
                            <li><a href={{ route('dailybp') }}>Laporan Baru</a></li>
                            <li><a href={{ route('dailybp.history') }}>Riwayat</a></li>
                        </ul>
                    </li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Kelembagaan
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral ">
                            <li><a href={{ route('dailykl') }}>Laporan Baru</a></li>
                            <li><a href={{ route('dailykl.history') }}>Riwayat</a></li>
                        </ul>
                    </li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Inovasi/Creativity
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral ">
                            <li><a href={{ route('dailyic') }}>Laporan Baru</a></li>
                            <li><a href={{ route('dailyic.history') }}>Riwayat</a></li>
                        </ul>
                        {{-- <li>
                        <a href={{ route('pomodoro.report') }}>Interval Report</a>
                    </li> --}}
                    </li>
                    <li>
                        <a href={{ route('pomodoro') }}>Pomodoro</a>
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
                        <img src="{{ is_null(auth()->user()->pict) ? 'img/user.jpg' : asset(auth()->user()->pict) }}"
                            alt="Profile Picture" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-neutral rounded-box w-52">
                    <li>
                        <a href="{{ route('profile') }}">Profil</a>
                    </li>
                    {{-- <li>
                        <a>Rekap Weekly</a>
                    </li>
                    <li>
                        <a>Rekap LTT</a>
                    </li> --}}
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
