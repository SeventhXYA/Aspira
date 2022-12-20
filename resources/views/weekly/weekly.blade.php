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
                                <div class="text-sm breadcrumbs">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        {{-- <li><a>Documents</a></li> --}}
                                        <li>Weekly Plan</li>
                                    </ul>
                                </div>
                            </strong>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black ">
                    <div class="card-body mx-2">
                        <div class="lg:flex">
                            @foreach ($users as $user)
                                <div class="row text-center">
                                    <div class="justify-center -mt-2 col-lg-6">
                                        <div class="text-center border bg-white my-3">
                                            <div class="card-header bg-neutral text-white rounded-t-lg">
                                                <div class="row">
                                                    <div class="col-4 flex justify-start">
                                                        <h5 class="text-white text-xl">SD</h5>
                                                    </div>
                                                    <div class="col-8 flex justify-end">
                                                        <label for="weeklysd"
                                                            class="btn-sm bg-primary mr-1 rounded-lg cursor-pointer text-white"><i
                                                                class="fa-solid fa-plus mt-2"></i></label>
                                                        <a class="btn-sm bg-error rounded-lg mr-1 text-white"
                                                            id="delete"><i class="fa-solid fa-trash mt-2"></i></a>
                                                        <label for="editweeklysd"
                                                            class="btn-sm bg-warning rounded-lg cursor-pointer text-white"><i
                                                                class="fa-solid fa-pen-to-square mt-2"></i></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body -m-4">
                                                <div class="row" data-theme="cmyk">
                                                    <div class="col-10">
                                                        <div class="overflow-x-auto">
                                                            <table class="table table-compact">
                                                                <tbody align="left">
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
                                                    <div class="col-2">
                                                        <div class="overflow-x-auto">
                                                            <table class="table table-compact">
                                                                <tbody align="left">
                                                                    <tr>
                                                                        <td>{{ $user->progressplan1sd }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan2sd }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan3sd }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan4sd }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan5sd }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
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
                                                    <form action={{ route('weeklysd.store') }} method="POST">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana 1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1" placeholder="Rencana 1"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan1" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana 2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2" placeholder="Rencana 2"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="evaluate_plan2" value="-" required>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana 3</span>
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
                                                    <form action="weeklysd/update/{{ $user->id }}" method="POST">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1">{{ $user->plan1 }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan1" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2">{{ $user->plan2 }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3">{{ $user->plan3 }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4">{{ $user->plan4 }}</textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5">{{ $user->plan5 }}</textarea>
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
                                    <div class="justify-center -mt-2 col-lg-6">
                                        <div class="text-center border bg-white my-3">
                                            <div class="card-header bg-neutral text-white rounded-t-lg">
                                                <div class="row">
                                                    <div class="col-4 flex justify-start">
                                                        <h5 class="text-white text-xl">BP</h5>
                                                    </div>
                                                    <div class="col-8 flex justify-end">
                                                        <label for="weeklybp"
                                                            class="btn-sm bg-primary mr-1 rounded-lg cursor-pointer text-white"><i
                                                                class="fa-solid fa-plus mt-2"></i></label>
                                                        <a data-bs-toggle="modal" data-bs-target="#deletebp"
                                                            class="btn-sm bg-error rounded-lg mr-1 text-white"
                                                            href="#"><i class="fa-solid fa-trash mt-2"></i></a>
                                                        <a data-bs-toggle="modal" data-bs-target="#editModalbp"
                                                            class="btn-sm bg-warning rounded-lg  text-white"
                                                            href="#"><i
                                                                class="fa-solid fa-pen-to-square mt-2"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body -m-4">
                                                <div class="row" data-theme="cmyk">
                                                    <div class="col-10">
                                                        <div class="overflow-x-auto">
                                                            <table class="table table-compact">
                                                                <tbody align="left">
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
                                                    <div class="col-2">
                                                        <div class="overflow-x-auto">
                                                            <table class="table table-compact">
                                                                <tbody align="left">
                                                                    <tr>
                                                                        <td>{{ $user->progressplan1bp }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan2bp }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan3bp }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan4bp }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan5bp }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
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
                                                    <strong>BINIS & PROFIT</strong>
                                                </h5>
                                                <div class="modal-body">
                                                    <form action={{ route('weeklybp.store') }} method="POST">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1" placeholder="Rencana 1"></textarea>
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
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
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
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
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
                                    <div class="justify-center -mt-2 col-lg-6">
                                        <div class="text-center border bg-white my-3">
                                            <div class="card-header bg-neutral text-white rounded-t-lg">
                                                <div class="row">
                                                    <div class="col-4 flex justify-start">
                                                        <h5 class="text-white text-xl">KL</h5>
                                                    </div>
                                                    <div class="col-8 flex justify-end">
                                                        <label for="weeklykl"
                                                            class="btn-sm bg-primary mr-1 rounded-lg cursor-pointer text-white"><i
                                                                class="fa-solid fa-plus mt-2"></i></label>
                                                        <a data-bs-toggle="modal" data-bs-target="#deletekl"
                                                            class="btn-sm bg-error rounded-lg mr-1 text-white"
                                                            href="#"><i class="fa-solid fa-trash mt-2"></i></a>
                                                        <a data-bs-toggle="modal" data-bs-target="#editModalkl"
                                                            class="btn-sm bg-warning rounded-lg  text-white"
                                                            href="#"><i
                                                                class="fa-solid fa-pen-to-square mt-2"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body -m-4">
                                                <div class="row" data-theme="cmyk">
                                                    <div class="col-10">
                                                        <div class="overflow-x-auto">
                                                            <table class="table table-compact">
                                                                <tbody align="left">
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
                                                    <div class="col-2">
                                                        <div class="overflow-x-auto">
                                                            <table class="table table-compact">
                                                                <tbody align="left">
                                                                    <tr>
                                                                        <td>{{ $user->progressplan1kl }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan2kl }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan3kl }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan4kl }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan5kl }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
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
                                                    <form action={{ route('weeklykl.store') }} method="POST">
                                                        @csrf
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    1</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan1" placeholder="Rencana 1"></textarea>
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
                                                                name="progress_plan2" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
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
                                                                name="progress_plan4" value="0%" required>
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
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
                                    <div class="justify-center -mt-2 col-lg-6">
                                        <div class="text-center border bg-white my-3">
                                            <div class="card-header bg-neutral text-white rounded-t-lg">
                                                <div class="row">
                                                    <div class="col-4 flex justify-start">
                                                        <h5 class="text-white text-xl">IC</h5>
                                                    </div>
                                                    <div class="col-8 flex justify-end">
                                                        <label for="weeklyic"
                                                            class="btn-sm bg-primary mr-1 rounded-lg cursor-pointer text-white"><i
                                                                class="fa-solid fa-plus mt-2"></i></label>
                                                        <a data-bs-toggle="modal" data-bs-target="#deleteic"
                                                            class="btn-sm bg-error rounded-lg mr-1 text-white"
                                                            href="#"><i class="fa-solid fa-trash mt-2"></i></a>
                                                        <a data-bs-toggle="modal" data-bs-target="#editModalic"
                                                            class="btn-sm bg-warning rounded-lg  text-white"
                                                            href="#"><i
                                                                class="fa-solid fa-pen-to-square mt-2"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body -m-4">
                                                <div class="row" data-theme="cmyk">
                                                    <div class="col-10">
                                                        <div class="overflow-x-auto">
                                                            <table class="table table-compact">
                                                                <tbody align="left">
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
                                                    <div class="col-2">
                                                        <div class="overflow-x-auto">
                                                            <table class="table table-compact">
                                                                <tbody align="left">
                                                                    <tr>
                                                                        <td>{{ $user->progressplan1ic }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan2ic }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan3ic }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan4ic }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="row">{{ $user->progressplan5ic }}
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
                                                        <form action={{ route('weeklyic.store') }} method="POST">
                                                            @csrf
                                                            <div class="form-control">
                                                                <label class="label">
                                                                    <span class="label-text text-black text-lg">Rencana
                                                                        1</span>
                                                                </label>
                                                                <textarea class="textarea textarea-bordered h-24 " name="plan1" placeholder="Rencana 1"></textarea>
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
                                                                    name="progress_plan2" value="0%" required>
                                                            </div>
                                                            <div class="form-control">
                                                                <label class="label">
                                                                    <span class="label-text text-black text-lg">Rencana
                                                                        3</span>
                                                                </label>
                                                                <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
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
                                                                    name="progress_plan4" value="0%" required>
                                                            </div>
                                                            <div class="form-control">
                                                                <label class="label">
                                                                    <span class="label-text text-black text-lg">Rencana
                                                                        5</span>
                                                                </label>
                                                                <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
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
    </div>
    <script>
        $('#delete').click(function() {
            var sdid = $(this).attr('data-id');
            Swal.fire({
                title: 'Yakin menghapus data ini?',
                text: "Setelah data dihapus, data tidak bisa di kembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "weeklysd/delete/" + sdid + ""
                    Swal.fire(
                        'Data terhapus!',
                        'Data berhasil dihapus.',
                        'success'
                    )
                }
            });
        });
    </script>
@endsection
