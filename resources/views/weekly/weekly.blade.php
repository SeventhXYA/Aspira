@extends('layouts.form')
@section('form')
    <div class="container mx-auto mb-16">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black ">
                    <div class="card-body mx-2">
                        <div class="lg:flex">
                            @foreach ($users as $user)
                                <div class="row text-center">
                                    <div class="justify-center -mt-2 col-lg-6">
                                        <div class="text-center border bg-white my-3">
                                            <div class="card-header bg-neutral text-white rounded-t-lg">
                                                <div class="row">
                                                    <div class="col-8 flex justify-start">
                                                        <h5 class="text-white">SELF-DEVELOPMENT</h5>
                                                    </div>
                                                    <div class="col-4 flex justify-end">
                                                        <label for="weeklysd"
                                                            class="btn-sm bg-primary mr-1 rounded-lg text-white"><i
                                                                class="fa-solid fa-plus mt-2.5"></i></label>
                                                        {{-- <a class="btn-sm bg-primary mr-1 rounded-lg text-white"
                                                            href="#weeklysd"><i class="fa-solid fa-plus mt-2.5"></i></a> --}}
                                                        <a data-bs-toggle="modal" data-bs-target="#editModalsd"
                                                            class="btn-sm bg-yellow-400 rounded-lg text-white"
                                                            href="#"><i
                                                                class="fa-solid fa-pen-to-square mt-2.5"></i></a>
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
                                                                name="progress_plan1" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana 2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2" placeholder="Rencana 2"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana 3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana 4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4" placeholder="Rencana 4"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0">
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
                                        {{-- <div class="modal" id="weeklysd">
                                            <div class="modal-box bg-white text-black" data-theme="cmyk">
                                                <a href="#"
                                                    class="text-white btn btn-sm btn-circle absolute right-2 top-2">✕</a>
                                                
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="justify-center -mt-2 col-lg-6">
                                        <div class="text-center border bg-white my-3">
                                            <div class="card-header bg-neutral text-white rounded-t-lg">
                                                <div class="row">
                                                    <div class="col-8 flex justify-start">
                                                        <h5 class="text-white">BISNIS & PROFIT</h5>
                                                    </div>
                                                    <div class="col-4 flex justify-end">
                                                        <label for="weeklybp"
                                                            class="btn-sm bg-primary mr-1 rounded-lg text-white"><i
                                                                class="fa-solid fa-plus mt-2.5"></i></label>
                                                        <a data-bs-toggle="modal" data-bs-target="#editModalsd"
                                                            class="btn-sm bg-yellow-400 rounded-lg text-white"
                                                            href="#"><i
                                                                class="fa-solid fa-pen-to-square mt-2.5"></i></a>
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
                                                                name="progress_plan1" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2" placeholder="Rencana 2"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4" placeholder="Rencana 4"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0">
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
                                                    <div class="col-8 flex justify-start">
                                                        <h5 class="text-white">KELEMBAGAAN</h5>
                                                    </div>
                                                    <div class="col-4 flex justify-end">
                                                        <label for="weeklykl"
                                                            class="btn-sm bg-primary mr-1 rounded-lg text-white"><i
                                                                class="fa-solid fa-plus mt-2.5"></i></label>
                                                        <a data-bs-toggle="modal" data-bs-target="#editModalkl"
                                                            class="btn-sm bg-yellow-400 rounded-lg text-white"
                                                            href="#"><i
                                                                class="fa-solid fa-pen-to-square mt-2.5"></i></a>
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
                                                                name="progress_plan1" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    2</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan2" placeholder="Rencana 2"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan2" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    3</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan3" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    4</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan4" placeholder="Rencana 4"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan4" value="0">
                                                        </div>
                                                        <div class="form-control">
                                                            <label class="label">
                                                                <span class="label-text text-black text-lg">Rencana
                                                                    5</span>
                                                            </label>
                                                            <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
                                                            <input type="hidden" class="form-control "
                                                                name="progress_plan5" value="0">
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
                                                    <div class="col-8 flex justify-start">
                                                        <h5 class="text-white">INOVASI/CREATIVITY</h5>
                                                    </div>
                                                    <div class="col-4 flex justify-end">
                                                        <label for="weeklyic"
                                                            class="btn-sm bg-primary mr-1 rounded-lg text-white"><i
                                                                class="fa-solid fa-plus mt-2.5"></i></label>
                                                        <a data-bs-toggle="modal" data-bs-target="#editModalkl"
                                                            class="btn-sm bg-yellow-400 rounded-lg text-white"
                                                            href="#"><i
                                                                class="fa-solid fa-pen-to-square mt-2.5"></i></a>
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
                                                                    name="progress_plan1" value="0">
                                                            </div>
                                                            <div class="form-control">
                                                                <label class="label">
                                                                    <span class="label-text text-black text-lg">Rencana
                                                                        2</span>
                                                                </label>
                                                                <textarea class="textarea textarea-bordered h-24 " name="plan2" placeholder="Rencana 2"></textarea>
                                                                <input type="hidden" class="form-control "
                                                                    name="progress_plan2" value="0">
                                                            </div>
                                                            <div class="form-control">
                                                                <label class="label">
                                                                    <span class="label-text text-black text-lg">Rencana
                                                                        3</span>
                                                                </label>
                                                                <textarea class="textarea textarea-bordered h-24 " name="plan3" placeholder="Rencana 3"></textarea>
                                                                <input type="hidden" class="form-control "
                                                                    name="progress_plan3" value="0">
                                                            </div>
                                                            <div class="form-control">
                                                                <label class="label">
                                                                    <span class="label-text text-black text-lg">Rencana
                                                                        4</span>
                                                                </label>
                                                                <textarea class="textarea textarea-bordered h-24 " name="plan4" placeholder="Rencana 4"></textarea>
                                                                <input type="hidden" class="form-control "
                                                                    name="progress_plan4" value="0">
                                                            </div>
                                                            <div class="form-control">
                                                                <label class="label">
                                                                    <span class="label-text text-black text-lg">Rencana
                                                                        5</span>
                                                                </label>
                                                                <textarea class="textarea textarea-bordered h-24 " name="plan5" placeholder="Rencana 5"></textarea>
                                                                <input type="hidden" class="form-control "
                                                                    name="progress_plan5" value="0">
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
@endsection
