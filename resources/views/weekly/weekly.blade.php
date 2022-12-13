@extends('layouts.form')
@section('form')
    <div class='bg-slate-100'>
        <div class="container mx-auto mb-16">
            <div class="row justify-center">
                <div class="col-12">
                    <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black ">
                        <div class="card-body mx-2">
                            <div class="lg:flex">
                                <div class="row text-center">
                                    <div class="justify-center -mt-2 col-lg-6">
                                        <div class="text-center border bg-white my-3">
                                            <div class="card-header bg-base-100 text-white rounded-t-lg">
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
                                                    @foreach ($weeklysd as $wsd)
                                                        <div class="col-10">
                                                            <div class="overflow-x-auto">
                                                                <table class="table table-compact">
                                                                    <tbody align="left">
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wsd->plan1 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wsd->plan2 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wsd->plan3 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wsd->plan4 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wsd->plan5 }}
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
                                                                            <td>{{ $wsd->progress_plan1 }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wsd->progress_plan2 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wsd->progress_plan3 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wsd->progress_plan4 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wsd->progress_plan5 }}
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                                                                class="btn bg-base-100 hover:bg-primary text-white border-0"
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
                                            <div class="card-header bg-base-100 text-white rounded-t-lg">
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
                                                    @foreach ($weeklybp as $wbp)
                                                        <div class="col-10">
                                                            <div class="overflow-x-auto">
                                                                <table class="table table-compact">
                                                                    <tbody align="left">
                                                                        <tr>
                                                                            <td scope="row">1</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wbp->plan1 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">2</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wbp->plan2 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">3</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wbp->plan3 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">4</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wbp->plan4 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">5</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wbp->plan5 }}
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
                                                                            <td>{{ $wbp->progress_plan1 }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wbp->progress_plan2 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wbp->progress_plan3 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wbp->progress_plan4 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wbp->progress_plan5 }}
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                                                                class="btn bg-base-100 hover:bg-primary text-white border-0"
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
                                            <div class="card-header bg-base-100 text-white rounded-t-lg">
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
                                                    @foreach ($weeklykl as $wkl)
                                                        <div class="col-10">
                                                            <div class="overflow-x-auto">
                                                                <table class="table table-compact">
                                                                    <tbody align="left">
                                                                        <tr>
                                                                            <td scope="row">1</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wkl->plan1 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">2</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wkl->plan2 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">3</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wkl->plan3 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">4</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wkl->plan4 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">5</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wkl->plan5 }}
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
                                                                            <td>{{ $wkl->progress_plan1 }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wkl->progress_plan2 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wkl->progress_plan3 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wkl->progress_plan4 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wkl->progress_plan5 }}
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                                                                class="btn bg-base-100 hover:bg-primary text-white border-0"
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
                                            <div class="card-header bg-base-100 text-white rounded-t-lg">
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
                                                    @foreach ($weeklyic as $wic)
                                                        <div class="col-10">
                                                            <div class="overflow-x-auto">
                                                                <table class="table table-compact">
                                                                    <tbody align="left">
                                                                        <tr>
                                                                            <td scope="row">1</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wic->plan1 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">2</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wic->plan2 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">3</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wic->plan3 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">4</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wic->plan4 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">5</td>
                                                                            <td style="min-width: 500px;">
                                                                                {{ $wic->plan5 }}
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
                                                                            <td>{{ $wic->progress_plan1 }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wic->progress_plan2 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wic->progress_plan3 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wic->progress_plan4 }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row">{{ $wic->progress_plan5 }}
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    @endforeach
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
                                                                    class="btn bg-base-100 hover:bg-primary text-white border-0"
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
