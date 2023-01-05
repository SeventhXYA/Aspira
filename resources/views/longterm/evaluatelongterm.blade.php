@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">

                            <h3 class="font-bold">EVALUASI LONGTERM TARGET</h3>

                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="{{ route('monthly') }}">Longterm Target</a></li>
                                    <li>Evaluasi</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <div class="my-4 ml-2">
                            <div class="form-control">
                                <label class="form-label font-bold uppercase text-sm">
                                    {{ auth()->user()->firstname }}
                                    {{ auth()->user()->lastname }}
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="form-label text-sm">
                                    {{ auth()->user()->divisi->divisi }}
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="form-label text-sm">
                                    {{ auth()->user()->nohp }}
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="form-label text-sm italic">
                                    {{ auth()->user()->email }}
                                </label>
                            </div>
                        </div>

                        <form action="/longterm/update/{{ $longterm->id }}" method="POST">
                            @csrf
                            <div class="form-control">
                                <label for="sesi" class="form-label">
                                    <h4 class="font-bold text-sm">Sesi:</h4>
                                </label>
                                @if ($longterm->sesi == 'SD')
                                    <span>Self-Development</span>
                                @elseif ($longterm->sesi == 'BP')
                                    <span>Bisnis & Profit</span>
                                @elseif ($longterm->sesi == 'KL')
                                    <span>Kelembagaan</span>
                                @else
                                    <span>Inovasi/Creativity</span>
                                @endif
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4 class="font-bold text-sm">Judul Target:</h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" name="target" readonly>{{ $longterm->target }}</textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4 class="font-bold text-sm">Deskripsikan Target:</h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" name="desc" readonly>{{ $longterm->desc }}</textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4 class="font-bold text-sm">Manfaat:</h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" name="benefit" readonly>{{ $longterm->benefit }}</textarea>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <h4 class="font-bold text-sm">Evaluasi:</h4>
                                </label>
                                <textarea class="textarea textarea-bordered h-24" name="evaluate">{{ $longterm->evaluate }}</textarea>
                            </div>
                            <div class="form-control">
                                <input type="hidden" class="form-control" id="status" name="status"
                                    value="{{ $longterm->status }}" readonly>
                            </div>
                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" name="submit" class="btn bg-neutral text-white" id="update"
                                    data-theme="night">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#update').click(function() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Data Berhasil di Edit',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
@endsection
