@extends('layouts.default')

@section('content')

    <section class="form-aspirasi">
        <div class="container">
            <form action="{{ route('aspirasi') }}" method="post">
                @csrf
                <input type="hidden" name="voting" value="{{ $voting }}">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-header bg-white">
                                <h4 class="card-title">Berikan Aspirasi Anda!</h4>
                            </div>
                            <div class="card-body row">
                                <div class="col-md-6">
                                    <p class="lead">Tulis ucapan saran, kritik atau aspirasi untuk osis periode 2021/2022</p>
                                    <div class="form-group has-feedback">
                                        <textarea name="ucapan" id="ucapan" cols="30" rows="10"
                                            class="form-control  @error('ucapan') is-invalid @enderror" required=""></textarea>
                                        <div class="invalid-feedback">
                                            @error('ucapan')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="lead">Tulis harapan atau aspirasimu kepada calon {{ $voting }}
                                        {{ ConfigVoting::getConfig()->periode }}</p>
                                    <div class="form-group has-feedback">
                                        <textarea name="aspirasi" id="aspirasi" cols="30" rows="10"
                                            class="form-control  @error('aspirasi') is-invalid @enderror" required=""></textarea>
                                        <div class="invalid-feedback">
                                            @error('aspirasi')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer bg-white">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Kirim Aspirasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@stop


@push('js')
    <script>
        $(document).ready(function() {
            @error('voting')
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{{ $message }}'
                });
            @enderror

            @if (session()->has('voting'))
                Swal.fire({
                    icon: 'success',
                    text: '{{ session('voting') }}'
                });
            @endif
        });
    </script>
@endpush
