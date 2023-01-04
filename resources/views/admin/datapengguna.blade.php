@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>DATA PENGGUNA</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    {{-- <li><a>Documents</a></li> --}}
                                    <li>Data Pengguna</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <div class="flex justify-end mb-4">
                            <a href={{ route('datapengguna.create') }}
                                class="btn bg-primary hover:bg-primary-focus text-xs border-0 text-white"><i
                                    class="fa-solid fa-user-plus mr-2"></i>Tambah Pengguna</a>
                        </div>
                        <div class="overflow-auto h-96 rounded-md shadow" data-theme="cmyk">
                            <table class="w-full table-zebra">
                                <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                    <tr>
                                        <th class="w-5 p-3 text-sm font-semibold tracking-wide text-left">No</th>
                                        <th class="w-10 p-3 text-sm font-semibold tracking-wide text-left">Level</th>
                                        <th class="w-44 p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                                        <th class="w-28 p-3 text-sm font-semibold tracking-wide text-left">Jenis Kelamin
                                        </th>
                                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left">Divisi</th>
                                        <th class="w-10 p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left">Riwayat Login
                                            Terakhir</th>
                                        {{-- <th class="w-28 p-3 text-sm font-semibold tracking-wide text-left">No HP</th>
                                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                                        <th class="w-44 p-3 text-sm font-semibold tracking-wide text-left">Alamat</th> --}}
                                        <th class="w-44 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($user as $usd)
                                    <tbody class="divide-y divide-gray-100 ">
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                @if ($usd->level_id == 1)
                                                    <strong><span
                                                            class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Admin</span></strong>
                                                @else
                                                    <strong><span
                                                            class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">User</span></strong>
                                                @endif
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $usd->firstname }} {{ $usd->lastname }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $usd->gender->gender }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $usd->divisi->divisi }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                @if ($usd->isOnline())
                                                    <strong><span
                                                            class="text-success rounded-lg text-xs p-1 m-1 uppercase">Online</span></strong>
                                                @else
                                                    <strong><span
                                                            class="text-gray-500 rounded-lg text-xs p-1 m-1 uppercase">Offline</span></strong>
                                                @endif
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $usd->last_login_at }}
                                            </td>
                                            {{-- <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $usd->nohp }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $usd->email }}
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                                {{ $usd->address }}
                                            </td> --}}
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                <a href="datapengguna/user/{{ $usd->id }}"
                                                    class="btn btn-sm btn-primary text-xs text-white">Lihat</a>
                                                {{-- <a href="datapengguna/edit/{{ $usd->id }}"
                                                    class="btn btn-sm btn-warning text-xs text-white">Ubah</a> --}}
                                                @if ($usd->level_id === 2)
                                                    <form name="delete" class="inline"
                                                        action="{{ route('datapengguna.delete', $usd) }}" method="POST">
                                                        @method('delete') @csrf
                                                        <button type="submit"
                                                            class="btn btn-sm btn-error text-xs text-white" id="delete"
                                                            data-id="{{ $usd->id }}">Hapus</button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
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
