@extends('layouts.tailwind')
@section('container')
    <div class="container max-w-screen-xl mb-16">
        <div class="row justify-center">
            <div class="col-12">
                <div class="card lg:w-full mt-4 mx-2 bg-white shadow-xl text-black">
                    <div class="card-body mx-2">
                        <span align="justify">
                            <strong>
                                <h3>EVALUASI WEEKLY KL</h3>
                            </strong>
                            <div class="text-sm breadcrumbs">
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li>Weekly</li>
                                    <li>Evaluasi Weekly KL</li>
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
                                            value="{{ $user->plan1kl }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 1:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan1">{{ $user->evaluate_plan1kl }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 1:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan1" value="{{ $user->progress_plan1kl }}"></input>
                                    </div>
                                </div>

                                <div class="my-10">
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Rencana 2:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered" name="plan2"
                                            value="{{ $user->plan2kl }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 2:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan2">{{ $user->evaluate_plan2kl }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 2:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan2" value="{{ $user->progress_plan2kl }}"></input>
                                    </div>
                                </div>

                                <div class="my-10">
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Rencana 3:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered" name="plan3"
                                            value="{{ $user->plan3kl }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 3:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan3">{{ $user->evaluate_plan3kl }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 3:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan3" value="{{ $user->progress_plan3kl }}"></input>
                                    </div>
                                </div>

                                <div class="my-10">
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Rencana 4:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered" name="plan4"
                                            value="{{ $user->plan4kl }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 4:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan4">{{ $user->evaluate_plan4kl }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 4:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan4" value="{{ $user->progress_plan4kl }}"></input>
                                    </div>
                                </div>

                                <div class="m-0">
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Rencana 5:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered" name="plan5"
                                            value="{{ $user->plan5kl }}" readonly></input>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Evaluasi Rencana 5:</strong></h4>
                                        </label>
                                        <textarea class="textarea textarea-bordered h-24" name="evaluate_plan5">{{ $user->evaluate_plan5kl }}</textarea>
                                    </div>
                                    <div class="form-control">
                                        <label class="label">
                                            <h4><strong>Progres Rencana 5:</strong></h4>
                                        </label>
                                        <input type="text" class="input input-bordered w-20" id="percentage"
                                            name="progress_plan5" value="{{ $user->progress_plan5kl }}"></input>
                                    </div>
                                </div>
                            @endforeach

                            <div class="flex justify-end mt-2 pt-4">
                                <button type="submit" class="btn bg-neutral border-0" data-theme="night"
                                    id="update">Simpan</button>
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
