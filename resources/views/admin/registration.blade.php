@extends('admin.layout')
@section('css')
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/weather-icon/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/summernote/summernote-bs4.css')}}">

    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/dist/assets/css/components.css')}}">
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Registration</h1>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form class="needs-validation" novalidate="" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Registration</h4>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                  <thead>
                                    <tr>
                                      <th>Action</th>
                                      <th class="text-center" colspan="2">
                                        #
                                      </th>
                                      <th>Nama</th>
                                      <th>NIK</th>
                                      <th>Tempat Lahir</th>
                                      <th>Tanggal Lahir</th>
                                      <th>Alamat</th>
                                      <th>Telepon</th>
                                      <th>Status Pernikahan</th>
                                      <th>Foto KTP</th>
                                      <th>Foto KK</th>
                                      <th>Dokumen Lainnya</th>
                                      <th>No BPJS</th>
                                      <th>No Paspor</th>
                                      <th>Tanggal Paspor</th>
                                      <th>Migrasi Paspor</th>
                                      <th>Created At</th>
                                      <th>Updated At</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($registrations as $data)
                                    <tr>
                                      <td colspan="2">
                                        {{-- <a href="">Edit</a> --}}
                                        <a href="/admin/registration/{{ $data->id }}">Delete</a>
                                      </td>
                                      <td>
                                          {{$loop->iteration}}
                                      </td>
                                      <td>{{$data->nama}}</td>
                                      <td>{{$data->nik}}</td>
                                      <td>{{$data->tempat_lahir}}</td>
                                      <td>{{$data->tanggal_lahir}}</td>
                                      <td>{{$data->alamat}}</td>
                                      <td>{{$data->no_telepon}}</td>
                                      <td>{{$data->status_pernikahan}}</td>
                                      <td><a href="/foto_ktp/{{$data->foto_ktp}}" target="_blank">Lihat KTP</a></td>
                                      <td><a href="/foto_kk/{{$data->foto_kk}}" target="_blank">Lihat KK</a></td>
                                      <td><a href="/foto_dokumen_lainnya/{{$data->foto_dokumen_lainnya}}" target="_blank">Lihat Dokumen</a></td>
                                      <td>{{$data->no_bpjs}}</td>
                                      <td>{{$data->no_paspor}}</td>
                                      <td>{{$data->tanggal_paspor_dikeluarkan}}</td>
                                      <td>{{$data->asal_migrasi_paspor}}</td>
                                      <td>{{$data->created_at}}</td>
                                      <td>{{$data->updated_at}}</td>
                                      {{-- @if($data['status'] != null)
                                        <td>{{ $data['status'] }}</td>
                                      @else
                                        <td>Data Belum Syncronize</td>
                                      @endif --}}
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div> --}}
                    </form>
                  </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <!-- General JS Scripts -->
    <script src="{{asset('stisla/dist/assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/popper.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('stisla/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/chart.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

    <script src="{{asset('stisla/dist/assets/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/js/page/modules-datatables.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{asset('stisla/dist/assets/js/page/index-0.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('stisla/dist/assets/js/scripts.js')}}"></script>
    <script src="{{asset('stisla/dist/assets/js/custom.js')}}"></script>
@endsection
