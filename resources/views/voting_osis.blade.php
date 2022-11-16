@extends('layouts.default')

@section('headscript')
@endsection
@section('content')
{{-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: gray;">
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
</div> --}}

<div class="row row-cols-1 row-cols-md-3 g-4">
  <!-- card-paslon -->
  <div class="col d-flex justify-content-center">
  <div class="card h-100 card-paslon d-flex align-items-center text-center" style="width: 18rem">
    <div class="no-paslon">1</div>
    <img src="{{ asset('images/kandidat/osis/paslon_1.png') }}" alt="photo-profile" width="120" class="pt-4 rounded-circle" />
    <div class="card-body">
      <h5 class="card-title fst-italic m-0">Ketua</h5>
      <p class="card-text fw-bold">Veri Tri Ardiansyah (XI AKL 1)</p>
      <h5 class="card-title fst-italic m-0">Wakil Ketua</h5>
      <p class="card-text fw-bold">Mariska Fitrianti (AKL 2)</p>
      <div class="row gap-2 d-flex justify-content-center">
        <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" data-bs-target="#visi">VISI</button>
        <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" data-bs-target="#misi">MISI</button>
        <button type="button" class="btn btn-primary col-11">PILIH</button>
      </div>
    </div>
  </div>
  </div>
  <div class="col d-flex justify-content-center">
  <div class="card h-100 card-paslon d-flex align-items-center text-center" style="width: 18rem">
    <div class="no-paslon">2</div>
    <img src="{{ asset('images/kandidat/osis/paslon_2.png') }}" alt="photo-profile" width="120" class="pt-4 rounded-circle" />
    <div class="card-body">
      <h5 class="card-title fst-italic m-0">Ketua</h5>
      <p class="card-text fw-bold">Hasna Afra Kamilah (XI MPLB 1)</p>
      <h5 class="card-title fst-italic m-0">Wakil Ketua</h5>
      <p class="card-text fw-bold">Afifah Ahmad (X FS 1)</p>
      <div class="row gap-2 d-flex justify-content-center">
        <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" data-bs-target="#visi">VISI</button>
        <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" data-bs-target="#misi">MISI</button>
        <button type="button" class="btn btn-primary col-11">PILIH</button>
      </div>
    </div>
  </div>
  </div>
  <div class="col d-flex justify-content-center">
  <div class="card h-100 card-paslon d-flex align-items-center text-center" style="width: 18rem">
    <div class="no-paslon">3</div>
    <img src="{{ asset('images/kandidat/osis/paslon_3.png') }}" alt="photo-profile" width="120" class="pt-4 rounded-circle" />
    <div class="card-body">
      <h5 class="card-title fst-italic m-0">Ketua</h5>
      <p class="card-text fw-bold">Anjani Laisya A. (XI AKL 1)</p>
      <h5 class="card-title fst-italic m-0">Wakil Ketua</h5>
      <p class="card-text fw-bold">Faiza Ajeng (AKL 2)</p>
      <div class="row gap-2 d-flex justify-content-center">
        <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" data-bs-target="#visi">VISI</button>
        <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" data-bs-target="#misi">MISI</button>
        <button type="button" class="btn btn-primary col-11">PILIH</button>
      </div>
    </div>
  </div>
  </div>
  <!--end card-paslon -->
</div>

<div class="row mt-5">
  <div class="col d-flex justify-content-center">
    <button class="btn btn-success px-5 shadow">Submit</button>
  </div>
</div>

  <!-- modal visi -->
  <div class="modal fade" id="visi" tabindex="-1" aria-labelledby="visiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="visiLabel"><strong>VISI</strong></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 fst-italic"><p>Terwujudnya OSIS SMK Negeri 1 Bawang sebagai organisasi yang Demokratis, Dinamis dan Visioner, dengan menjunjung tinggi Asas Kekeluargaan.</p></div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div> --}}
      </div>
    </div>
  </div>
  <!--end modal visi -->

  <!-- modal misi -->
  <div class="modal fade" id="misi" tabindex="-1" aria-labelledby="misiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="misiLabel"><strong>MISI</strong></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 fst-italic">
          <p>1. Meningkatkan ketaqwaan setiap siswa kepada Tuhan Yang Maha Esa.</p>
          <p>2. Menjaga kehormatan antar seluruh warga sekolah dengan mengutamakan hak, kewajiban serta perlakuan dalam menyampaikan ide atau gagasan.</p>
          <p>3. Menjadi penyalur aspirasi yang baik guna terciptanya keselarasan yang Demokratis.</p>
          <p>4. Menjunjung tinggi moral serta memiliki dedikasi tinggi yang berlandaskan Nilai Kekeluargaan.</p>
          <p>5. Bersikap adaptif serta instensif dalam berpikir dan bertindak.</p>
          <p>6. Membangun OSIS SMK Negeri 1 Bawang dalam pacuan roda kepemimpinan yang positif kepada khalayak eksternal.</p>
          </div>
       
      </div>
    </div>
  </div>
  <!--end modal misi -->
  <style scoped>
    .no-paslon {
      position: absolute;
      /* padding: 30px 15px 8px 30px; */
      padding: 65px 25px 15px 76px;
      border-radius: 50%;
      font-size: 1.5rem;
      color: white;
      background-color: #0d6dfc;
      left: -60px;
      top: -55px;
      box-shadow: 0 8px 32px 0 rgba(6, 6, 6, 0.3);
    }
    .card {
      border: none !important;
    }
    .card {
      color: whitesmoke;
      background: rgba(200, 200, 200, 0.37);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.18);
    }
    .card .card-paslon {
      box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.05);
    }
    .modal-body p{
      margin-bottom: 0.5rem;
      /* letter-spacing: 0.5px; */
      font-weight: 200 !important;
    }
  </style>
@endsection

@push('footscript')
<script>
  @error('voting')
        swal({
            icon: 'error',
            title: 'Error!',
            text: '{{ $message }}'
        });
        @enderror

        @if (session()->has('message'))
        swal({
            icon: 'info',
            title: 'Welcome',
            text: '{{ session("message") }}'
        });
        @endif

        @if (session()->has('welcome'))
        swal({
            icon: 'success',
            text: 'Selamat memilih!'
        });
        @endif
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
