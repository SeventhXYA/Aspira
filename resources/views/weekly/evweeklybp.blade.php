@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>EVALUASI WEEKLY BP</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Weekly</li>
                                    <li>Evaluasi Weekly BP</li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="card lg:w-full my-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2" data-theme="cmyk">
                        <form action=" " method="POST" enctype="multipart/form-data">
                            @csrf
                            @foreach ($users as $user)
                                <div class="mb-10">
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Rencana 1:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered" name="plan1"
                                            value="{{ $user->plan1bp }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 1:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan1">{{ $user->evaluate_plan1bp }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 1:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan1" value="{{ $user->progress_plan1bp }}"></input>
                                    </div>
                                </div>

                                <div class="my-10">
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Rencana 2:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered" name="plan2"
                                            value="{{ $user->plan2bp }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 2:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan2">{{ $user->evaluate_plan2bp }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 2:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan2" value="{{ $user->progress_plan2bp }}"></input>
                                    </div>
                                </div>

                                <div class="my-10">
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Rencana 3:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered" name="plan3"
                                            value="{{ $user->plan3bp }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 3:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan3">{{ $user->evaluate_plan3bp }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 3:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan3" value="{{ $user->progress_plan3bp }}"></input>
                                    </div>
                                </div>

                                <div class="my-10">
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Rencana 4:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered" name="plan4"
                                            value="{{ $user->plan4bp }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 4:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan4">{{ $user->evaluate_plan4bp }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 4:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan4" value="{{ $user->progress_plan4bp }}"></input>
                                    </div>
                                </div>

                                <div class="m-0">
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Rencana 5:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered" name="plan5"
                                            value="{{ $user->plan5bp }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 5:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan5">{{ $user->evaluate_plan5bp }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 5:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan5" value="{{ $user->progress_plan5bp }}"></input>
                                    </div>
                                </div>
                            @endforeach

                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" class="btn bg-base-100 hover:bg-primary   border-0"
                                    data-theme="night" id="update">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#update').click(function() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Data Berhasil di Edit',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("input[id='percentage']").on('input', function() {
                $(this).val(function(i, v) {
                    return v.replace('%', '') + '%';
                });
            });
        });
    </script>
@endsection
