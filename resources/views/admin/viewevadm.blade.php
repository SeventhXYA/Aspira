@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>RIWAYAT EVALUASI</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Riwayat Evaluasi Harian</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="alert text-sm bg-cyan-800 mb-2 shadow-xl text-white">
                            <div>
                                <span class="uppercase font-bold">
                                    RIWAYAT EVALUASI HARIAN
                                </span>
                            </div>
                        </div>
                        <div data-theme="cmyk">
                            <div class="form-control w-full max-w-xs grid grid-cols-2">
                                <label class="label">
                                    <span class="font-bold text-sm">Cetak Dari Tgl:</span>
                                </label>
                                <input type="date" name="tglawal" id="tglawal"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                            <div class="form-control w-full max-w-xs grid grid-cols-2">
                                <label class="label">
                                    <span class="font-bold text-sm">Cetak Hingga Tgl:</span>
                                </label>
                                <input type="date" name="tglakhir" id="tglakhir"
                                    class="input input-bordered w-full max-w-xs" />
                            </div>
                        </div>
                        <div class="flex justify-end my-2">
                            <a href=""
                                onclick="this.href='/evaluatepdf/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                                target="_blank" class="btn btn-primary text-white">
                                <i class="fa-solid fa-print mr-2"></i>
                                Cetak
                            </a>
                        </div>

                        <div class="overflow-auto min-h-screen rounded-md shadow mt-2 hidden md:block" data-theme="cmyk">
                            <table class="w-full table-zebra">
                                <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                    <tr>
                                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Tanggal Evaluasi</th>
                                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Nama</th>
                                        <th class="w-52 p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Divisi</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Evaluasi Harian</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center" rowspan="2">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($evaluate as $ev)
                                    <tbody class="divide-y uppercase divide-gray-100 ">
                                        <tr>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $ev->created_at->format('Y-m-d') }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $ev->user->firstname }} {{ $ev->user->lastname }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $ev->user->divisi->divisi }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700">
                                                {{ $ev->dailyevaluate }}
                                            </td>

                                            <td class="p-3 text-gray-700 inline-flex">
                                                <label for="viewModal-{{ $ev->id }}"
                                                    class="btn btn-sm btn-primary text-xs text-white mr-1">Lihat</label>
                                                <form name="delete" class="inline"
                                                    action="{{ route('evaluate.delete', $ev) }}" method="POST">
                                                    @method('delete') @csrf
                                                    <button type="submit" class="btn btn-sm btn-error text-xs text-white"
                                                        data-id="{{ $ev->id }}">Hapus</button>
                                                </form>
                                            </td>

                                            <input type="checkbox" id="viewModal-{{ $ev->id }}"
                                                class="modal-toggle" />
                                            <label for="viewModal-{{ $ev->id }}" class="modal cursor-pointer">
                                                <label class="modal-box relative bg-white">
                                                    <label for="viewModal-{{ $ev->id }}"
                                                        class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                    <p class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                                        {{ $ev->created_at->format('Y-m-d') }}
                                                    </p>
                                                    <div class="form-control">
                                                        <label class="label font-bold uppercase text-xs">
                                                            {{ $ev->user->firstname }}
                                                            {{ $ev->user->lastname }}
                                                        </label>
                                                        <label class="label text-xs -mt-2">
                                                            {{ $ev->user->divisi->divisi }} <br>
                                                            {{ $ev->user->nohp }} <br>
                                                            {{ $ev->user->email }}
                                                        </label>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Evaluasi Harian:
                                                            </p>
                                                        </label>
                                                        <textarea class="textarea h-96 text-xs bg-none uppercase" readonly>{{ $ev->dailyevaluate }}</textarea>
                                                    </div>
                                                </label>
                                            </label>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>

                        @foreach ($evaluate as $ev)
                            <div class="grid grid-cols-1 gap-4 md:hidden my-1" data-theme="cmyk">
                                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                    <div class="flex items-center space-x-2 justify-between">
                                        <span
                                            class="bg-green-500 rounded-lg text-sm text-white font-bold p-1 m-1 uppercase">{{ $ev->created_at->format('Y-m-d') }}</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm"> <a href="#"
                                            class="font-bold hover:underline">{{ $ev->user->firstname }}
                                            {{ $ev->user->lastname }}</a></div>
                                    <div class="flex items-center space-x-2 font-semibold text-sm">
                                        {{ $ev->user->divisi->divisi }}</div>

                                    <div class="text-sm  my-2 uppercase">{{ $ev->dailyevaluate }}</div>
                                    <div class="flex justify-end">
                                        <label for="viewModalMobile-{{ $ev->id }}"
                                            class="btn btn-sm btn-primary hover:bg-primary-focus text-xs text-white mr-1">Lihat</label>
                                        <form name="delete" class="inline" action="{{ route('evaluate.delete', $ev) }}"
                                            method="POST">
                                            @method('delete') @csrf
                                            <button type="submit" class="btn btn-sm btn-error text-xs text-white ml-1"
                                                data-id="{{ $ev->id }}">Hapus</button>
                                        </form>
                                    </div>
                                </div>

                                <input type="checkbox" id="viewModalMobile-{{ $ev->id }}" class="modal-toggle" />
                                <label for="viewModalMobile-{{ $ev->id }}" class="modal cursor-pointer">
                                    <label class="modal-box relative bg-white">
                                        <label for="viewModalMobile-{{ $ev->id }}"
                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                        <p class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                            {{ $ev->created_at->format('Y-m-d') }}
                                        </p>
                                        <div class="form-control">
                                            <label class="label font-bold uppercase text-xs">
                                                {{ $ev->user->firstname }}
                                                {{ $ev->user->lastname }}
                                            </label>
                                            <label class="label text-xs -mt-2">
                                                {{ $ev->user->divisi->divisi }} <br>
                                                {{ $ev->user->nohp }} <br>
                                                {{ $ev->user->email }}
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Evaluasi Harian:
                                                </p>
                                            </label>
                                            <textarea class="textarea h-96 text-xs bg-none uppercase" readonly>{{ $ev->dailyevaluate }}</textarea>
                                        </div>
                                    </label>
                                </label>
                            </div>
                        @endforeach
                        {{ $evaluate->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                    title: 'Yakin menghapus data ini?',
                    text: 'Setelah data dihapus, data tidak bisa dikembalikan!',
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
