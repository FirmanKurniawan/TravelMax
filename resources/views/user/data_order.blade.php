@extends('user.layout')
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
                <h1>Order</h1>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form class="needs-validation" novalidate="" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Data Order</h4>
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
                                      <th class="text-center">
                                        #
                                      </th>
                                      <th>Invoice</th>
                                      <th>Produk</th>
                                      <th>Total</th>
                                      <th>Pembayaran</th>
                                      <th>Status Pembayaran</th>
                                      <th>Order Date</th>
                                      <th>Due Date</th>
                                      <th>Bukti Bayar</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($orders as $data)
                                    <tr>
                                      <td>
                                          {{$loop->iteration}}
                                      </td>
                                      <td>{{$data->invoice_number}}</td>
                                      <td>{{$data->product}}</td>
                                      <td>{{$data->total}}</td>
                                      <td>{{$data->payment_method}}</td>
                                      @if ($data->payment_status == "unpaid")
                                        <td>
                                            <a href="/user/confirmation-payment/{{ $data->invoice_number }}">UNPAID</a>
                                        </td>
                                      @elseif ($data->payment_status == "paid")
                                        <td>
                                            PAID
                                        </td>
                                      @endif
                                      <td>{{$data->created_at}}</td>
                                      <td>{{$data->due_date}}</td>
                                      <td><a href="/bukti_bayar/{{ $data->bukti_bayar }}" target="_blank">Lihat</a></td>
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
