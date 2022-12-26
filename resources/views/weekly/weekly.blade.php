@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>WEEKLY PLAN</h3>
                            </strong>
                            <div class="text-xs breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Weekly Plan</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black ">
                    <div class="card-body mx-2"data-theme="cmyk">
                        @foreach ($users as $user)
                            <div class="text-center">
                                <div class="justify-center mt-2">
                                    <div class="text-center border bg-white my-3" data-theme="cmyk">
                                        <div class="flex justify-end mb-1">
                                            <label for="weeklysd"
                                                class="btn border-0 bg-primary mr-1 text-xs rounded-lg cursor-pointer text-white"><i
                                                    class="fa-solid fa-plus mr-2"></i>Tambah</label>
                                            <label for="editweeklysd"
                                                class="btn border-0 bg-warning text-xs rounded-lg cursor-pointer text-white"><i
                                                    class="fa-solid fa-pen-to-square mr-2"></i>Edit</label>
                                        </div>
                                        <div
                                            class="collapse collapse-arrow border border-base-300 bg-cyan-800 text-white rounded-lg">
                                            <input type="checkbox" class="peer" />
                                            <div class="collapse-title text-md font-medium">
                                                Self-Development
                                            </div>
                                            <div class="collapse-content">
                                                <div class="row" data-theme="cmyk">
                                                    <div class="col-10 col-md-11 p-0 m-0 -mx-1 md:mx-0">
                                                        <div class="overflow-x-auto">
                                                            <table class="table w-full">
                                                                <tbody class="text-sm">
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan1sd }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan2sd }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan3sd }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan4sd }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan5sd }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 col-md-1 p-0 m-0">
                                                        <table class="table w-full">
                                                            <tbody class="text-center text-sm">
                                                                <tr>
                                                                    <td>{{ $user->progressplan1sd }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan2sd }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan3sd }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan4sd }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan5sd }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="checkbox" id="weeklysd" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                                <label for="weeklysd"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h5 class="modal-title">
                                                    <strong>SELF-DEVELOPMENT</strong>
                                                </h5>
                                                <div class="modal-body">
                                                    <form action={{ route('weeklysd.store') }} method="POST"
                                                        class="w-full">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1" placeholder="Rencana 1"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan1" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2" placeholder="Rencana 2"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan2" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan3" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4" placeholder="Rencana 4"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan4" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan5" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0%" required>
                                                        </div>
                                                        <div class="modal-action">
                                                            <button type="submit"
                                                                class="btn bg-neutral hover:bg-primary text-white border-0"
                                                                data-theme="night">Kirim
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="checkbox" id="editweeklysd" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                                <label for="editweeklysd"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h5 class="modal-title">
                                                    <strong>SELF-DEVELOPMENT</strong>
                                                </h5>
                                                <div class="modal-body">
                                                    <form action="weeklysd/update/{{ $user->id }}" method="POST"
                                                        class="w-full">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1">{{ $user->plan1sd }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2">{{ $user->plan2sd }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3">{{ $user->plan3sd }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4">{{ $user->plan4sd }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5">{{ $user->plan5sd }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0%" required>
                                                        </div>
                                                        <div class="modal-action">
                                                            <button type="submit"
                                                                class="btn bg-neutral text-white border-0"
                                                                data-theme="night">Kirim
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="justify-center mt-2">
                                    <div class="text-center border bg-white my-3" data-theme="cmyk">
                                        <div class="flex justify-end mb-1">
                                            <label for="weeklybp"
                                                class="btn border-0 bg-primary mr-1 text-xs rounded-lg cursor-pointer text-white"><i
                                                    class="fa-solid fa-plus mr-2"></i>Tambah</label>
                                            <label for="editweeklybp"
                                                class="btn border-0 bg-warning text-xs rounded-lg cursor-pointer text-white"><i
                                                    class="fa-solid fa-pen-to-square mr-2"></i>Edit</label>
                                        </div>
                                        <div
                                            class="collapse collapse-arrow border border-base-300 bg-cyan-800 text-white rounded-lg">
                                            <input type="checkbox" class="peer" />
                                            <div class="collapse-title text-md font-medium">
                                                Bisnis & Profit
                                            </div>
                                            <div class="collapse-content">
                                                <div class="row" data-theme="cmyk">
                                                    <div class="col-10 col-md-11 p-0 m-0 -mx-1 md:mx-0">
                                                        <div class="overflow-x-auto">
                                                            <table class="table w-full">
                                                                <tbody class="text-sm">
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan1bp }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan2bp }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan3bp }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan4bp }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan5bp }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 col-md-1 p-0 m-0">
                                                        <table class="table w-full">
                                                            <tbody class="text-center text-sm">
                                                                <tr>
                                                                    <td>{{ $user->progressplan1bp }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan2bp }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan3bp }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan4bp }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan5bp }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="checkbox" id="weeklybp" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                                <label for="weeklybp"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h5 class="modal-title">
                                                    <strong>BISNIS & PROFIT</strong>
                                                </h5>
                                                <div class="modal-body">
                                                    <form action={{ route('weeklybp.store') }} method="POST"
                                                        class="w-full">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1" placeholder="Rencana 1"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan1" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2" placeholder="Rencana 2"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan2" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan3" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4" placeholder="Rencana 4"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan4" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan5" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0%" required>
                                                        </div>
                                                        <div class="modal-action">
                                                            <button type="submit"
                                                                class="btn bg-neutral hover:bg-primary text-white border-0"
                                                                data-theme="night">Kirim
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="checkbox" id="editweeklybp" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                                <label for="editweeklybp"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h5 class="modal-title">
                                                    <strong>BISNIS & PROFIT</strong>
                                                </h5>
                                                <div class="modal-body">
                                                    <form action="weeklybp/update/{{ $user->id }}" method="POST"
                                                        class="w-full">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1">{{ $user->plan1bp }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2">{{ $user->plan2bp }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3">{{ $user->plan3bp }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4">{{ $user->plan4bp }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5">{{ $user->plan5bp }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0%" required>
                                                        </div>
                                                        <div class="modal-action">
                                                            <button type="submit"
                                                                class="btn bg-neutral hover:bg-primary text-white border-0"
                                                                data-theme="night">Kirim
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="justify-center mt-2">
                                    <div class="text-center border bg-white my-3" data-theme="cmyk">
                                        <div class="flex justify-end mb-1">
                                            <label for="weeklykl"
                                                class="btn border-0 bg-primary mr-1 text-xs rounded-lg cursor-pointer text-white"><i
                                                    class="fa-solid fa-plus mr-2"></i>Tambah</label>
                                            <label for="editweeklykl"
                                                class="btn border-0 bg-warning text-xs rounded-lg cursor-pointer text-white"><i
                                                    class="fa-solid fa-pen-to-square mr-2"></i>Edit</label>
                                        </div>
                                        <div
                                            class="collapse collapse-arrow border border-base-300 bg-cyan-800 text-white rounded-lg">
                                            <input type="checkbox" class="peer" />
                                            <div class="collapse-title text-md font-medium">
                                                Kelembagaan
                                            </div>
                                            <div class="collapse-content">
                                                <div class="row" data-theme="cmyk">
                                                    <div class="col-10 col-md-11 p-0 m-0 -mx-1 md:mx-0">
                                                        <div class="overflow-x-auto">
                                                            <table class="table w-full">
                                                                <tbody class="text-sm">
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan1kl }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan2kl }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan3kl }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan4kl }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan5kl }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 col-md-1 p-0 m-0">
                                                        <table class="table w-full">
                                                            <tbody class="text-center text-sm">
                                                                <tr>
                                                                    <td>{{ $user->progressplan1kl }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan2kl }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan3kl }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan4kl }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan5kl }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="checkbox" id="weeklykl" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                                <label for="weeklykl"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h5 class="modal-title">
                                                    <strong>KELEMBAGAAN</strong>
                                                </h5>
                                                <div class="modal-body">
                                                    <form action={{ route('weeklykl.store') }} method="POST"
                                                        class="w-full">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1" placeholder="Rencana 1"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan1" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2" placeholder="Rencana 2"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan2" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan3" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4" placeholder="Rencana 4"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan4" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan5" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0%" required>
                                                        </div>
                                                        <div class="modal-action">
                                                            <button type="submit"
                                                                class="btn bg-neutral hover:bg-primary text-white border-0"
                                                                data-theme="night">Kirim
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="checkbox" id="editweeklykl" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                                <label for="editweeklykl"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h5 class="modal-title">
                                                    <strong>KELEMBAGAAN</strong>
                                                </h5>
                                                <div class="modal-body">
                                                    <form action="weeklykl/update/{{ $user->id }}" method="POST"
                                                        class="w-full">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1">{{ $user->plan1kl }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2">{{ $user->plan2kl }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3">{{ $user->plan3kl }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4">{{ $user->plan4kl }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5">{{ $user->plan5kl }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0%" required>
                                                        </div>
                                                        <div class="modal-action">
                                                            <button type="submit"
                                                                class="btn bg-neutral hover:bg-primary text-white border-0"
                                                                data-theme="night">Kirim
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="justify-center mt-2">
                                    <div class="text-center border bg-white my-3" data-theme="cmyk">
                                        <div class="flex justify-end mb-1">
                                            <label for="weeklyic"
                                                class="btn border-0 bg-primary mr-1 text-xs rounded-lg cursor-pointer text-white"><i
                                                    class="fa-solid fa-plus mr-2"></i>Tambah</label>
                                            <label for="editweeklyic"
                                                class="btn border-0 bg-warning text-xs rounded-lg cursor-pointer text-white"><i
                                                    class="fa-solid fa-pen-to-square mr-2"></i>Edit</label>
                                        </div>
                                        <div
                                            class="collapse collapse-arrow border border-base-300 bg-cyan-800 text-white rounded-lg">
                                            <input type="checkbox" class="peer" />
                                            <div class="collapse-title text-md font-medium">
                                                Inovasi & Creativity
                                            </div>
                                            <div class="collapse-content">
                                                <div class="row" data-theme="cmyk">
                                                    <div class="col-10 col-md-11 p-0 m-0 -mx-1 md:mx-0">
                                                        <div class="overflow-x-auto">
                                                            <table class="table w-full">
                                                                <tbody class="text-sm">
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan1ic }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan2ic }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan3ic }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan4ic }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td style="min-width: 500px;">
                                                                            {{ $user->plan5ic }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 col-md-1 p-0 m-0">
                                                        <table class="table w-full">
                                                            <tbody class="text-center text-sm">
                                                                <tr>
                                                                    <td>{{ $user->progressplan1ic }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan2ic }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan3ic }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan4ic }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>{{ $user->progressplan5ic }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="checkbox" id="weeklyic" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                                <label for="weeklyic"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h5 class="modal-title">
                                                    <strong>INOVASI/CREATIVITY</strong>
                                                </h5>
                                                <div class="modal-body">
                                                    <form action={{ route('weeklyic.store') }} method="POST"
                                                        class="w-full">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1" placeholder="Rencana 1"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan1" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2" placeholder="Rencana 2"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan2" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan3" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4" placeholder="Rencana 4"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan4" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan5" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0%" required>
                                                        </div>
                                                        <div class="modal-action">
                                                            <button type="submit"
                                                                class="btn bg-neutral hover:bg-primary text-white border-0"
                                                                data-theme="night">Kirim
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="checkbox" id="editweeklyic" class="modal-toggle" />
                                        <div class="modal">
                                            <div class="modal-box bg-white text-black relative" data-theme="cmyk">
                                                <label for="editweeklyic"
                                                    class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                                                <h5 class="modal-title">
                                                    <strong>INOVASI/CREATIVITY</strong>
                                                </h5>
                                                <div class="modal-body">
                                                    <form action="weeklyic/update/{{ $user->id }}" method="POST"
                                                        class="w-full">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1">{{ $user->plan1ic }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2">{{ $user->plan2ic }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3">{{ $user->plan3ic }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4">{{ $user->plan4ic }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5">{{ $user->plan5ic }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0%" required>
                                                        </div>
                                                        <div class="modal-action">
                                                            <button type="submit"
                                                                class="btn bg-neutral hover:bg-primary text-white border-0"
                                                                data-theme="night">Kirim
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
