@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>RIWAYAT INTERVAL</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Riwayat Interval Pomodoro</li>
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
                                    RIWAYAT INTERVAL
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
                            <a href="" class="btn btn-primary text-white">
                                <i class="fa-solid fa-print mr-2"></i>
                                Cetak
                            </a>
                        </div>

                        <div class="overflow-auto min-h-screen rounded-md shadow mt-2 hidden md:block" data-theme="cmyk">
                            <table class="w-full table-zebra">
                                <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                    <tr>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Aksi</th>
                                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Tanggal</th>
                                        <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Nama</th>
                                        <th class="w-52 p-3 text-sm font-semibold tracking-wide text-left" rowspan="2">
                                            Divisi</th>
                                        <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left" colspan="16">
                                            Interval</th>
                                    </tr>
                                    <tr>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-1</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-2</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-3</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-4</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-5</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-6</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-7</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-8</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-9</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-10</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-11</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-12</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-13</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-14</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-15</th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-center">Ke-16</th>
                                    </tr>
                                </thead>
                                @foreach ($interval as $int)
                                    <tbody class="divide-y uppercase divide-gray-100 text-center">
                                        <tr>
                                            <td class="p-3 text-gray-700 whitespace-nowrap inline-flex">
                                                {{-- <label for="viewModal-{{ $int->id }}"
                                                    class="btn btn-sm btn-primary text-xs text-white mr-1">Lihat</label> --}}
                                                <form name="delete" class="inline"
                                                    action="{{ route('interval.delete', $int) }}" method="POST">
                                                    @method('delete') @csrf
                                                    <button type="submit" class="btn btn-sm btn-error text-xs text-white"
                                                        data-id="{{ $int->id }}">Hapus</button>
                                                </form>
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap text-left">
                                                {{ $int->created_at->format('Y-m-d') }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap text-left">
                                                {{ $int->user->firstname }} {{ $int->user->lastname }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap text-left">
                                                {{ $int->user->divisi->divisi }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_mb }} - {{ $int->timestop_mb }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_tp }} - {{ $int->timestop_tp }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_bp1 }} - {{ $int->timestop_bp1 }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_bp2 }} - {{ $int->timestop_bp2 }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_bp3 }} - {{ $int->timestop_bp3 }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_bp4 }} - {{ $int->timestop_bp4 }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_ic }} - {{ $int->timestop_ic }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_sd1 }} - {{ $int->timestop_sd1 }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_kl }} - {{ $int->timestop_kl }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_bp5 }} - {{ $int->timestop_bp5 }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_bp6 }} - {{ $int->timestop_bp6 }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_bp7 }} - {{ $int->timestop_bp7 }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_bp8 }} - {{ $int->timestop_bp8 }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_cb }} - {{ $int->timestop_cb }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_ev }} - {{ $int->timestop_ev }}
                                            </td>
                                            <td class="p-3 text-xs text-gray-700 whitespace-nowrap">
                                                {{ $int->timestart_sd2 }} - {{ $int->timestop_sd2 }}
                                            </td>

                                            {{-- 
                                            <input type="checkbox" id="viewModal-{{ $int->id }}"
                                                class="modal-toggle" />
                                            <label for="viewModal-{{ $int->id }}" class="modal cursor-pointer">
                                                <label class="modal-box relative bg-white">
                                                    <label for="viewModal-{{ $int->id }}"
                                                        class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                    <p class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                                        Dibuat Tanggal: {{ $int->created_at->format('Y-m-d') }}
                                                    </p>
                                                    <div class="form-control">
                                                        <label class="label font-bold uppercase text-xs">
                                                            {{ $int->user->firstname }}
                                                            {{ $int->user->lastname }}
                                                        </label>
                                                        <label class="label text-xs -mt-2">
                                                            {{ $int->user->divisi->divisi }} <br>
                                                            {{ $int->user->nohp }} <br>
                                                            {{ $int->user->email }}
                                                        </label>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Tanggal Kegiatan:
                                                            </p>
                                                        </label>
                                                        <input class="input bg-none text-xs uppercase font-semibold"
                                                            value="{{ $int->date }}" readonly />
                                                    </div>
                                                    <div class="form-control inline-block">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Waktu Kegiatan:
                                                            </p>
                                                        </label>
                                                        <input class="input bg-none w-24 uppercase text-xs font-semibold"
                                                            value="{{ $int->timestart }}" readonly /> s/d <input
                                                            class="input bg-none w-24 uppercase text-xs font-semibold"
                                                            value="{{ $int->timefinish }}" readonly />
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Rencana:
                                                            </p>
                                                        </label>
                                                        <textarea class="textarea h-24 text-xs bg-none uppercase" readonly>{{ $int->plan }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">
                                                                Aktual:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $int->actual }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">
                                                                Status:</p>
                                                        </label>
                                                        @if ($int->progress == 100)
                                                            <strong><span
                                                                    class="bg-green-500 rounded-lg text-xs text-white p-1 m-1 uppercase">Terselesaikan</span></strong>
                                                        @elseif ($int->progress == 50)
                                                            <strong><span
                                                                    class="bg-primary rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                                    Terselesaikan</span></strong>
                                                        @else
                                                            <strong><span
                                                                    class="bg-error rounded-lg text-xs text-white p-1 m-1 uppercase">Tidak
                                                                    Tekerjakan</span></strong>
                                                        @endif
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold uppercase text-xs">Deskripsi:</p>
                                                        </label>
                                                        <textarea class="textarea h-32 text-xs bg-none uppercase" readonly>{{ $int->desc }}</textarea>
                                                    </div>
                                                    <div class="form-control">
                                                        <label class="label">
                                                            <p class="font-bold text-xs uppercase">Dokumentasi:</p>
                                                        </label>
                                                        <img src="{{ asset($int->pict) }}" alt="">
                                                        <a href="{{ asset($int->pict) }}"
                                                            class=" text-blue-500 font-bold underline mt-3">Lihat Gambar
                                                            Full</a>
                                                    </div>
                                                </label>
                                            </label> --}}
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>

                        @foreach ($interval as $int)
                            <div class="grid grid-cols-1 gap-4 md:hidden my-1" data-theme="cmyk">
                                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg">
                                    <div class="flex items-center space-x-2 justify-between">
                                        <span
                                            class="bg-green-500 rounded-lg text-xs text-white font-bold p-1 m-1 uppercase">{{ $int->created_at->format('Y-m-d') }}</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-sm"> <a href="#"
                                            class="font-bold hover:underline">{{ $int->user->firstname }}
                                            {{ $int->user->lastname }}</a></div>
                                    <div class="flex items-center space-x-2 text-sm">{{ $int->user->divisi->divisi }}
                                    </div>
                                    <div class="flex justify-end mt-2">
                                        <label for="viewModalMobile-{{ $int->id }}"
                                            class="btn btn-sm btn-primary hover:bg-primary-focus text-xs text-white mr-1">Lihat</label>
                                        <form name="delete" class="inline"
                                            action="{{ route('interval.delete', $int) }}" method="POST">
                                            @method('delete') @csrf
                                            <button type="submit" class="btn btn-sm btn-error text-xs text-white ml-1"
                                                data-id="{{ $int->id }}">Hapus</button>
                                        </form>
                                    </div>
                                </div>

                                <input type="checkbox" id="viewModalMobile-{{ $int->id }}" class="modal-toggle" />
                                <label for="viewModalMobile-{{ $int->id }}" class="modal cursor-pointer">
                                    <label class="modal-box relative bg-white">
                                        <label for="viewModalMobile-{{ $int->id }}"
                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                        <p class="modal-title font-bold text-sm uppercase" id="viewModalLabel">
                                            {{ $int->created_at->format('Y-m-d') }}
                                        </p>
                                        <div class="form-control">
                                            <label class="label font-bold uppercase text-xs">
                                                {{ $int->user->firstname }}
                                                {{ $int->user->lastname }}
                                            </label>
                                            <label class="label text-xs -mt-2">
                                                {{ $int->user->divisi->divisi }} <br>
                                                {{ $int->user->nohp }} <br>
                                                {{ $int->user->email }}
                                            </label>
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-1:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_mb }} - {{ $int->timestop_mb }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-2:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_tp }} - {{ $int->timestop_tp }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-3:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp1 }} - {{ $int->timestop_bp1 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-4:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp2 }} - {{ $int->timestop_bp2 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-5:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp3 }} - {{ $int->timestop_bp3 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-6:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp4 }} - {{ $int->timestop_bp4 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-7:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_ic }} - {{ $int->timestop_ic }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-8:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_sd1 }} - {{ $int->timestop_sd1 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-9:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_kl }} - {{ $int->timestop_kl }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-10:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp5 }} - {{ $int->timestop_bp5 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-11:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp6 }} - {{ $int->timestop_bp6 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-12:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp7 }} - {{ $int->timestop_bp7 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-13:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_bp8 }} - {{ $int->timestop_bp8 }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-14:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_cb }} - {{ $int->timestop_cb }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-15:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_ev }} - {{ $int->timestop_ev }}" readonly />
                                        </div>
                                        <div class="form-control">
                                            <label class="label">
                                                <p class="font-bold uppercase text-xs">Interval Ke-16:
                                                </p>
                                            </label>
                                            <input class="input bg-none text-xs uppercase font-semibold"
                                                value="{{ $int->timestart_sd2 }} - {{ $int->timestop_sd2 }}" readonly />
                                        </div>

                                    </label>
                                </label>
                            </div>
                        @endforeach
                        {{ $interval->links() }}
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
