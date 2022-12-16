@extends('layouts.tailwind')
@section('container')
    <div class='bg-slate-100'>
        <div class="container mx-auto mb-16 lg:py-5">
            <div class="row justify-center">
                <div class="col col-12">
                    @if (auth()->user()->level_id == 2)
                        @foreach ($users as $usr)
                            <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                                <div class="card-body mx-2">
                                    <div class="flex justify-center lg:justify-start ">
                                        <img class="mask mask-circle w-48 lg:w-80 border-8 md:w-60"
                                            src="img/{{ $usr->pict }}" alt="" />
                                        <div class="absolute bottom-4">
                                            <label for="my-modal-4" class="btn btn-circle border-2 border-white">
                                                <i class="fa-solid fa-camera fa-2xl text-white"></i>
                                            </label>
                                        </div>
                                        <!-- The button to open modal -->
                                        {{-- <label for="my-modal-4" class="btn">open modal</label> --}}

                                        <!-- Put this part before </body> tag -->
                                        <input type="checkbox" id="my-modal-4" class="modal-toggle" />
                                        <label for="my-modal-4" class="modal modal-bottom sm:modal-middle cursor-pointer"
                                            data-theme="cmyk">
                                            <label class="modal-box relative" for="">
                                                <h3 class="font-bold text-lg">Pilih Foto:</h3>
                                                <input type="file" class="file-input w-full max-w-x" />
                                                <div class="modal-action">
                                                    <label for="my-modal-6" class="btn">Upload Foto</label>
                                                </div>
                                            </label>
                                        </label>
                                        {{-- <input type="checkbox" id="my-modal-6" class="modal-toggle" />
                                    <div class="modal modal-bottom sm:modal-middle cursor-pointer" data-theme="cmyk">
                                        <div class="modal-box relative" for="">
                                            <h3 class="font-bold text-lg">Pilih Foto:</h3>
                                            <input type="file"
                                                class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
                                            <div class="modal-action">
                                                <label for="my-modal-6" class="btn">Yay!</label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
