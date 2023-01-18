@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">DIVISI</h3>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Kelola Divisi</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="justify-center -mx-2">
                            <div class="alert text-sm bg-cyan-800 shadow-xl text-white">
                                <div>
                                    <span class="uppercase font-bold">
                                        Daftar Divisi
                                    </span>
                                </div>
                            </div>
                            <div class="flex justify-end" data-theme="cmyk">
                                <label for="divisi"
                                    class="btn border-0 bg-primary mr-1 text-xs rounded-lg cursor-pointer text-white"><i
                                        class="fa-solid fa-plus mr-2"></i>Tambah Divisi</label>
                            </div>
                            @if (Session::has('save'))
                                <div class="alert bg-green-500 shadow-md my-4 text-white" data-theme="light">
                                    <div>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <span>{{ Session::get('save') }}</span>
                                    </div>
                                </div>
                            @elseif (Session::has('edit'))
                                <div class="alert bg-warning shadow-md my-4 text-white" data-theme="light">
                                    <div>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <span>{{ Session::get('edit') }}</span>
                                    </div>
                                </div>
                            @endif
                            <div class="overflow-auto h-96 rounded-md shadow mt-2 hidden md:block" data-theme="cmyk">
                                <table class="w-full table-zebra">
                                    <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                        <tr>
                                            <th class="w-0 p-3 text-sm font-semibold tracking-wide text-left">No</th>
                                            <th class="w-full p-3 text-sm font-semibold tracking-wide text-left">Divisi</th>
                                            <th class="w-0 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($divisi as $dv)
                                        <tbody class="divide-y divide-gray-100 ">
                                            <tr>
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                    {{ $dv->divisi }}
                                                </td>

                                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap inline-flex">
                                                    <label for="editdivisi"
                                                        class="btn btn-sm mr-2 border-0 bg-warning hover:bg-orange-600 text-xs rounded-lg cursor-pointer text-white">Edit</label>
                                                    <form name="delete" class="inline"
                                                        action="{{ route('divisi.delete', $dv) }}" method="POST">
                                                        @method('delete') @csrf
                                                        <button type="submit"
                                                            class="btn btn-sm btn-error text-xs text-white" id="delete"
                                                            data-id="{{ $dv->id }}">Hapus</button>
                                                    </form>
                                                </td>
                                    @endforeach

                                    <input type="checkbox" id="divisi" class="modal-toggle" />
                                    <div class="modal">
                                        <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                            <label for="divisi"
                                                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                            <h5 class="modal-title">
                                                <strong>TAMBAH DIVISI</strong>
                                            </h5>
                                            <div class="modal-body">
                                                <form action={{ route('divisi.store') }} method="POST" class="w-full">
                                                    @csrf
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <span
                                                                class="label-text text-black text-sm font-bold">Divisi</span>
                                                        </label>
                                                        <input class="input input-bordered" name="divisi"
                                                            placeholder="Divisi Baru" required />
                                                    </div>
                                                    <div class="modal-action">
                                                        <button type="submit" class="btn bg-neutral text-white border-0"
                                                            data-theme="night">Tambah
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="checkbox" id="editdivisi" class="modal-toggle" />
                                    <div class="modal">
                                        <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                            <label for="editdivisi"
                                                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                            <h5 class="modal-title">
                                                <strong>EDIT DIVISI</strong>
                                            </h5>

                                            <div class="modal-body">
                                                <form action="divisi/update/{{ $dv->id }}" method="POST"
                                                    class="w-full">
                                                    @csrf
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <span
                                                                class="label-text text-black text-sm font-bold">Divisi</span>
                                                        </label>
                                                        <input class="input input-bordered" name="divisi"
                                                            value="{{ $dv->divisi }}" required />
                                                    </div>

                                                    <div class="modal-action">
                                                        <button type="submit" class="btn bg-neutral text-white border-0"
                                                            data-theme="night">Simpan
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            @foreach ($divisi as $dv)
                                <div class="grid grid-cols-1 gap-4 md:hidden my-4" data-theme="cmyk">
                                    <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                        <div class="flex items-center space-x-2 text-sm justify-between">
                                            <p class="uppercase font-semibold">Divisi:</p>
                                        </div>
                                        <div class="flex items-center space-x-2 text-sm">
                                            <div class="font-bold">{{ $dv->divisi }}
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <label for="editdivisiMobile"
                                                class="btn btn-sm mr-2 border-0 bg-warning hover:bg-orange-600 text-xs rounded-lg cursor-pointer text-white">Edit</label>
                                            <form name="delete" class="inline"
                                                action="{{ route('divisi.delete', $dv) }}" method="POST">
                                                @method('delete') @csrf
                                                <button type="submit" class="btn btn-sm btn-error text-xs text-white"
                                                    id="delete" data-id="{{ $dv->id }}">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <input type="checkbox" id="editdivisiMobile" class="modal-toggle" />
                            <div class="modal">
                                <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                    <label for="editdivisiMobile"
                                        class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                    <h5 class="modal-title">
                                        <strong>EDIT DIVISI</strong>
                                    </h5>

                                    <div class="modal-body">
                                        <form action="divisi/update/{{ $dv->id }}" method="POST" class="w-full">
                                            @csrf
                                            <div class="form-control">
                                                <label class="label">
                                                    <span class="label-text text-black text-sm font-bold">Divisi</span>
                                                </label>
                                                <input class="input input-bordered" name="divisi"
                                                    value="{{ $dv->divisi }}" required />
                                            </div>

                                            <div class="modal-action">
                                                <button type="submit" class="btn bg-neutral text-white border-0"
                                                    data-theme="night">Simpan
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        @if (session()->has('success'))
            Swal.fire(
                'Sukses!',
                'Data berhasil dihapus.',
                'success'
            )
        @endif

        document.querySelectorAll('form[name="delete"]').forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault()

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Data yang telah dihapus tidak dapat dikembalikan lagi!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit()
                    }
                })
            })
        })
    </script>
@endsection
