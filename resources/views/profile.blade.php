@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col col-12">
                <div class="card lg:w-full md:hidden mt-4 mx-2 bg-white shadow-xl text-black"data-theme="cmyk">
                    <div class="card-body mx-2">
                        <div class="flex justify-center">
                            <img class="mask mask-circle w-64" src="{{ asset($user->pict) }}" alt="Profile Picture" />
                            <div class="absolute bottom-4">
                                <label for="pictModal"
                                    class="btn btn-circle border-2 bg-primary hover:bg-primary-focus border-white">
                                    <i class="fa-solid fa-camera fa-2xl text-white"></i>
                                </label>
                            </div>
                            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="checkbox" id="pictModal" class="modal-toggle" />
                                <label for="pictModal" class="modal modal-bottom sm:modal-middle cursor-pointer">
                                    <label class="modal-box relative" for="">
                                        <h3 class="font-bold text-lg">Pilih Foto:</h3>
                                        <input type="file" class="file-input w-full max-w-x" name="pict"
                                            accept="image/*" name="pict" required />
                                        <div class="my-3 aspect-square bg-gray-300 bg-cover bg-center">
                                            <img src="" alt="">
                                        </div>
                                        <div class="modal-action">
                                            <button for="pictModal" class="btn text-white" type="Submit">Upload
                                                Foto</button>
                                        </div>
                                    </label>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">PROFIL</h3>
                            <div class="text-xs breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Profil</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl uppercase text-black"data-theme="cmyk">
                    <div class="card-body mx-2 mb-10">
                        <div class="hidden md:block">
                            <div class="flex justify-start">
                                <img class="mask mask-circle" style="width: 16rem;" src="{{ asset($user->pict) }}"
                                    alt="Profile Picture" />
                                <div class="relative" style="top: 10rem; left:-5rem">
                                    <label for="pictModalDesk"
                                        class="btn btn-circle border-2 bg-primary hover:bg-primary-focus border-white">
                                        <i class="fa-solid fa-camera fa-2xl text-white"></i>
                                    </label>
                                </div>
                                <form name="imageForm" action="{{ route('profile.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="checkbox" id="pictModalDesk" class="modal-toggle" />
                                    <label for="pictModalDesk" class="modal modal-bottom sm:modal-middle cursor-pointer">
                                        <label class="modal-box relative" for="">
                                            <h3 class="font-bold text-lg">Pilih Foto:</h3>
                                            <input type="file" class="file-input w-full max-w-x" name="pict"
                                                accept="image/*" name="pict" required />
                                            <div class="my-3">
                                                <img name="image" class="block max-w-full">
                                            </div>
                                            <div class="modal-action">
                                                <button for="pictModal" class="btn text-white" type="Submit">Upload
                                                    Foto</button>
                                            </div>
                                        </label>
                                    </label>
                                </form>
                            </div>
                        </div>
                        <div class="md:absolute flex justify-end" style="right: 4%">
                            <a href="{{ route('profile.edit') }}"
                                class="btn bg-primary hover:bg-primary-focus text-xs border-0 text-white"><i
                                    class="fa-solid fa-gear fa-md mr-2"></i>Edit Profil</a>
                        </div>
                        <div class="md:grid md:grid-cols-3 md:mt-8 md:ml-12">
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 font-bold"><i
                                            class="fa-solid fa-id-badge mr-2 fa-md"></i>Nama
                                        Depan
                                    </span>
                                </label>
                                <input type="text" class="input font-bold bg-none text-sm w-full max-w-xs"
                                    value="{{ $user->firstname }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 font-bold"><i
                                            class="fa-solid fa-id-badge mr-2 fa-md"></i>Nama Belakang </span>
                                </label>
                                <input type="text" class="input font-bold bg-none text-sm w-full max-w-xs"
                                    value="{{ $user->lastname }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 font-bold"><i
                                            class="fa-solid fa-venus-mars mr-2 fa-md"></i>Jenis Kelamin </span>
                                </label>
                                <input type="text" class="input font-bold bg-none text-sm w-full max-w-xs"
                                    value="{{ $user->gender->gender }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 font-bold"><i
                                            class="fa-solid fa-cake-candles mr-2 fa-md"></i>Tempat Tanggal Lahir </span>
                                </label>
                                <input type="text" class="input font-bold bg-none text-sm w-full max-w-xs"
                                    value="{{ $user->tempatlahir }}, {{ $user->tanggallahir }}-{{ $user->bulan->bulan }}-{{ $user->tahunlahir }}"
                                    readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 font-bold"><i
                                            class="fa-solid fa-phone mr-2 fa-md"></i>No Hp </span>
                                </label>
                                <input type="text" class="input font-bold bg-none text-sm w-full max-w-xs"
                                    value="{{ $user->nohp }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 font-bold"><i
                                            class="fa-solid fa-envelope mr-2 fa-md"></i>Email </span>
                                </label>
                                <input type="text" class="input font-bold bg-none text-sm w-full max-w-xs"
                                    value="{{ $user->email }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 font-bold"><i
                                            class="fa-solid fa-location-dot mr-2 fa-md"></i>Alamat </span>
                                </label>
                                <input type="text" class="input font-bold bg-none text-sm w-full max-w-xs"
                                    value="{{ $user->address }}" readonly />
                            </div>
                            <div class="form-control w-full max-w-xs inline">
                                <label class="label">
                                    <span class="label-text text-xs text-gray-500 font-bold"><i
                                            class="fa-solid fa-people-group mr-2 fa-md"></i>Divisi </span>
                                </label>
                                <input type="text" class="input font-bold bg-none text-sm w-full max-w-xs"
                                    value="{{ $user->divisi->divisi }}" readonly />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endif --}}
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.css"
        integrity="sha512-C4k/QrN4udgZnXStNFS5osxdhVECWyhMsK1pnlk+LkC7yJGCqoYxW4mH3/ZXLweODyzolwdWSqmmadudSHMRLA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.js"
        integrity="sha512-LjPH94gotDTvKhoxqvR5xR2Nur8vO5RKelQmG52jlZo7SwI5WLYwDInPn1n8H9tR0zYqTqfNxWszUEy93cHHwg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var cropper;
        document.querySelectorAll('input[name="pict"]').forEach(pict => {
            pict.addEventListener('change', () => {
                const [file] = pict.files
                if (file) {
                    document.querySelectorAll('img[name="image"]').forEach(image => {
                        if (cropper) {
                            cropper.destroy()
                        }
                        image.src = URL.createObjectURL(file)
                        cropper = new Cropper(image, {
                            viewMode: 1,
                            aspectRatio: 1 / 1,
                        })
                    })
                }
            })
        })

        document.querySelectorAll('form[name="imageForm"]').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault()
                if (!cropper) return

                const dataTransfer = new DataTransfer()

                const image = cropper.getCroppedCanvas().toDataURL('image/jpeg')
                const file = new File([image], 'image.jpg')
                dataTransfer.items.add(file)
                document.querySelectorAll('input[name="pict"]')
                    .forEach(pict => {
                        pict.files = dataTransfer.files
                    })
                form.submit()
            })
        })
    </script>
@endsection
