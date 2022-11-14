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

        .card {
            background-color: #fff;
            width: 600px;
            border-radius: 33px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 2rem !important;
        }

        .top-container {
            display: flex;
            align-items: center;
        }

        .profile-image {
            border-radius: 14px;
            border: 2px solid #5957f9;
        }

        .name {
            font-size: 18px;
            font-weight: bold;
            color: #272727;
            position: relative;
            top: 8px;
        }

        .type {
            font-size: 16px;
            color: grey;
            position: relative;
            top: 2px;
        }

        .fashion-studio {
            font-size: 16px;
            font-weight: 700;
            color: #272727;
        }

        .fashion-studio-border:hover {
            border-bottom: 1px solid #dee2e6 !important;
        }
    </style>
@endsection

@section('content')
    <div class="container d-flex justify-content-center mt-5">

        <div class="card">

            <div class="top-container">

                <img src="{{ asset('images/static/user.png') }}" class="img-fluid profile-image" width="85">

                <div class="ml-3">
                    <h5 class="name">{{ Auth::user()->name }}</h5>
                    <p class="type">{{ Auth::user()->user_type }}</p>
                </div>
            </div>

            <div class="fashion-studio-border mt-4">
                <span class="fashion-studio">NIS/NIP : {{ Auth::user()->uuid }}</span>
            </div>

            <div class="fashion-studio-border mt-2">
                <span class="fashion-studio"> Kelas :
                    <?php
                    if (Auth::user()->kelas_id == 1) {
                        echo ' X AK 1';
                    } elseif (Auth::user()->kelas_id == 2) {
                        echo ' X AK 2';
                    } elseif (Auth::user()->kelas_id == 3) {
                        echo ' X AK 3';
                    } elseif (Auth::user()->kelas_id == 4) {
                        echo ' X AP 1';
                    } elseif (Auth::user()->kelas_id == 5) {
                        echo ' X AP 2';
                    } elseif (Auth::user()->kelas_id == 6) {
                        echo ' X AP';
                    } elseif (Auth::user()->kelas_id == 7) {
                        echo ' X FS 1';
                    } elseif (Auth::user()->kelas_id == 8) {
                        echo ' X FS 2';
                    } elseif (Auth::user()->kelas_id == 9) {
                        echo ' X MPLB 1';
                    } elseif (Auth::user()->kelas_id == 10) {
                        echo ' X MPLB 2';
                    } elseif (Auth::user()->kelas_id == 11) {
                        echo ' X MPLB 3';
                    } elseif (Auth::user()->kelas_id == 12) {
                        echo ' X PM 1';
                    } elseif (Auth::user()->kelas_id == 13) {
                        echo ' X PM 2';
                    } elseif (Auth::user()->kelas_id == 14) {
                        echo ' X PPLG 1';
                    } elseif (Auth::user()->kelas_id == 15) {
                        echo ' X PPLG 2';
                    } elseif (Auth::user()->kelas_id == 16) {
                        echo ' X TE 1';
                    } elseif (Auth::user()->kelas_id == 17) {
                        echo ' X TE 2';
                    } elseif (Auth::user()->kelas_id == 18) {
                        echo ' X TKJ 1';
                    } elseif (Auth::user()->kelas_id == 19) {
                        echo ' X TKJ 2';
                    } elseif (Auth::user()->kelas_id == 20) {
                        echo ' XI AK 1';
                    } elseif (Auth::user()->kelas_id == 21) {
                        echo ' XI AK 2';
                    } elseif (Auth::user()->kelas_id == 22) {
                        echo ' XI AK 3';
                    } elseif (Auth::user()->kelas_id == 23) {
                        echo ' XI APAT 1';
                    } elseif (Auth::user()->kelas_id == 24) {
                        echo ' XI APAT 2';
                    } elseif (Auth::user()->kelas_id == 25) {
                        echo ' XI APAT 3';
                    } elseif (Auth::user()->kelas_id == 26) {
                        echo ' XI BDP 1';
                    } elseif (Auth::user()->kelas_id == 27) {
                        echo ' XI BDP 2';
                    } elseif (Auth::user()->kelas_id == 28) {
                        echo ' XI OTKP 1';
                    } elseif (Auth::user()->kelas_id == 29) {
                        echo ' XI OTKP 2';
                    } elseif (Auth::user()->kelas_id == 30) {
                        echo ' XI OTKP 3';
                    } elseif (Auth::user()->kelas_id == 31) {
                        echo ' XI RPL 1';
                    } elseif (Auth::user()->kelas_id == 32) {
                        echo ' XI RPL 2';
                    } elseif (Auth::user()->kelas_id == 33) {
                        echo ' XI TB 1';
                    } elseif (Auth::user()->kelas_id == 34) {
                        echo ' XI TB 2';
                    } elseif (Auth::user()->kelas_id == 35) {
                        echo ' XI TKJ 1';
                    } elseif (Auth::user()->kelas_id == 36) {
                        echo ' XI TKJ 2';
                    } elseif (Auth::user()->kelas_id == 37) {
                        echo ' XI TMT 1';
                    } elseif (Auth::user()->kelas_id == 38) {
                        echo ' XI TMT 2';
                    } elseif (Auth::user()->kelas_id == 39) {
                        echo ' XII AK 1';
                    } elseif (Auth::user()->kelas_id == 40) {
                        echo ' XII AK 2';
                    } elseif (Auth::user()->kelas_id == 41) {
                        echo ' XII AK 3';
                    } elseif (Auth::user()->kelas_id == 42) {
                        echo ' XII APAT 1';
                    } elseif (Auth::user()->kelas_id == 43) {
                        echo ' XII APAT 2';
                    } elseif (Auth::user()->kelas_id == 44) {
                        echo ' XII APAT 3';
                    } elseif (Auth::user()->kelas_id == 45) {
                        echo ' XII BDP 1';
                    } elseif (Auth::user()->kelas_id == 46) {
                        echo ' XII BDP 2';
                    } elseif (Auth::user()->kelas_id == 47) {
                        echo ' XII OTKP 1';
                    } elseif (Auth::user()->kelas_id == 48) {
                        echo ' XII OTKP 2';
                    } elseif (Auth::user()->kelas_id == 49) {
                        echo ' XII OTKP 3';
                    } elseif (Auth::user()->kelas_id == 50) {
                        echo ' XII RPL 1';
                    } elseif (Auth::user()->kelas_id == 51) {
                        echo ' XII RPL 2';
                    } elseif (Auth::user()->kelas_id == 52) {
                        echo ' XII TB 1';
                    } elseif (Auth::user()->kelas_id == 53) {
                        echo ' XII TB 2';
                    } elseif (Auth::user()->kelas_id == 54) {
                        echo ' XII TKJ 1';
                    } elseif (Auth::user()->kelas_id == 55) {
                        echo ' XII TKJ 2';
                    } elseif (Auth::user()->kelas_id == 56) {
                        echo ' XII TMT 1';
                    } elseif (Auth::user()->kelas_id == 57) {
                        echo ' XII TMT 2';
                    } elseif (Auth::user()->kelas_id == 58) {
                        echo ' XIII TMT 1';
                    } elseif (Auth::user()->kelas_id == 59) {
                        echo ' XIII TMT 2';
                    }
                    ?>
                </span>
            </div>

            <div class="row text-center">
                <div class="col-md-6 mt-3">
                    <form action="{{ route('logout') }}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-l w-75">Back</button>
                    </form>
                </div>

                <div class="col-md-6 mt-3">
                    <form action="{{ route('agreement') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-l w-75">Next</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
@stop
