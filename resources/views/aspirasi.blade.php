@extends('layouts.default')

@section('css')
    <style>
        body {
            background-image: url("{{ asset('images/static/bg.jpg') }}");
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            height: 90%;
            width: 85%;
            position: absolute;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .card {
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.06);
            border-radius: 10px;
            box-shadow: 20px 20px 25px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
    </style>
@endsection

@section('content')

    <section class="form-aspirasi">
        <div class="container">
            <div class="wrapper">
                <div class="card">
                    <form action="{{ route('aspirasi') }}" method="post">
                        @csrf
                        <input type="hidden" name="voting" value="{{ $voting }}">
                        <div class="col-md-12">
                            <h2 class="text-center mt-4">Berikan Aspirasi Anda!</h2>
                            <div class="card-body row">
                                <div class="col-md-6">
                                    <p class="lead">Ketikan Ucapan Terima Kasih & Tanggapan untuk Pengurus OSIS Masa Bakti
                                        2021/2022
                                    </p>
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
                                    <p class="lead">Ketikan Saran & Aspirasi untuk Ketua & Wakil Ketua OSIS Masa Bakti
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
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary btn-block">Kirim Aspirasi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
