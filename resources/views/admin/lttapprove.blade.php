@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl pb-5">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <h3 class="font-bold">LONGTERM TARGET DISETUJUI</h3>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Approved</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <div class="justify-center -mx-2">
                            <div class="overflow-auto h-96 rounded-md shadow hidden md:block" data-theme="cmyk">
                                <table class="w-full table-zebra">
                                    <thead class="bg-cyan-800 border-b-2 border-gray-200 text-white">
                                        <tr>
                                            <th class="w-28 p-3 text-sm font-semibold tracking-wide text-left">Tanggal
                                            </th>
                                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Sesi</th>
                                            <th class="w-48 p-3 text-sm font-semibold tracking-wide text-left">Nama</th>
                                            <th class="w-52 p-3 text-sm font-semibold tracking-wide text-left">Divisi
                                            </th>
                                            <th class="w-96 p-3 text-sm font-semibold tracking-wide text-left">
                                                Target</th>
                                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                                            <th class="w-44 p-3 text-sm font-semibold tracking-wide text-left">Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($longterm as $ltt)
                                        <tbody class="divide-y divide-gray-100 uppercase">
                                            <tr>
                                                <td class="p-3 text-sm">
                                                    {{ $ltt->created_at->format('Y-m-d') }}
                                                </td>
                                                <td class="p-3 text-sm whitespace-nowrap">
                                                    @if ($ltt->sesi == 'SD')
                                                        <span>ltt</span>
                                                    @elseif ($ltt->sesi == 'BP')
                                                        <span>BP</span>
                                                    @elseif ($ltt->sesi == 'KL')
                                                        <span>KL</span>
                                                    @else
                                                        <span>IC</span>
                                                    @endif
                                                </td>
                                                <td class="p-3 text-sm">
                                                    {{ $ltt->user->firstname }}
                                                    {{ $ltt->user->lastname }}
                                                </td>
                                                <td class="p-3 text-sm">
                                                    {{ $ltt->user->divisi->divisi }}</td>
                                                <td class="p-3 text-sm">
                                                    {{ $ltt->target }}
                                                </td>
                                                <td class="p-3 text-sm">
                                                    @if ($ltt->status == 1)
                                                        <span
                                                            class="bg-green-500 rounded-lg text-xs font-bold text-white p-1 m-1 uppercase">Disetujui</span>
                                                    @elseif ($ltt->status == 2)
                                                        <span
                                                            class="bg-error rounded-lg text-xs font-bold text-white p-1 m-1 uppercase">Ditolak</span>
                                                    @else
                                                        <span
                                                            class="bg-warning rounded-lg text-xs font-bold text-white p-1 m-1 uppercase">Tertunda</span>
                                                    @endif
                                                </td />
                                                <td class="p-3 text-sm">
                                                    <label for="viewModal-{{ $ltt->id }}"
                                                        class="btn btn-xs btn-primary text-xs text-white mr-1">Lihat</label>
                                                    <label for="viewModalAction-{{ $ltt->id }}"
                                                        class="btn btn-xs btn-error text-xs text-white">Respon</label>
                                                </td>

                                                <input type="checkbox" id="viewModal-{{ $ltt->id }}"
                                                    class="modal-toggle" />
                                                <label for="viewModal-{{ $ltt->id }}" class="modal cursor-pointer">
                                                    <label class="modal-box relative bg-white">
                                                        <label for="viewModal-{{ $ltt->id }}"
                                                            class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                        <h5 class="modal-title font-bold" id="viewModalLabel">
                                                            {{ $ltt->created_at->format('d-M-Y') }} |
                                                            @if ($ltt->sesi == 'SD')
                                                                <span>Self-Development</span>
                                                            @elseif ($ltt->sesi == 'BP')
                                                                <span>Bisnis & Profit</span>
                                                            @elseif ($ltt->sesi == 'KL')
                                                                <span>Kelembagaan</span>
                                                            @else
                                                                <span>Inovasi/Creativity</span>
                                                            @endif
                                                        </h5>
                                                        <div class="my-4 ml-2">
                                                            <div class="form-control">
                                                                <label class="form-label font-bold uppercase text-sm">
                                                                    {{ $ltt->user->firstname }}
                                                                    {{ $ltt->user->lastname }}
                                                                </label>
                                                            </div>
                                                            <div class="form-control">
                                                                <label class="form-label text-sm">
                                                                    {{ $ltt->user->divisi->divisi }}
                                                                </label>
                                                            </div>
                                                            <div class="form-control">
                                                                <label class="form-label text-sm">
                                                                    {{ $ltt->user->nohp }}
                                                                </label>
                                                            </div>
                                                            <div class="form-control">
                                                                <label class="form-label text-sm italic">
                                                                    {{ $ltt->user->email }}
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-sm">Target:
                                                                </p>
                                                            </label>
                                                            <textarea class="textarea h-24 bg-none uppercase" readonly>{{ $ltt->target }}</textarea>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-sm">
                                                                    Deskripsi:</p>
                                                            </label>
                                                            <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $ltt->desc }}</textarea>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <p class="font-bold uppercase text-sm">
                                                                    Manfaat:</p>
                                                            </label>
                                                            <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $ltt->benefit }}</textarea>
                                                        </div>
                                                    </label>
                                                </label>
                                                <input type="checkbox" id="viewModalAction-{{ $ltt->id }}"
                                                    class="modal-toggle" />
                                                <label for="viewModalAction-{{ $ltt->id }}"
                                                    class="modal cursor-pointer" data-theme="cmyk">
                                                    <label class="modal-box relative bg-white">
                                                        <label for="viewModalAction-{{ $ltt->id }}"
                                                            class="btn btn-sm btn-circle absolute right-2 top-2 cursor-pointer">✕</label>
                                                        <form action="{{ route('admin.approval') }}" method="POST"
                                                            class="w-full">
                                                            @csrf
                                                            <input type="hidden" class="form-control" id="id"
                                                                name="id" value="{{ $ltt->id }}" readonly>
                                                            <h5 class="modal-title" id="viewModalLabel">
                                                                <h5 class="font-bold uppercase">{{ $ltt->target }}</h5> |
                                                                {{ $ltt->created_at->format('d-M-Y') }}
                                                            </h5>
                                                            <div class="form-control w-full max-w-xs">
                                                                <label class="label">
                                                                    <span class="label font-bold">Status:</span>
                                                                </label>
                                                                <select class="select select-bordered" name="status"
                                                                    required>
                                                                    <option value="0" disabled selected hidden>
                                                                        @if ($ltt->status === 0)
                                                                            <span>Tertunda</span>
                                                                        @endif
                                                                    </option>
                                                                    <option value="1">Setujui</option>
                                                                    <option value="2">Tolak</option>
                                                                </select>
                                                            </div>
                                                            <div class="modal-action">
                                                                <button type="submit"
                                                                    class="btn bg-neutral text-white border-0"
                                                                    data-theme="night">Simpan
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </label>
                                                </label>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="alert bg-cyan-800 shadow-xl md:hidden text-white">
                                <div>
                                    <span class="font-bold uppercase">
                                        Pending
                                    </span>
                                </div>
                            </div>
                            @foreach ($longterm as $ltt)
                                <div class="grid grid-cols-1 gap-4 md:hidden" data-theme="cmyk">
                                    <div class="bg-white p-4 border-2 border-gray-200 rounded-lg shadow-lg my-2">
                                        <div class="flex items-center space-x-2 text-sm"> <a href="#"
                                                class="font-bold hover:underline">{{ $ltt->user->firstname }}
                                                {{ $ltt->user->lastname }}</a></div>
                                        <div class="flex items-center space-x-2 text-sm">{{ $ltt->user->divisi->divisi }}
                                        </div>

                                        <div class="flex items-center space-x-2 text-sm">
                                            <div class="font-bold">{{ $ltt->created_at->format('d-M-Y') }}</div>
                                            <div>
                                                @if ($ltt->status == 1)
                                                    <span
                                                        class="bg-green-500 rounded-lg text-xs font-bold text-white p-1 m-1 uppercase">Disetujui</span>
                                                @elseif ($ltt->status == 2)
                                                    <span
                                                        class="bg-error rounded-lg text-xs font-bold text-white p-1 m-1 uppercase">Ditolak</span>
                                                @else
                                                    <span
                                                        class="bg-warning rounded-lg text-xs font-bold text-white p-1 m-1 uppercase">Tertunda</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-sm my-2 uppercase">{{ $ltt->target }}</div>
                                        <div class="flex justify-end">
                                            <label for="viewModalMobile-{{ $ltt->id }}"
                                                class="btn btn-sm btn-primary text-sm text-white mr-1">Lihat</label>
                                            <label for="viewModalActionMobile-{{ $ltt->id }}"
                                                class="btn btn-sm btn-error text-sm text-white">Respon</label>
                                        </div>
                                    </div>
                                    <input type="checkbox" id="viewModalMobile-{{ $ltt->id }}"
                                        class="modal-toggle" />
                                    <label for="viewModalMobile-{{ $ltt->id }}" class="modal cursor-pointer">
                                        <label class="modal-box relative bg-white">
                                            <label for="viewModalMobile-{{ $ltt->id }}"
                                                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                            <h5 class="modal-title font-bold" id="viewModalLabel">
                                                {{ $ltt->created_at->format('d-M-Y') }} |
                                                @if ($ltt->sesi == 'SD')
                                                    <span>Self-Development</span>
                                                @elseif ($ltt->sesi == 'BP')
                                                    <span>Bisnis & Profit</span>
                                                @elseif ($ltt->sesi == 'KL')
                                                    <span>Kelembagaan</span>
                                                @else
                                                    <span>Inovasi/Creativity</span>
                                                @endif
                                            </h5>
                                            <div class="my-4 ml-2">
                                                <div class="form-control">
                                                    <label class="form-label font-bold uppercase text-sm">
                                                        {{ $ltt->user->firstname }}
                                                        {{ $ltt->user->lastname }}
                                                    </label>
                                                </div>
                                                <div class="form-control">
                                                    <label class="form-label text-sm">
                                                        {{ $ltt->user->divisi->divisi }}
                                                    </label>
                                                </div>
                                                <div class="form-control">
                                                    <label class="form-label text-sm">
                                                        {{ $ltt->user->nohp }}
                                                    </label>
                                                </div>
                                                <div class="form-control">
                                                    <label class="form-label text-sm italic">
                                                        {{ $ltt->user->email }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-sm">Target:
                                                    </p>
                                                </label>
                                                <textarea class="textarea h-24 bg-none uppercase" readonly>{{ $ltt->target }}</textarea>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-sm">
                                                        Deskripsi:</p>
                                                </label>
                                                <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $ltt->desc }}</textarea>
                                            </div>
                                            <div class="form-control">
                                                <label class="label">
                                                    <p class="font-bold uppercase text-sm">
                                                        Manfaat:</p>
                                                </label>
                                                <textarea class="textarea h-32 bg-none uppercase" readonly>{{ $ltt->benefit }}</textarea>
                                            </div>
                                        </label>
                                    </label>
                                    <input type="checkbox" id="viewModalActionMobile-{{ $ltt->id }}"
                                        class="modal-toggle" />
                                    <label for="viewModalActionMobile-{{ $ltt->id }}" class="modal cursor-pointer"
                                        data-theme="cmyk">
                                        <label class="modal-box relative bg-white">
                                            <label for="viewModalActionMobile-{{ $ltt->id }}"
                                                class="btn btn-sm btn-circle absolute right-2 top-2 cursor-pointer">✕</label>
                                            <form action="{{ route('admin.approval') }}" method="POST" class="w-full">
                                                @csrf
                                                <input type="hidden" class="form-control" id="id" name="id"
                                                    value="{{ $ltt->id }}" readonly>
                                                <h5 class="modal-title" id="viewModalLabel">
                                                    <h5 class="font-bold uppercase">{{ $ltt->target }}</h5> |
                                                    {{ $ltt->created_at->format('d-M-Y') }}
                                                </h5>
                                                <div class="form-control w-full max-w-xs">
                                                    <label class="label">
                                                        <span class="label font-bold uppercase">Status:</span>
                                                    </label>
                                                    <select class="select select-bordered" name="status" required>
                                                        <option value="0" disabled selected hidden>
                                                            @if ($ltt->status === 0)
                                                                <span>Tertunda</span>
                                                            @endif
                                                        </option>
                                                        <option value="1">Setujui</option>
                                                        <option value="2">Tolak</option>
                                                    </select>
                                                </div>
                                                <div class="modal-action">
                                                    <button type="submit" class="btn bg-neutral text-white border-0"
                                                        data-theme="night">Simpan
                                                    </button>
                                                </div>
                                            </form>
                                        </label>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
