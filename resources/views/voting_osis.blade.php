@extends('layouts.default')


@section('content')
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: gray;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">KANDIDAT CALON  OSIS {{ ConfigVoting::getConfig()->periode }}</a>
    </div>
</nav>

<div style="margin-bottom: 30px; margin-top: 110px;"></div>

<ul class="cards">
    @foreach($kandidat as $row)
    <li>
        <a href="#kandidat-{{ $row->paslon_no }}" class="card">
            <img src="{{ asset($row->gambar) }}" class="card__image pb-5" alt="" />
            <div class="card__overlay">
                <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                    <img class="card__thumb" src="{{ asset('images/static/icon/number' . $row->paslon_no . '.png') }}" alt="" />
                    <div class="card__header-text">
                        <h3 class="card__title">{{ $row->ketua }} & {{ $row->wakil }}</h3>            
                        <button data-toggle="modal" data-target="#modalVisiMisi" data-visi="{!! $row->visi !!}" data-misi="{!! makeList($row->misi, '|') !!}" type="button" class="btn btn-info">VISI & MISI</button>
                        <button data-toggle="modal" data-target="#modalVoteKandidat" data-ketua="{{ $row->ketua }}" data-wakil="{{ $row->wakil }}" data-kandidat="{{ $row->id }}" type="button" class="btn btn-primary">PILIH</button>
                    </div>
                </div>
            </div>
        </a>      
    </li>  
    @endforeach
</ul>

<div class="modal fade" id="modalVoteKandidat" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalVoteKandidatLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVoteKandidatLabel">Konfirmasi Pemilihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">Dengan ini dengan penuh kesadaran dan dengan tanpa paksaan saya memilih <b><span id="paslon"></span></b> sebagai calon ketua dan wakil ketua OSIS {{ ConfigVoting::getConfig()->title_prefix }} untuk periode {{ ConfigVoting::getConfig()->periode }}.</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('vote.osis') }}" method="post">
                    @csrf
                    <input type="hidden" id="kandidat-id" name="kandidat_id">
                    <button type="submit" class="btn btn-primary">Konfirmasi Pemilihan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalVisiMisi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalVisiMisiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVisiMisiLabel">Visi Misi Kandidat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="text-center">Visi</h6>
                        <hr>
                        <p id="visi"></p>
                    </div>
                    <div class="col-md-12">
                        <h6 class="text-center">Misi</h6>
                        <hr>
                        <div id="misi"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-basic">
    <footer>
        <p class="copyright">
            <b>{{ strtoupper(ConfigVoting::getConfig()->title) }} <br> {{ strtoupper(ConfigVoting::getConfig()->title_prefix) }}</b>
        </p>
    </footer>
</div>
@stop

@push('js')
<script>
    $(document).ready(function(){
        $('#modalVisiMisi').on('show.bs.modal', function(e){
            var modal  = $(this);
            var button = $(e.relatedTarget);

            modal.find('#visi').text(button.data('visi'));
            modal.find('#misi').html(button.data('misi'));
        });

        $('#modalVisiMisi').on('hide.bs.modal', function(e){
            var modal  = $(this);
            var button = $(e.relatedTarget);

            modal.find('#visi').text('');
            modal.find('#misi').html('');
        });

        $('#modalVoteKandidat').on('show.bs.modal', function(e){
            var modal  = $(this);
            var button = $(e.relatedTarget);

            modal.find('#kandidat-id').val(button.data('kandidat'));
            modal.find('#paslon').text(button.data('ketua') + ' & ' + button.data('wakil'));
        });

        @error('voting')
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '{{ $message }}'
        });
        @enderror

        @if (session()->has('message'))
        Swal.fire({
            icon: 'info',
            title: 'Welcome',
            text: '{{ session("message") }}'
        });
        @endif

        @if (session()->has('welcome'))
        Swal.fire({
            icon: 'success',
            text: 'Selamat memilih!'
        });
        @endif
    });
</script>
@endpush
