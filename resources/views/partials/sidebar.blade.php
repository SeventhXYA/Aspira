<div id="sidebar-menu" class="sidebar modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn closebtn" data-bs-dismiss="modal">
                <i class="fa-sharp fa-solid fa-xmark"></i>
            </button>
            @if (auth()->user()->level_id == 2)
                <div class="accordion accordion-flush mt-4" id="accordion-sidebar">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda" href="/">
                                <p>Beranda</p>
                            </a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-longtermtarget">
                            <a class="accordion-button collapsed" type="button" id="longtermtarget"
                                href="{{ route('longterm') }}">
                                <p>Long Term Target</p>
                            </a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-weekly">
                            <a class="accordion-button collapsed" type="button" id="weekly"
                                href="{{ route('weekly') }}">
                                <p>Weekly Target</p>
                            </a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-pomodoro">
                            <a class="accordion-button collapsed" type="button" id="pomodoro"
                                href="{{ route('pomodoro') }}">
                                <p>Pomodoro Timer</p>
                            </a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-sd">
                            <a class="accordion-button collapsed" type="button" id="sd"
                                href="{{ route('dailysd') }}">
                                <p>Self-Development</p>
                            </a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-bp">
                            <a class="accordion-button collapsed" type="button" id="bp"
                                href="{{ route('dailybp') }}">
                                <p>Bisnis/Profit</p>
                            </a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-kl">
                            <a class="accordion-button collapsed" type="button" id="kl"
                                href="{{ route('dailykl') }}">
                                <p>Kelembagaan</p>
                            </a>
                        </h2>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-ic">
                            <a class="accordion-button collapsed" type="button" id="ic"
                                href="{{ route('dailyic') }}">
                                <p>Inovasi/Creativity</p>
                            </a>
                        </h2>
                    </div>
                </div>
            @endif

            @if (auth()->user()->level_id == 1)
                <div class="accordion accordion-flush mt-4" id="accordion-sidebar">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda"
                                href="{{ route('/') }}">
                                <p>Beranda</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda"
                                href="{{ route('longterm.viewadmin') }}">
                                <p>Long Term Target</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda"
                                href="{{ route('weekly.viewadmin') }}">
                                <p>Weekly Target</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda"
                                href="{{ route('dailysd.viewadmin') }}">
                                <p>Report Self-Development</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda"
                                href="{{ route('dailybp.viewadmin') }}">
                                <p>Report Bisnis/Profit</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda"
                                href="{{ route('dailykl.viewadmin') }}">
                                <p>Report Kelembagaan</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda"
                                href="{{ route('dailyic.viewadmin') }}">
                                <p>Report Inovasi/Creativity</p>
                            </a>
                        </h2>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-beranda">
                            <a class="accordion-button collapsed" type="button" id="beranda"
                                href="{{ route('datapengguna') }}">
                                <p>Data Pengguna</p>
                            </a>
                        </h2>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
