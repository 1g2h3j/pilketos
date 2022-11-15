<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ConfigVoting::getConfig()->title }} - {{ ConfigVoting::getConfig()->title_prefix }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha512-iqRdf+0KMFmNZgdsA+8bz1MWIIXQBUCavPYVSVI83fcVfH2Y2PnNooLN04bgTNoUiQvIzidiIHJAcIP/uAEV9w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style id="in-login-style">
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
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-radius: 10px;
            border: none;
        }

        .input-group {
            width: 600px;
        }

        */
    </style>
    <link rel="shortcut icon" href="{{ asset('images/static/logosmk.png') }}">
</head>

<body>
    {{-- <div class="container">
        <div class="wrapper">
            <div class="card">
                <div class="text-container text-center">
                    <h2 class="mt-4 text-bold"> <strong> {{ ConfigVoting::getConfig()->title }} </strong> </h2>
                    <img src="{{ asset('images/static/logosmk.png') }}" class="text-center mt-3" alt="Logo"
                        height="230px">
                    <h2 class="mt-4 text-bold"> <strong> {{ ConfigVoting::getConfig()->title_prefix }} </strong> </h2>
                    <br>
                    <div class="d-flex justify-content-center">
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="uuid" class="form-control" autocomplete="off" id="inputNIS" value="{{ old('uuid') }}" placeholder="NIS" required="required">
                                <label for="inputNIS">Masukkan NIS</label>
                              </div>
                              <div class="form-floating">
                                <input type="text" name="uuid" class="form-control" autocomplete="off" id="inputToken" value="" placeholder="Token" required="required">
                                <label for="inputToken">Masukkan Token</label>
                              </div>
                            <div class="d-flex justify-content-center mt-4 login_container">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center py-4">
                        <h2><strong>Pemilihan Ketua & Wakil Ketua Osis</strong></h2>
                        <img src="{{ asset('images/static/logosmk.png') }}" class="text-center py-3" alt="Logo"
                            width="180">
                        <h2 class="mb-3"><strong> SMK Negeri 1 Bawang </strong></h2>

                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-2 pt-2 d-flex flex-colummn">
                                    <div class="row d-flex flex-colummn gap-3">
                                        <div class="btn btn-primary rounded-4" disabled><i class="fas fa-user pt"></i>
                                        </div>
                                        <div class="btn btn-primary rounded-4" disabled><i class="fas fa-key pt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="form-floating my-2">
                                        <input type="text" name="uuid" class="form-control rounded-4"
                                            autocomplete="off" id="inputNIS" value="{{ old('uuid') }}"
                                            placeholder="NIS" required="required">
                                        <label for="inputNIS">Masukkan NIS/NIP</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="text" name="uuid" class="form-control rounded-4"
                                            autocomplete="off" id="inputToken" value="" placeholder="Token"
                                            required="required">
                                        <label for="inputToken">Masukkan Token</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-4 login_container">
                                <button type="submit" class="btn btn-primary rounded-4">MASUK</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style scoped>
        body {
            background-image: url("{{ asset('images/static/bg.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .card {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-radius: 25px;
            border: none;
        }

        .pt {
            padding-top: 11px;
        }

        /* .form-control{
            width: 130%
        } */
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"
        integrity="sha512-KqpIiGUjx42x5akEWt+0Bcw1iFjGO9vXbe+Ef30o55LnchIL9iWx2kYXIO0dC0n1ZU38SspmcXgmjg/Nf0FM6w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            @error('login')
                Swal.fire({
                    icon: 'error',
                    title: 'Login Gagal!',
                    text: '{{ $message }}'
                });
            @enderror

            @if (session()->has('voting'))
                Swal.fire({
                    icon: 'success',
                    text: '{{ session('
                                    voting ') }}'
                });
            @endif
        });
    </script>
</body>

</html>
