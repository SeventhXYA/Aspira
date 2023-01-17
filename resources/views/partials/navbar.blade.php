<div class="navbar bg-neutral text-white">
    @if (auth()->user()->level_id == 1 || auth()->user()->level_id == 2)
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
                            Monthly Target
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral">
                            <li class="{{ request()->is('admin/pending') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('admin.pending') }}>Monthly Tertunda</a>
                            </li>
                            <li class="{{ request()->is('admin/approved') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('admin.approved') }}>Monthly Disetujui</a>
                            </li>
                            <li class="{{ request()->is('admin/declined') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('admin.declined') }}>Monthly Ditolak</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('dailysd/viewadmin') ? 'bg-sky-400 rounded-md' : '' }}">
                        <a href="{{ route('dailysd.viewadmin') }}">Self-Development</a>
                    </li>
                    <li class="{{ request()->is('dailybp/viewadmin') ? 'bg-sky-400 rounded-md' : '' }}">
                        <a href="{{ route('dailybp.viewadmin') }}">Bisnis/Profit</a>
                    </li>
                    <li class="{{ request()->is('dailykl/viewadmin') ? 'bg-sky-400 rounded-md' : '' }}">
                        <a href="{{ route('dailykl.viewadmin') }}">Kelembagaan</a>
                    </li>
                    <li class="{{ request()->is('dailyic/viewadmin') ? 'bg-sky-400 rounded-md' : '' }}">
                        <a href="{{ route('dailyic.viewadmin') }}">Inovasi/Creativity</a>
                    </li>
                    <li class="{{ request()->is('evaluate/viewadmin') ? 'bg-sky-400 rounded-md' : '' }}">
                        <a href="{{ route('evaluate.viewadmin') }}">Evaluasi Harian</a>
                    </li>
                    <li class="{{ request()->is('datapengguna') ? 'bg-sky-400 rounded-md' : '' }}">
                        <a href="{{ route('datapengguna') }}">Data Pengguna</a>
                    </li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Record Interval
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral">
                            <li
                                class="{{ request()->is('intervalpomodoro/viewadmin') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('intervalpomodoro.viewadmin') }}>Data Table</a>
                            </li>
                            <li class="{{ request()->is('recordinterval') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('recordinterval') }}>Data Visual (Perhari)</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="/" class="btn btn-ghost normal-case text-xl">GEN:PERMATA</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal p-0 ">
                <div class="dropdown dropdown-bottom">
                    <a tabindex="0" class="btn m-1 text-white">Monthly Target <i
                            class="fa-solid fa-caret-down ml-2"></i></a>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-neutral rounded-box w-52">
                        <li>
                            <a class="btn w-full text-white {{ request()->is('admin/pending') ? 'active' : '' }}"
                                href={{ route('admin.pending') }}>Monthly Tertunda</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('admin/approved') ? 'active' : '' }}"
                                href={{ route('admin.approved') }}>Monthly Disetujui</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('admin/declined') ? 'active' : '' }}"
                                href={{ route('admin.declined') }}>Monthly Ditolak</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown dropdown-bottom">
                    <a tabindex="0" class="btn m-1 text-white">Daily Activity <i
                            class="fa-solid fa-caret-down ml-2"></i></a>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-neutral rounded-box w-52">
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailysd/viewadmin') ? 'active' : '' }}"
                                href="{{ route('dailysd.viewadmin') }}">Self-Development</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailybp/viewadmin') ? 'active' : '' }}"
                                href="{{ route('dailybp.viewadmin') }}">Bisnis/Profit</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailykl/viewadmin') ? 'active' : '' }}"
                                href="{{ route('dailykl.viewadmin') }}">Kelembagaan</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailyic/viewadmin') ? 'active' : '' }}"
                                href="{{ route('dailyic.viewadmin') }}">Inovasi/Creativity</a>
                        </li>
                    </ul>
                </div>
                <li>
                    <a class="btn m-1 text-white {{ request()->is('evaluate/viewadmin') ? 'active' : '' }}"
                        href="{{ route('evaluate.viewadmin') }}">Evaluasi Harian</a>
                </li>
                <li>
                    <a class="btn m-1 text-white {{ request()->is('datapengguna') ? 'active' : '' }}"
                        href="{{ route('datapengguna') }}">Data Pengguna</a>
                </li>
                <div class="dropdown dropdown-bottom">
                    <a tabindex="0" class="btn m-1 text-white">Record Interval <i
                            class="fa-solid fa-caret-down ml-2"></i></a>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-neutral rounded-box w-52">
                        <li>
                            <a class="btn w-full text-white {{ request()->is('intervalpomodoro/viewadmin') ? 'active' : '' }}"
                                href="{{ route('intervalpomodoro.viewadmin') }}">Data
                                Table</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('recordinterval') ? 'active' : '' }}"
                                href="{{ route('recordinterval') }}">Data Visual
                                (Perhari)</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ asset(auth()->user()->pict) }}" alt="Profile Picture" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 p-2 hidden md:block shadow menu menu-compact dropdown-content bg-neutral rounded-box w-52">
                    <li>
                        <a href="{{ route('profile') }}">Profil</a>
                    </li>
                    <li>
                        <form class="w-full" action={{ route('logout') }} method="POST">
                            @csrf
                            <button type="submit" class="w-full text-start">
                                Keluar
                            </button>
                        </form>
                    </li>
                </ul>

                <ul tabindex="0"
                    class="mt-3 p-2 lg:hidden shadow menu menu-compact dropdown-content bg-neutral rounded-box w-52">
                    <li>
                        <a href="{{ route('profile') }}">Profil</a>
                    </li>
                    <li>
                        <form class="w-full" action={{ route('logout') }} method="POST">
                            @csrf
                            <button type="submit" class="w-full text-start">
                                Keluar
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    @endif

    @if (auth()->user()->level_id == 3)
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

                    <li tabindex="0">
                        <a class="justify-between">
                            Monthly Target
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral">
                            <li class="{{ request()->is('monthly') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('monthly') }}>Target Baru</a>
                            </li>
                            <li class="{{ request()->is('monthly/pending') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('monthly.pending') }}>Target Tertunda</a>
                            </li>
                            <li class="{{ request()->is('monthly/approved') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('monthly.approved') }}>Target Disetujui</a>
                            </li>
                            <li class="{{ request()->is('monthly/declined') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('monthly.declined') }}>Target Ditolak</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li><a href={{ route('monthly') }}>Monthly Target</a></li> --}}
                    <li tabindex="0">
                        <a class="justify-between">
                            Weekly
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral ">
                            <li class="{{ request()->is('weekly') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('weekly') }}>Rencana Mingguan</a>
                            </li>
                            <li>
                                <a href="">Evaluasi Mingguan</a>
                            </li>
                        </ul>
                    </li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Self-Development
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral ">
                            <li class="{{ request()->is('dailysd') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('dailysd') }}>Laporan Baru</a>
                            </li>
                            <li class="{{ request()->is('dailysd/history') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('dailysd.history') }}>Riwayat</a>
                            </li>
                        </ul>
                    </li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Bisnis/Profit
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral ">
                            <li class="{{ request()->is('dailybp') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('dailybp') }}>Laporan Baru</a>
                            </li>
                            <li class="{{ request()->is('dailybp/history') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('dailybp.history') }}>Riwayat</a>
                            </li>
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
                            <li class="{{ request()->is('dailykl') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('dailykl') }}>Laporan Baru</a>
                            </li>
                            <li class="{{ request()->is('dailykl/history') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('dailykl.history') }}>Riwayat</a>
                            </li>
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
                            <li class="{{ request()->is('dailyic') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('dailyic') }}>Laporan Baru</a>
                            </li>
                            <li class="{{ request()->is('dailyic/history') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('dailyic.history') }}>Riwayat</a>
                            </li>
                        </ul>
                    </li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Evaluasi Harian
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-neutral ">
                            <li class="{{ request()->is('evaluate') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('evaluate') }}>Evaluasi Baru</a>
                            </li>
                            <li class="{{ request()->is('evaluate/history') ? 'bg-sky-400 rounded-md' : '' }}">
                                <a href={{ route('evaluate.history') }}>Riwayat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ request()->is('interval') ? 'bg-sky-400 rounded-md' : '' }}">
                        <a href={{ route('interval') }}>Pomodoro</a>
                    </li>
                </ul>
            </div>
            <a href="/" class="btn btn-ghost normal-case text-xl">GEN:PERMATA</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal p-0 ">
                <div class="dropdown dropdown-bottom">
                    <a tabindex="0" class="btn m-1 text-white">Monthly Target <i
                            class="fa-solid fa-caret-down ml-2"></i></a>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-neutral rounded-box w-52">
                        <li class="">
                            <a class="btn w-full text-left flex text-white {{ request()->is('monthly') ? 'active' : '' }}"
                                href={{ route('monthly') }}>Target Baru</a>
                        </li>
                        <li>
                            <a class="btn w-full  text-white {{ request()->is('monthly/pending') ? 'active' : '' }}"
                                href={{ route('monthly.pending') }}>Target Tertunda</a>
                        </li>
                        <li>
                            <a class="btn w-full  text-white {{ request()->is('monthly/approved') ? 'active' : '' }}"
                                href={{ route('monthly.approved') }}>Target Disetujui</a>
                        </li>
                        <li>
                            <a class="btn w-full  text-white {{ request()->is('monthly/declined') ? 'active' : '' }}"
                                href={{ route('monthly.declined') }}>Target Ditolak</a>
                        </li>
                    </ul>
                </div>
                <li>
                    <a class="btn m-1 w-full text-white {{ request()->is('weekly') ? 'active rounded-md' : '' }}"
                        href={{ route('weekly') }}>Weekly Plan</a>
                </li>
                <div class="dropdown dropdown-bottom">
                    <a tabindex="0" class="btn m-1 text-white">Daily Activity <i
                            class="fa-solid fa-caret-down ml-2"></i></a>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-neutral rounded-box w-52">
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailysd') ? 'active' : '' }}"
                                href="{{ route('dailysd') }}">Self-Development</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailybp') ? 'active' : '' }}"
                                href="{{ route('dailybp') }}">Bisnis/Profit</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailykl') ? 'active' : '' }}"
                                href="{{ route('dailykl') }}">Kelembagaan</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailyic') ? 'active' : '' }}"
                                href="{{ route('dailyic') }}">Inovasi/Creativity</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown dropdown-bottom">
                    <a tabindex="0" class="btn m-1 text-white">History Activity<i
                            class="fa-solid fa-caret-down ml-2"></i></a>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-neutral rounded-box w-52">
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailysd/history') ? 'active' : '' }}"
                                href="{{ route('dailysd.history') }}">Self-Development</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailybp/history') ? 'active' : '' }}"
                                href="{{ route('dailybp.history') }}">Bisnis/Profit</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailykl/history') ? 'active' : '' }}"
                                href="{{ route('dailykl.history') }}">Kelembagaan</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('dailyic/history') ? 'active' : '' }}"
                                href="{{ route('dailyic.history') }}">Inovasi/Creativity</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown dropdown-bottom">
                    <a tabindex="0" class="btn m-1 text-white">Evaluasi Harian<i
                            class="fa-solid fa-caret-down ml-2"></i></a>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-neutral rounded-box w-52">
                        <li>
                            <a class="btn w-full text-white {{ request()->is('evaluate') ? 'active' : '' }}"
                                href="{{ route('evaluate') }}">Evaluasi Baru</a>
                        </li>
                        <li>
                            <a class="btn w-full text-white {{ request()->is('evaluate/history') ? 'active' : '' }}"
                                href="{{ route('evaluate.history') }}">Riwayat</a>
                        </li>
                    </ul>
                </div>
                <li>
                    <a class="btn m-1 w-full text-white {{ request()->is('interval') ? 'active rounded-md' : '' }}"
                        href={{ route('interval') }}>Pomodoro</a>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="{{ asset(auth()->user()->pict) }}" alt="Profile Picture" />
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
                        <form class="w-full" action={{ route('logout') }} method="POST">
                            @csrf
                            <button type="submit" class="w-full text-start">
                                Keluar
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    @endif
</div>
